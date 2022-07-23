@extends('layouts.admin')

@section('css')
    <style>
        .popup {}

        .popup td {
            padding: 10px;
            text-align: left;
        }

        .popup .up {
            vertical-align: text-top;
        }

        .smalltext {
            font-size: 0.1rem !important;
        }
    </style>
@endsection

@section('content')
    <div class="hero-container w-100" style="height: 600px" id="maps"></div>
@endsection

@push('js')
    <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap"></script>
    <script>
        const layananKesehatans = @js($layananKesehatans);

        function initMap() {
            const mandailing = {
                lat: 0.78378,
                lng: 99.25495
            };

            const map = new google.maps.Map(document.getElementById("maps"), {
                zoom: 9,
                center: mandailing,
                mapTypeControl: false,
                fullscreenControl: false
            });

            layananKesehatans.forEach(e => {
                let tenagaMedis = '';

                e.tenaga_medis.forEach(el => {
                    tenagaMedis +=
                        `<li class="text-start smalltext">${el.nama_tenaga_medis} (${el.profesi_tenaga_medis})</li>`;
                });

                const contentString =
                `<div class="w-auto h-auto container">
                      <h6 class="text-dark mb-3"><b>${e.jenis_layanan} ${e.nama_layanan}</b></h6>
                      <div class="row">
                        <div class="col-4">
                          <img src="{{ asset('gambar') }}/${e.gambar_tempat}" class="img-thumbnail" style="width: 150px; height: 180px; object-fit: cover">  
                        </div>
                        <div class="col-8">
                            <table class="popup">
                                <tr>
                                    <td><b>Alamat</b></td>
                                    <td>:</td>
                                    <td>${e.alamat}, Kel. ${e.kelurahan.nama_kelurahan}, Kec. ${e.kelurahan.kecamatan.nama_kecamatan}</td>
                                </tr>
                                <tr>
                                    <td><b>Jam Operasi</b></td>
                                    <td>:</td>
                                    <td>${e.jam_buka} - ${e.jam_tutup}</td>
                                </tr>
                                <tr>
                                    <td><b>Fasilitas</b></td>
                                    <td>:</td>
                                    <td>${e.fasilitas}</td>
                                </tr>
                                <tr>
                                    <td class="up"><b>Tenaga Medis</b></td>
                                    <td class="up">:</td>
                                    <td>
                                        <ul>${tenagaMedis}</ul>
                                    </td>
                                </tr>
                            </table>
                        </div>
                      </div>
                    </div>`;

                let infowindow = new google.maps.InfoWindow({
                    content: contentString,
                });

                let url = '/assets/user/img/clients/';

                switch (e.jenis_layanan) {
                    case 'Rumah Sakit':
                        url += 'rs.png';
                        break;
                    case 'Puskesmas':
                        url += 'puskesmas.png';
                        break;
                    case 'Klinik':
                        url += 'klinik.png';
                        break;
                    case 'Klinik Gigi':
                        url += 'gigi.png';
                        break;
                    case 'Balai':
                        url += 'balai.png';
                        break;
                }

                let image = {
                    url: url,
                    scaledSize: new google.maps.Size(40, 40)
                };

                let marker = new google.maps.Marker({
                    position: {
                        lat: e.latitude,
                        lng: e.longitude
                    },
                    title: `${e.jenis_layanan} ${e.nama_layanan}`,
                    icon: image
                });

                marker.setMap(map);
                marker.addListener("click", () => {
                    infowindow.open({
                        anchor: marker,
                        map,
                        shouldFocus: false,
                    });
                });

                map.addListener("click", () => {
                    infowindow.close();
                });
            });
        }

        window.initMap = initMap;
    </script>
@endpush
