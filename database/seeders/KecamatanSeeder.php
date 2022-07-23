<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataKecamatan = [
            /** 01 **/ ['nama_kecamatan' => 'Batahan'],
            /** 02 **/ ['nama_kecamatan' => 'Batang Natal'],
            /** 03 **/ ['nama_kecamatan' => 'Bukit Malintang'],
            /** 04 **/ ['nama_kecamatan' => 'Huta Bargot'],
            /** 05 **/ ['nama_kecamatan' => 'Panyabungan'],
            /** 06 **/ ['nama_kecamatan' => 'Panyabungan Utara'],
            /** 07 **/ ['nama_kecamatan' => 'Panyabungan Timur'],
            /** 08 **/ ['nama_kecamatan' => 'Panyabungan Selatan'],
            /** 09 **/ ['nama_kecamatan' => 'Panyabungan Barat'],
            /** 10 **/ ['nama_kecamatan' => 'Siabu'],
            /** 11 **/ ['nama_kecamatan' => 'Kotanopan'],
            /** 12 **/ ['nama_kecamatan' => 'Ulu Pungkut'],
            /** 13 **/ ['nama_kecamatan' => 'Muara Sipongi'],
            /** 14 **/ ['nama_kecamatan' => 'Lingga Bayu'],
            /** 15 **/ ['nama_kecamatan' => 'Natal'],
            /** 16 **/ ['nama_kecamatan' => 'Muara Batang Gadis'],
            /** 17 **/ ['nama_kecamatan' => 'Ranto Baek'],
            /** 18 **/ ['nama_kecamatan' => 'Tambangan'],
            /** 19 **/ ['nama_kecamatan' => 'Puncak Sorik Marapi'],
            /** 20 **/ ['nama_kecamatan' => 'Pakantan'],
            /** 21 **/ ['nama_kecamatan' => 'Naga Juang']
        ];

        foreach ($dataKecamatan as $data) {
            Kecamatan::create($data);
        }
    }
}
