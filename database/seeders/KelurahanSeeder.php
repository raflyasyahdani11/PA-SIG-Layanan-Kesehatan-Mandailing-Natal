<?php

namespace Database\Seeders;

use App\Models\Kelurahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataKelurahan = [
            // 01
            'Batahan' => [
                ['nama_kelurahan' => 'Banjar Aur'],
                ['nama_kelurahan' => 'Batahan I'],
                ['nama_kelurahan' => 'Batahan II'],
                ['nama_kelurahan' => 'Batahan III'],
                ['nama_kelurahan' => 'Batahan IV'],
                ['nama_kelurahan' => 'Batu Sondat'],
                ['nama_kelurahan' => 'Bintungan Bejangkar'],
                ['nama_kelurahan' => 'Kampung Kapas'],
                ['nama_kelurahan' => 'Kampung Kapas I'],
                ['nama_kelurahan' => 'Kuala Batahan'],
                ['nama_kelurahan' => 'Kubangan Pandan Sari'],
                ['nama_kelurahan' => 'Kubangan Tompek'],
                ['nama_kelurahan' => 'Muara Pertemuan'],
                ['nama_kelurahan' => 'Pasar Baru Batahan'],
                ['nama_kelurahan' => 'Pulau Tamang'],
                ['nama_kelurahan' => 'Sari Kenanga Batahan'],
                ['nama_kelurahan' => 'Sinunukan VI'],
            ],
            // 02
            'Batang Natal' => [
                ['nama_kelurahan' => 'Aek Baru Jae'],
                ['nama_kelurahan' => 'Aek Baru Julu'],
                ['nama_kelurahan' => 'Aek Guo'],
                ['nama_kelurahan' => 'Aek Holbung'],
                ['nama_kelurahan' => 'Aek Manggis'],
                ['nama_kelurahan' => 'Aek Nabara'],
                ['nama_kelurahan' => 'Aek Nangali'],
                ['nama_kelurahan' => 'Ampung Julu'],
                ['nama_kelurahan' => 'Ampung Padang'],
                ['nama_kelurahan' => 'Ampung Siala'],
                ['nama_kelurahan' => 'Bangkelang'],
                ['nama_kelurahan' => 'Banjar Melayu'],
                ['nama_kelurahan' => 'Batu Madinding'],
                ['nama_kelurahan' => 'Bulu Soma'],
                ['nama_kelurahan' => 'Guo Batu'],
                ['nama_kelurahan' => 'Hadangkahan'],
                ['nama_kelurahan' => 'Hatupangan'],
                ['nama_kelurahan' => 'Huta Lobu'],
                ['nama_kelurahan' => 'Jamur Baru'],
                ['nama_kelurahan' => 'Lubuk Bondar Panjang'],
                ['nama_kelurahan' => 'Lubuk Samboa'],
                ['nama_kelurahan' => 'Muara Parlampungan'],
                ['nama_kelurahan' => 'Muara Soma'],
                ['nama_kelurahan' => 'Rantobi'],
                ['nama_kelurahan' => 'Rao Rao'],
                ['nama_kelurahan' => 'Simanguntong'],
                ['nama_kelurahan' => 'Sipogu'],
                ['nama_kelurahan' => 'Sopo Tinjak'],
                ['nama_kelurahan' => 'Tarlola'],
                ['nama_kelurahan' => 'Tombang Kaluang'],
                ['nama_kelurahan' => 'Tor Naincat'],
            ],
            // 03
            'Bukit Malintang' => [
                ['nama_kelurahan' => 'Bange'],
                ['nama_kelurahan' => 'Bange Nauli'],
                ['nama_kelurahan' => 'Huta Bangun'],
                ['nama_kelurahan' => 'Huta Bangun Jae'],
                ['nama_kelurahan' => 'Janji Matogu'],
                ['nama_kelurahan' => 'Lambou Darul Ihsan'],
                ['nama_kelurahan' => 'Malintang'],
                ['nama_kelurahan' => 'Malintang Jae'],
                ['nama_kelurahan' => 'Malintang Julu'],
                ['nama_kelurahan' => 'Pasar Baru Malintang'],
                ['nama_kelurahan' => 'Sidojadi'],
            ],
            // 04
            'Huta Bargot' => [
                ['nama_kelurahan' => 'Bangun Sejati'],
                ['nama_kelurahan' => 'Huta Bargot Dolok'],
                ['nama_kelurahan' => 'Huta Bargot Lombang'],
                ['nama_kelurahan' => 'Huta Bargot Nauli'],
                ['nama_kelurahan' => 'Huta Bargot Setia'],
                ['nama_kelurahan' => 'Hutarimbaru'],
                ['nama_kelurahan' => 'Kumpulan Setia'],
                ['nama_kelurahan' => 'Mondan'],
                ['nama_kelurahan' => 'Pasar Huta Bargot'],
                ['nama_kelurahan' => 'Saba Padang'],
                ['nama_kelurahan' => 'Sayur Mincat'],
                ['nama_kelurahan' => 'Simalagi'],
            ],
            // 05
            'Panyabungan' => [
                ['nama_kelurahan' => 'Adian Jior'],
                ['nama_kelurahan' => 'Aek Banir'],
                ['nama_kelurahan' => 'Aek Mata'],
                ['nama_kelurahan' => 'Dalan Lidang'],
                ['nama_kelurahan' => 'Darussalam'],
                ['nama_kelurahan' => 'Gunung Barani'],
                ['nama_kelurahan' => 'Gunung Manaon'],
                ['nama_kelurahan' => 'Gunung Tua Jae'],
                ['nama_kelurahan' => 'Gunung Tua Julu'],
                ['nama_kelurahan' => 'Gunung Tua Tonga'],
                ['nama_kelurahan' => 'Huta Lombang Lubis'],
                ['nama_kelurahan' => 'Ipar Bondar'],
                ['nama_kelurahan' => 'Kampung Padang'],
                ['nama_kelurahan' => 'Kayu Jati'],
                ['nama_kelurahan' => 'Kota Siantar'],
                ['nama_kelurahan' => 'Lumban Pasir'],
                ['nama_kelurahan' => 'Manyabar'],
                ['nama_kelurahan' => 'Manyabar Jae'],
                ['nama_kelurahan' => 'Pagaran Tonga'],
                ['nama_kelurahan' => 'Panggorengan'],
                ['nama_kelurahan' => 'Panyabungan I'],
                ['nama_kelurahan' => 'Panyabungan II'],
                ['nama_kelurahan' => 'Panyabungan III'],
                ['nama_kelurahan' => 'Panyabungan Jae'],
                ['nama_kelurahan' => 'Panyabungan Julu'],
                ['nama_kelurahan' => 'Panyabungan Tonga'],
                ['nama_kelurahan' => 'Pasar Hilir'],
                ['nama_kelurahan' => 'Perbangunan'],
                ['nama_kelurahan' => 'Pidoli Dolok'],
                ['nama_kelurahan' => 'Pidoli Lombang'],
                ['nama_kelurahan' => 'Saba Jambu'],
                ['nama_kelurahan' => 'Salam Bue'],
                ['nama_kelurahan' => 'Sarak Matua'],
                ['nama_kelurahan' => 'Sigalapang Julu'],
                ['nama_kelurahan' => 'Siobon Jae'],
                ['nama_kelurahan' => 'Siobon Julu'],
                ['nama_kelurahan' => 'Sipapaga'],
                ['nama_kelurahan' => 'Sipolu-Polu'],
                ['nama_kelurahan' => 'Sopobatu'],
                ['nama_kelurahan' => 'Barbaran']
            ],
            // 06
            'Panyabungan Utara' => [
                ['nama_kelurahan' => 'Beringin Jaya'],
                ['nama_kelurahan' => 'Binanga'],
                ['nama_kelurahan' => 'Huta Damai'],
                ['nama_kelurahan' => 'Hutanaingkan'],
                ['nama_kelurahan' => 'Jambur Padang Matinggi'],
                ['nama_kelurahan' => 'Kampung Baru'],
                ['nama_kelurahan' => 'Mompang Jae'],
                ['nama_kelurahan' => 'Mompang Julu'],
                ['nama_kelurahan' => 'Rumbio'],
                ['nama_kelurahan' => 'Simanondong'],
                ['nama_kelurahan' => 'Sopo Sorik'],
                ['nama_kelurahan' => 'Suka Ramai'],
                ['nama_kelurahan' => 'Tanjung Mompang'],
                ['nama_kelurahan' => 'Torbanua Raja']
            ],
            // 07
            'Panyabungan Timur' => [
                ['nama_kelurahan' => 'Aek Nabara'],
                ['nama_kelurahan' => 'Banjar Lancat'],
                ['nama_kelurahan' => 'Gunung Baringin'],
                ['nama_kelurahan' => 'Huta Bangun'],
                ['nama_kelurahan' => 'Huta Tinggi'],
                ['nama_kelurahan' => 'Hutaimbaru'],
                ['nama_kelurahan' => 'Padang Laru'],
                ['nama_kelurahan' => 'Pagur'],
                ['nama_kelurahan' => 'Pardomuan'],
                ['nama_kelurahan' => 'Parmomapang'],
                ['nama_kelurahan' => 'Ranto Natas'],
                ['nama_kelurahan' => 'Sirangkap'],
                ['nama_kelurahan' => 'Tanjung'],
                ['nama_kelurahan' => 'Tanjung Julu'],
                ['nama_kelurahan' => 'Tebing Tinggi']
            ],
            // 08
            'Panyabungan Selatan' => [
                ['nama_kelurahan' => 'Aek Ngali'],
                ['nama_kelurahan' => 'Hayuraja'],
                ['nama_kelurahan' => 'Huta Julu'],
                ['nama_kelurahan' => 'Huta Raja'],
                ['nama_kelurahan' => 'Hutarimbaru'],
                ['nama_kelurahan' => 'Kayu Laut'],
                ['nama_kelurahan' => 'Lumban Dolok'],
                ['nama_kelurahan' => 'Pagaran Gala-Gala'],
                ['nama_kelurahan' => 'Roburan Dolok'],
                ['nama_kelurahan' => 'Roburan Lombang'],
                ['nama_kelurahan' => 'Tano Bato']
            ],
            // 09
            'Panyabungan Barat' => [
                ['nama_kelurahan' => 'Barbaran'],
                ['nama_kelurahan' => 'Barbaran Jae'],
                ['nama_kelurahan' => 'Batang Gadis'],
                ['nama_kelurahan' => 'Batang Gadis Jae'],
                ['nama_kelurahan' => 'Huta Baringin'],
                ['nama_kelurahan' => 'Huta Tonga BB'],
                ['nama_kelurahan' => 'Longat'],
                ['nama_kelurahan' => 'Runding'],
                ['nama_kelurahan' => 'Sabar Jior'],
                ['nama_kelurahan' => 'Sirambas']
            ],
            // 10
            'Siabu' => [
                ['nama_kelurahan' => 'Aek Mual'],
                ['nama_kelurahan' => 'Bonan Dolok'],
                ['nama_kelurahan' => 'Huaraba I'],
                ['nama_kelurahan' => 'Huaraba II'],
                ['nama_kelurahan' => 'Huta Baringin'],
                ['nama_kelurahan' => 'Huta Godang Muda'],
                ['nama_kelurahan' => 'Huta Puli'],
                ['nama_kelurahan' => 'Huta Raja'],
                ['nama_kelurahan' => 'Lumban Dolok'],
                ['nama_kelurahan' => 'Lumban Pinasa'],
                ['nama_kelurahan' => 'Muara Batang Angkola'],
                ['nama_kelurahan' => 'Pintu Padang Jae'],
                ['nama_kelurahan' => 'Pintu Padang Julu'],
                ['nama_kelurahan' => 'Siabu'],
                ['nama_kelurahan' => 'Sibaruang'],
                ['nama_kelurahan' => 'Sihepeng'],
                ['nama_kelurahan' => 'Sihepeng Dua'],
                ['nama_kelurahan' => 'Sihepeng Lima'],
                ['nama_kelurahan' => 'Sihepeng Opat'],
                ['nama_kelurahan' => 'Sihepeng Sada'],
                ['nama_kelurahan' => 'Sihepeng Tolu'],
                ['nama_kelurahan' => 'Simangambat'],
                ['nama_kelurahan' => 'Simaninggir'],
                ['nama_kelurahan' => 'Sinonoan'],
                ['nama_kelurahan' => 'Tangga Bosi I'],
                ['nama_kelurahan' => 'Tangga Bosi II'],
                ['nama_kelurahan' => 'Tangga Bosi III'],
                ['nama_kelurahan' => 'Tanjung Sialang'],
            ],
            // 11
            'Kotanopan' => [
                ['nama_kelurahan' => 'Batahan'],
                ['nama_kelurahan' => 'Botung'],
                ['nama_kelurahan' => 'Gading Bain'],
                ['nama_kelurahan' => 'Gunung Tua Ms'],
                ['nama_kelurahan' => 'Gunung Tua Sm'],
                ['nama_kelurahan' => 'Huta Baringin Tb'],
                ['nama_kelurahan' => 'Huta Dangka'],
                ['nama_kelurahan' => 'Huta Padang MS'],
                ['nama_kelurahan' => 'Huta Pungkut Jae'],
                ['nama_kelurahan' => 'Huta Pungkut Julu'],
                ['nama_kelurahan' => 'Huta Pungkut Tonga'],
                ['nama_kelurahan' => 'Hutapuli'],
                ['nama_kelurahan' => 'Hutarimbaru Sm'],
                ['nama_kelurahan' => 'Manambin'],
                ['nama_kelurahan' => 'Muara Botung'],
                ['nama_kelurahan' => 'Muara Potan'],
                ['nama_kelurahan' => 'Muara Pungkut'],
                ['nama_kelurahan' => 'Muara Saladi'],
                ['nama_kelurahan' => 'Muara Siambak'],
                ['nama_kelurahan' => 'Padang Bulan'],
                ['nama_kelurahan' => 'Pagar Gunung'],
                ['nama_kelurahan' => 'Pasar Kotanopan'],
                ['nama_kelurahan' => 'Patialo'],
                ['nama_kelurahan' => 'Saba Dolok'],
                ['nama_kelurahan' => 'Sayar Maincat'],
                ['nama_kelurahan' => 'Sibio-Bio'],
                ['nama_kelurahan' => 'Simandolam'],
                ['nama_kelurahan' => 'Simpang Tolang Jae'],
                ['nama_kelurahan' => 'Simpang Tolang Julu'],
                ['nama_kelurahan' => 'Singengu Jae'],
                ['nama_kelurahan' => 'Singengu Julu'],
                ['nama_kelurahan' => 'Sopo Sorik'],
                ['nama_kelurahan' => 'Tamiang'],
                ['nama_kelurahan' => 'Tobang'],
                ['nama_kelurahan' => 'Tombang Bustak'],
                ['nama_kelurahan' => 'Ujung Marisi'],
                ['nama_kelurahan' => 'Usor Tolong'],
            ],
            // 12
            'Ulu Pungkut' => [
                ['nama_kelurahan' => 'Alahan Kae'],
                ['nama_kelurahan' => 'Kabincaran'],
                ['nama_kelurahan' => 'Huta Godang'],
                ['nama_kelurahan' => 'Huta Padang UP'],
                ['nama_kelurahan' => 'Hutaimbaru UP'],
                ['nama_kelurahan' => 'Patahajang'],
                ['nama_kelurahan' => 'Simpang Banyak Jae'],
                ['nama_kelurahan' => 'Simpang Banyak Julu'],
                ['nama_kelurahan' => 'Simpang Duhu Dolok'],
                ['nama_kelurahan' => 'Simpang Duhu Lombang'],
                ['nama_kelurahan' => 'Simpang Pining'],
                ['nama_kelurahan' => 'Tolang'],
            ],
            // 13
            'Muara Sipongi' => [
                ['nama_kelurahan' => 'Aek Botung'],
                ['nama_kelurahan' => 'Bandar Panjang'],
                ['nama_kelurahan' => 'Bandar Panjang Tuo'],
                ['nama_kelurahan' => 'Kampung Pinang'],
                ['nama_kelurahan' => 'Koto Baringin'],
                ['nama_kelurahan' => 'Koto Boru'],
                ['nama_kelurahan' => 'Limau Manis'],
                ['nama_kelurahan' => 'Muara Kumpulan'],
                ['nama_kelurahan' => 'Pasar Muara Sipongi'],
                ['nama_kelurahan' => 'Ranjo Batu'],
                ['nama_kelurahan' => 'Sibinail'],
                ['nama_kelurahan' => 'Simpang Mandepo'],
                ['nama_kelurahan' => 'Tamiang Mudo'],
                ['nama_kelurahan' => 'Tanjung Alai'],
                ['nama_kelurahan' => 'Tanjung Larangan'],
                ['nama_kelurahan' => 'Tanjung Medan'],
            ],
            // 14
            'Lingga Bayu' => [
                ['nama_kelurahan' => 'Aek Garingging'],
                ['nama_kelurahan' => 'Aek Manyuruk'],
                ['nama_kelurahan' => 'Bandar Limabung'],
                ['nama_kelurahan' => 'Bonca Bayuon'],
                ['nama_kelurahan' => 'Dalan Lidang'],
                ['nama_kelurahan' => 'Kampung Baru'],
                ['nama_kelurahan' => 'Lancat'],
                ['nama_kelurahan' => 'Lobung'],
                ['nama_kelurahan' => 'Padang Silojongan'],
                ['nama_kelurahan' => 'Pangkalan'],
                ['nama_kelurahan' => 'Perbatasan'],
                ['nama_kelurahan' => 'Perk. Simpang Gambir'],
                ['nama_kelurahan' => 'Sikumbu'],
                ['nama_kelurahan' => 'Simpang Bajole'],
                ['nama_kelurahan' => 'Simpang Duku'],
                ['nama_kelurahan' => 'Simpang Durian'],
                ['nama_kelurahan' => 'Simpang Gambir'],
                ['nama_kelurahan' => 'Simpang Koje'],
                ['nama_kelurahan' => 'Tangsi Atas'],
                ['nama_kelurahan' => 'Tapus'],
            ],
            // 15
            'Natal' => [
                ['nama_kelurahan' => 'Balimbing'],
                ['nama_kelurahan' => 'Bintuas'],
                ['nama_kelurahan' => 'Bonda Kase'],
                ['nama_kelurahan' => 'Buburan'],
                ['nama_kelurahan' => 'Kampung Sawah'],
                ['nama_kelurahan' => 'Kun-Kun'],
                ['nama_kelurahan' => 'Panggautan'],
                ['nama_kelurahan' => 'Pardamean Baru'],
                ['nama_kelurahan' => 'Pasar I Natal'],
                ['nama_kelurahan' => 'Pasar II Natal'],
                ['nama_kelurahan' => 'Pasar III Natal'],
                ['nama_kelurahan' => 'Pasar V Natal'],
                ['nama_kelurahan' => 'Pasar VI Natal'],
                ['nama_kelurahan' => 'Patiluban Hilir'],
                ['nama_kelurahan' => 'Patiluban Mudik'],
                ['nama_kelurahan' => 'Perkebunan Patiluban'],
                ['nama_kelurahan' => 'Rukun Jaya'],
                ['nama_kelurahan' => 'Sasaran'],
                ['nama_kelurahan' => 'Setia Karya'],
                ['nama_kelurahan' => 'Sikara Kara I'],
                ['nama_kelurahan' => 'Sikara Kara II'],
                ['nama_kelurahan' => 'Sikara Kara III'],
                ['nama_kelurahan' => 'Sikara Kara IV'],
                ['nama_kelurahan' => 'Sikara Kara V'],
                ['nama_kelurahan' => 'Sinunukan V'],
                ['nama_kelurahan' => 'Suka Maju'],
                ['nama_kelurahan' => 'Sundutan Tigo'],
                ['nama_kelurahan' => 'Taluk'],
                ['nama_kelurahan' => 'Tegal Sari'],
                ['nama_kelurahan' => 'Tunas Karya'],
            ],
            // 16
            'Muara Batang Gadis' => [
                ['nama_kelurahan' => 'Batu Mundom'],
                ['nama_kelurahan' => 'Hutaimbaru'],
                ['nama_kelurahan' => 'Lubuk Kapundung'],
                ['nama_kelurahan' => 'Lubuk Kapundung II'],
                ['nama_kelurahan' => 'Manuncang'],
                ['nama_kelurahan' => 'Panunggulan'],
                ['nama_kelurahan' => 'Pasar Singkuang I'],
                ['nama_kelurahan' => 'Pasar Singkuang II'],
                ['nama_kelurahan' => 'Rantau Panjang'],
                ['nama_kelurahan' => 'Sali Baru'],
                ['nama_kelurahan' => 'Sikapas'],
                ['nama_kelurahan' => 'Suka Makmur'],
                ['nama_kelurahan' => 'Tabuyung'],
                ['nama_kelurahan' => 'Tagilang Julu'],
            ],
            // 17
            'Ranto Baek' => [
                ['nama_kelurahan' => 'Bangun Saroha'],
                ['nama_kelurahan' => 'Banjar Maga'],
                ['nama_kelurahan' => 'Duo Sepakat'],
                ['nama_kelurahan' => 'Gonting'],
                ['nama_kelurahan' => 'Gunung Godang'],
                ['nama_kelurahan' => 'Huta Baringin'],
                ['nama_kelurahan' => 'Huta Nauli'],
                ['nama_kelurahan' => 'Huta Raja'],
                ['nama_kelurahan' => 'Lubuk Kancah'],
                ['nama_kelurahan' => 'Manisak'],
                ['nama_kelurahan' => 'Muara Bangko'],
                ['nama_kelurahan' => 'Ranto Nalinjang'],
                ['nama_kelurahan' => 'Ranto Panjang'],
                ['nama_kelurahan' => 'Sampuran'],
                ['nama_kelurahan' => 'Simaninggir'],
                ['nama_kelurahan' => 'Simpang Talap'],
                ['nama_kelurahan' => 'Tandikek'],
            ],
            // 18
            'Tambangan' => [
                ['nama_kelurahan' => 'Angin Barat'],
                ['nama_kelurahan' => 'Huta Tonga AB'],
                ['nama_kelurahan' => 'Laru Baringin'],
                ['nama_kelurahan' => 'Laru Bolak'],
                ['nama_kelurahan' => 'Laru Dolak'],
                ['nama_kelurahan' => 'Laru Lombang'],
                ['nama_kelurahan' => 'Lumban Pasir'],
                ['nama_kelurahan' => 'Muara Mais'],
                ['nama_kelurahan' => 'Muara Mais Jambur'],
                ['nama_kelurahan' => 'Padang Sanggar'],
                ['nama_kelurahan' => 'Panjaringan'],
                ['nama_kelurahan' => 'Pasar Laru'],
                ['nama_kelurahan' => 'Pastap'],
                ['nama_kelurahan' => 'Pastap Julu'],
                ['nama_kelurahan' => 'Rao Rao Dolok'],
                ['nama_kelurahan' => 'Rao Rao Lombang'],
                ['nama_kelurahan' => 'Simangambat TB'],
                ['nama_kelurahan' => 'Tambangan Jae'],
                ['nama_kelurahan' => 'Tambangan Pasoman'],
                ['nama_kelurahan' => 'Tambangan Tonga'],
            ],
            // 19
            'Puncak Sorik Marapi' => [
                ['nama_kelurahan' => 'Handel'],
                ['nama_kelurahan' => 'Huta Baringin'],
                ['nama_kelurahan' => 'Huta Baru'],
                ['nama_kelurahan' => 'Huta Lombang'],
                ['nama_kelurahan' => 'Hutabaringin Julu'],
                ['nama_kelurahan' => 'Hutanmale'],
                ['nama_kelurahan' => 'Hutantinggi'],
                ['nama_kelurahan' => 'Purba Julu'],
                ['nama_kelurahan' => 'Sibanggor Jae'],
                ['nama_kelurahan' => 'Sibanggor Julu'],
                ['nama_kelurahan' => 'Sibanggor Tonga'],
            ],
            // 20
            'Pakantan' => [
                ['nama_kelurahan' => 'Huta Gambir'],
                ['nama_kelurahan' => 'Huta Julu'],
                ['nama_kelurahan' => 'Huta Lancat'],
                ['nama_kelurahan' => 'Huta Padang'],
                ['nama_kelurahan' => 'Huta Toras'],
                ['nama_kelurahan' => 'Pakantan Dolok'],
                ['nama_kelurahan' => 'Pakantan Lombang'],
                ['nama_kelurahan' => 'Silogun'],
            ],
            // 21
            'Naga Juang' => [
                ['nama_kelurahan' => 'Banua Rakyat'],
                ['nama_kelurahan' => 'Banua Simanosor'],
                ['nama_kelurahan' => 'Humbang I'],
                ['nama_kelurahan' => 'Sayur Matua'],
                ['nama_kelurahan' => 'Tambiski'],
                ['nama_kelurahan' => 'Tambiski Nauli'],
            ],
        ];

        $idKecamatan = 1;
        foreach ($dataKelurahan as $data) {
            foreach ($data as $kelurahan) {
                $kelurahan['id_kecamatan'] = $idKecamatan;
                Kelurahan::create($kelurahan);
            }
            $idKecamatan++;
        }
    }
}
