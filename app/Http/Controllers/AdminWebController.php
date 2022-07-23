<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\LayananKesehatan;
use App\Models\TenagaMedis;
use Illuminate\Http\Request;

class AdminWebController extends Controller
{
    public function showDashboard()
    {
        $layananKesehatans = LayananKesehatan::with(['kelurahan', 'kelurahan.kecamatan', 'tenaga_medis'])->get();


        return view('admin.dashboard')
            ->with('title', 'Dashboard')
            ->with('description', 'Halaman Dashboard')
            ->with(compact('layananKesehatans'));
    
    }

    // Layanan Kesehatan
    public function showLayananKesehatanHome()
    {
        $layananKesehatans = LayananKesehatan::all();


        return view('admin.layanan_kesehatan.home')
            ->with('title', 'Layanan Kesehatan')
            ->with('description', 'Halaman Layanan Kesehatan')
            ->with(compact('layananKesehatans'));
    }

    public function showLayananKesehatanAdd()
    {
        $kecamatans = Kecamatan::all();
        $kelurahans = Kelurahan::with('kecamatan')->get();

        return view('admin.layanan_kesehatan.add')
            ->with('title', 'Tambah Layanan Kesehatan')
            ->with('description', 'Halaman Tambah Layanan Kesehatan')
            ->with(compact('kecamatans', 'kelurahans'));
    }

    public function showLayananKesehatanDetail(Request $request, $id = '')
    {
        $layananKesehatan = LayananKesehatan::find($id);

        return view('admin.layanan_kesehatan.detail')
            ->with('title', 'Detail Layanan Kesehatan')
            ->with('description', 'Halaman Detail Layanan Kesehatan')
            ->with(compact('layananKesehatan'));
    }
    public function showLayananKesehatanEdit(Request $request, $id = '')
    {
        $layananKesehatan = LayananKesehatan::find($id);
        $kecamatans = Kecamatan::all();
        $kelurahans = Kelurahan::with('kecamatan')->get();

        return view('admin.layanan_kesehatan.edit')
            ->with('title', 'Edit Layanan Kesehatan')
            ->with('description', 'Halaman Edit Layanan Kesehatan')
            ->with(compact('kecamatans', 'kelurahans'))
            ->with(compact('layananKesehatan'));
    }

    // Tenaga Medis
    public function showTenagaMedisHome()
    {
        $tenagaMedis = TenagaMedis::all();

        return view('admin.tenaga_medis.home')
            ->with('title', 'Tenaga Medis')
            ->with('description', 'Halaman Tenaga Medis')
            ->with(compact('tenagaMedis'));
    }

    public function showTenagaMedisAdd()
    {
        $layananKesehatans = LayananKesehatan::all();

        return view('admin.tenaga_medis.add')
            ->with('title', 'Tambah Tenaga Medis')
            ->with('description', 'Halaman Tambah Tenaga Medis')
            ->with(compact('layananKesehatans'));
    }

    public function showTenagaMedisEdit(Request $request, $id = '')
    {
        $tenagaMedis = TenagaMedis::find($id);
        $layananKesehatans = LayananKesehatan::all();

        return view('admin.tenaga_medis.edit')
            ->with('title', 'Edit Tenaga Medis')
            ->with('description', 'Halaman Edit Tenaga Medis')
            ->with(compact('tenagaMedis'))
            ->with(compact('layananKesehatans'));
    }
}
