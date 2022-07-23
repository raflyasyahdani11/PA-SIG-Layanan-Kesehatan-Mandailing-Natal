<?php

namespace App\Http\Controllers;

use App\Models\LayananKesehatan;
use Illuminate\Http\Request;

class UserWebController extends Controller
{
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
}
