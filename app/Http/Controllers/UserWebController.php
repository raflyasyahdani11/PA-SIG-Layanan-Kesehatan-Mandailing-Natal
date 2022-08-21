<?php

namespace App\Http\Controllers;

use App\Models\LayananKesehatan;
use Illuminate\Http\Request;

class UserWebController extends Controller
{
    protected $nodes = [];
    public function showHome()
    {
        $layananKesehatans = LayananKesehatan::with(['kelurahan', 'kelurahan.kecamatan', 'tenaga_medis'])->get();

        return view('users.home')
            ->with('title', 'Home')
            ->with(compact('layananKesehatans'));
    }

    public function showLayananKesehatan($id)
    {
        $layananKesehatans = LayananKesehatan::with(['kelurahan', 'kelurahan.kecamatan', 'tenaga_medis'])->get();

        return view('users.layanankesehatan')
            ->with('title', 'Layanan Kesehatan')
            ->with(compact('layananKesehatans','id'));
    }

    public function showProfil()
    {
        return view('users.profil')
            ->with('title', 'Profil');
    }

    public function findDestination()
	{
		$id = $this->input->get_post('id');
		$start = $this->input->get_post('start');
		$post = $this->post->findById($id);

		if (! empty($id) && ! is_null($post)) {
			$nodes = json_decode($post->map_nodes, true);
			$edges = array_map(function ($value) {
				return ['a' => $value['source'], 'b' => $value['destination']];
			}, json_decode($post->map_edges, true));

			$finish = $post->map_end;


		//star algoritma
			$adjs = [];
			foreach ($nodes as $node) {
				$this->nodes[] = [$node['lat'], $node['lng']];
				$adjs[] = [];
			}

			foreach ($edges as $edge) {
				array_push($adjs[$edge['a']], [$edge['b'], $this->calculate_distance($edge['a'], $edge['b'])]);
				array_push($adjs[$edge['b']], [$edge['a'], $this->calculate_distance($edge['a'], $edge['b'])]);
			}

			$dist = [];
			for ($i = 0; $i < count($this->nodes); $i++) {
				$dist[] = -1;
			}
			$pre = [];
			foreach (range(0, (count($this->nodes) > 0) ? count($this->nodes) - 1 : 0) as $i) {
				$pre[] = $i;
			}

			$pq = [[0, 0, $start, $start]];
			while (count($pq) > 0) {
				$top = array_pop($pq); // Array terakhir
				if ($dist[$top[2]] === -1) {
					$dist[$top[2]] = $top[1];
					$pre[$top[2]] = $top[3];

					if ($top[2] === $finish) {
						break;
					}

					foreach ($adjs[$top[2]] as $node) {
						array_push($pq, [
							$top[1] + $node[1] + $this->calculate_distance($finish, $node[0]),
							$top[1] + $node[1],
							$node[0],
							$top[2],
						]);
					}
				}
			}

			$checking = array_filter($pre, function ($val) use ($start) {
				return $val == $start;
			});

			if (count($checking) > 1) {
				$last = $finish;
				$route = [$last];
				while ($last != $start) {
					$last = $pre[$last];
					$route = array_merge([$last], $route);
				}

				//ending algoritma

				
				echo json_encode([
					'status' => 'success',
					'data' => [
						'route' => $route,
						'distance' => $dist[$finish],
						'nodes' => array_map(function ($val) use ($nodes) {
							return $nodes[$val];
						}, $route),
						'waypoints' => array_map(function ($val) use ($nodes) {
							return $nodes[$val];
						}, array_filter($route, function ($key) use ($start, $finish) {
							return $key != $start && $key != $finish;
						})),
						'node' => [
							'start' => $nodes[$start],
							'end' => $nodes[$finish],
						],
					],
				]);
			} else {
				echo json_encode([
					'status' => 'failed',
					'data' => '',
					'error' => 'Jalur tidak ditemukan',
				]);
			}
		}
	}
}
