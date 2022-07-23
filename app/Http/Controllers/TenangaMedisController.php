<?php

namespace App\Http\Controllers;

use App\Models\TenagaMedis;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TenangaMedisController extends Controller
{
    public function store(Request $request)
    {
        $data = [
            'id_tenaga_medis' => 'tenaga-medis-' . Str::random(5) . '-' . Str::random(5),
            'nama_tenaga_medis' => $request->post('nama_tenaga_medis'),
            'profesi_tenaga_medis' => $request->post('profesi_tenaga_medis'),
            'id_layanan_kesehatan' => $request->post('id_layanan_kesehatan')
        ];

        $message = '';
        $status = '';

        $tenagaMedis = TenagaMedis::create($data);

        if ($tenagaMedis) {
            $message = 'Data Layanan Kesehatan <b>Berhasil</b> Ditambahkan!';
            $status = 'success';
        } else {
            $message = '<b>Gagal</b> Menambahkan Data Layanan Kesehatan!';
            $status = 'danger';
        }

        return redirect()->route('admin.tenaga_medis')
            ->with(compact('message', 'status'));
    }

    public function edit(Request $request, $id)
    {
        $data = [
            'id_tenaga_medis' => 'tenaga-medis-' . Str::random(5) . '-' . Str::random(5),
            'nama_tenaga_medis' => $request->post('nama_tenaga_medis'),
            'profesi_tenaga_medis' => $request->post('profesi_tenaga_medis'),
            'id_layanan_kesehatan' => $request->post('id_layanan_kesehatan')
        ];

        $message = '';
        $status = '';

        $tenagaMedis = TenagaMedis::find($id);
        $tenagaMedis->update($data);

        if ($tenagaMedis) {
            $message = 'Data Layanan Kesehatan <b>Berhasil</b> Di Edit!';
            $status = 'success';
        } else {
            $message = '<b>Gagal</b> Mengedit Data Layanan Kesehatan!';
            $status = 'danger';
        }

        return redirect()->route('admin.tenaga_medis')
            ->with(compact('message', 'status'));
    }

    public function delete($id)
    {
        $tenagaMedis = TenagaMedis::find($id);
        $resultDeleteTenaga = true;
        
        $message = '';
        $status = '';

        if ($resultDeleteTenaga) {
            if ($tenagaMedis->delete()) {
                $message = 'Data Tenaga Medis <b>Berhasil</b> Dihapus!';
                $status = 'success';
            } else {
                $message = '<b>Gagal</b> Menghapus Data Tenaga Medis!';
                $status = 'danger';
            }
        }
            return redirect()->route('admin.tenaga_medis')
                ->with(compact('message', 'status'));
        }
    }

