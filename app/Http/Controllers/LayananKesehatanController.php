<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\LayananKesehatan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LayananKesehatanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'jenis_layanan' => 'required',
            'alamat' => 'required',
            'jam_buka' => 'required',
            'jam_tutup' => 'required',
            'fasilitas' => 'required',
            'id_kecamatan' => 'required',
            'id_kelurahan' => 'required',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric'
        ]);

        $namaTempatLayanan = $request->post('nama_layanan');

        $data = [
            'id_layanan_kesehatan' => 'lay-kes-' . Str::random(5) . '-' . Str::random(5),
            'nama_layanan' => $namaTempatLayanan,
            'jenis_layanan' => $request->post('jenis_layanan'),
            'alamat' => $request->post('alamat'),
            'jam_buka' => $request->post('jam_buka'),
            'jam_tutup' => $request->post('jam_tutup'),
            'fasilitas' => $request->post('fasilitas'),
            'id_kecamatan' => $request->post('id_kecamatan'),
            'id_kelurahan' => $request->post('id_kelurahan'),
            'longitude' => $request->post('longitude'),
            'latitude' => $request->post('latitude')
        ];

        $gambar = $request->file('gambar_tempat');
        $namaFile = Str::snake($namaTempatLayanan) . '_' . Str::lower(Str::random(9)) . '.' . $gambar->extension();

        $data['gambar_tempat'] = $namaFile;

        // Fungsi dari if yaitu untuk memindahkan Gambar
        $message = '';
        $status = '';

        if ($gambar->storeAs('images', $namaFile)) {
            $layananKesehatan = LayananKesehatan::create($data);

            if ($layananKesehatan) {
                $message = 'Data Layanan Kesehatan <b>Berhasil</b> Ditambahkan!';
                $status = 'success';
            } else {
                $message = '<b>Gagal</b> Menambahkan Data Layanan Kesehatan!';
                $status = 'danger';
            }
        } else {
            $message = '<b>Gagal</b> Menambahkan Data Layanan Kesehatan!';
            $status = 'danger';
        }

        return redirect()->route('admin.layanan_kesehatan')
            ->with(compact('message', 'status'));
    }


    public function edit(Request $request, $id)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'jenis_layanan' => 'required',
            'alamat' => 'required',
            'jam_buka' => 'required',
            'jam_tutup' => 'required',
            'fasilitas' => 'required',
            'id_kecamatan' => 'required',
            'id_kelurahan' => 'required',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric'
        ]);

        $namaTempatLayanan = $request->post('nama_layanan');

        $data = [
            'nama_layanan' => $namaTempatLayanan,
            'jenis_layanan' => $request->post('jenis_layanan'),
            'alamat' => $request->post('alamat'),
            'jam_buka' => $request->post('jam_buka'),
            'jam_tutup' => $request->post('jam_tutup'),
            'fasilitas' => $request->post('fasilitas'),
            'id_kecamatan' => $request->post('id_kecamatan'),
            'id_kelurahan' => $request->post('id_kelurahan'),
            'longitude' => $request->post('longitude'),
            'latitude' => $request->post('latitude')
        ];

        $layananKesehatan = LayananKesehatan::find($id);

        $gambar = $request->file('gambar_tempat');

        $message = '';
        $status = '';

        // Kondisi jika gambar juga di update
        if ($gambar) {
            $statusDelete = Storage::delete('images/' . $layananKesehatan->gambar_tempat);
            $namaFile = Str::snake($namaTempatLayanan) . '_' . Str::lower(Str::random(9)) . '.' . $gambar->extension();

            $data['gambar_tempat'] = $namaFile;

            if ($statusDelete && $gambar->storeAs('images', $namaFile) && $layananKesehatan->update($data)) {
                $message = 'Data Layanan Kesehatan <b>Berhasil</b> Diubah!';
                $status = 'success';
            } else {
                $message = '<b>Gagal</b> Mengubah Data Layanan Kesehatan!';
                $status = 'danger';
            }
        } else {
            if ($layananKesehatan->update($data)) {
                $message = 'Data Layanan Kesehatan <b>Berhasil</b> Diubah!';
                $status = 'success';
            } else {
                $message = '<b>Gagal</b> Mengubah Data Layanan Kesehatan!';
                $status = 'danger';
            }
        }

        return redirect()->route('admin.layanan_kesehatan')
            ->with(compact('message', 'status'));
    }


    public function delete($id)
    {
        $layananKesehatan = LayananKesehatan::find($id);

        $statusGambar = Storage::delete('images/' . $layananKesehatan->gambar_tempat);

        $resultDeleteTenaga = false;

        if (count($layananKesehatan->tenaga_medis) > 0) {
            foreach ($layananKesehatan->tenaga_medis as $tenaga) {
                if ($tenaga->delete()) {
                    $resultDeleteTenaga = true;
                }
            }
        } else {
            $resultDeleteTenaga = true;
        }


        $message = '';
        $status = '';

        // Cek gambar sudah dihapus 
        if ($resultDeleteTenaga) {
            if ($statusGambar) {
                if ($layananKesehatan->delete()) {
                    $message = 'Data Layanan Kesehatan <b>Berhasil</b> Dihapus!';
                    $status = 'success';
                } else {
                    $message = '<b>Gagal</b> Menghapus Data Layanan Kesehatan!';
                    $status = 'danger';
                }
            } else {
                $message = '<b>Gagal</b> Menghapus Data Layanan Kesehatan!';
                $status = 'danger';
            }
        }

        return redirect()->route('admin.layanan_kesehatan')
            ->with(compact('message', 'status'));
    }
}
