<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function showKadis()
    {
        return view('users.profile.kadis')->with('title', 'ProfilKepalaDinas');
    }

    public function showSekretaris()
    {
        return view('users.profile.sekretaris')->with('title', 'Sekretaris');
    }

    public function showBidangKesehatan()
    {
        return view('users.profile.bidangkesehatan')->with('title', 'BidangKesehatanMasyarakat');
    }
    
    public function showBidangPencegahan()
    {
        return view('users.profile.bidangpencegahan')->with('title', 'BidangPencegahan');
    }
    public function showBidangPelayanan()
    {
        return view('users.profile.bidangpelayanan')->with('title', 'BidangPelayanan');
    }
    public function showBidangSumber()
    {
        return view('users.profile.bidangsumber')->with('title', 'BidangSumberDaya');
    }
    public function showUnit()
    {
        return view('users.profile.unit')->with('title', 'BidangUnitPelaksana');
    }
    public function showKelompok()
    {
        return view('users.profile.kelompok')->with('title', 'BidangKelompokjabatan');
    }
}
