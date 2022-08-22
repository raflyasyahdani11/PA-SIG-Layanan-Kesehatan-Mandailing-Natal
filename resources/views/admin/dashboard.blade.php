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

        #legend {
            font-family: Arial, sans-serif;
            background: #fff;
            padding: 10px;
            margin: 30px;
            border-radius: 30px;
            /* border: 3px solid #000; */
        }

        .kotak-infowindow {
            width: 38rem;
        }

        .kotak-infowindow .kotak-header {
            border-radius: 8px 8px 0px 0px;
            padding: 16px 16px 1px;
        }

        .kotak-infowindow .kotak-body {
            padding: 16px;
        }

        .kotak-infowindow .kotak-body img {
            border-radius: 16px;
            width: 150px;
            height: 200px;
            object-fit: cover;
        }

        .kotak-infowindow .kotak-body .kotak-content {
            margin-left: 24px;
        }

        /** Google Styling **/
        .gm-style-iw {
            padding: 0 !important;
        }

        .gm-style-iw-d {
            overflow: hidden !important;
            padding: 0 !important;
            font-weight: initial !important;
            font-size: initial !important;
            color: black;
        }

        button.gm-ui-hover-effect {
            top: 5px !important;
            right: 18px !important;
        }

        .gm-style-iw button.gm-ui-hover-effect span {
            width: 30px !important;
            height: 30px !important;
            background-color: white !important;
        }

        #hero p {
            color: initial !important;
            margin: 8px !important;
            width: initial !important;
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
                let iconColor = '';
                let iconLogo = '';

                e.tenaga_medis.forEach(el => {
                    tenagaMedis +=
                        `<li class="text-start">${el.nama_tenaga_medis} (${el.profesi_tenaga_medis})</li>`;
                });

                switch (e.jenis_layanan) {
                    case 'Rumah Sakit':
                        iconColor = '#DC3544';
                        iconLogo = 'fa-solid fa-hospital';
                        break;
                    case 'Puskesmas':
                        iconColor = '#0C6EFD';
                        iconLogo = 'fa-solid fa-circle-h';
                        break;
                    case 'Klinik':
                        iconColor = '#212529';
                        iconLogo = 'fa-solid fa-house-medical';
                        break;
                    case 'Klinik Gigi':
                        iconColor = '#1D8754';
                        iconLogo = 'fa-solid fa-tooth';
                        break;
                    case 'Balai':
                        iconColor = '#FEC107';
                        iconLogo = 'fa-solid fa-stethoscope';
                        break;
                }

                const contentString =
                    `<div class="kotak-infowindow">
                        <div class="kotak-header" style="background-color: ${iconColor};">
                            <h5 class="text-white"><i class="${iconLogo}"></i> <b>${e.jenis_layanan} ${e.nama_layanan}</b></h5>
                        </div>
                        <div class="kotak-body d-flex">
                            <div>
                                <img src="{{ asset('gambar') }}/${e.gambar_tempat}" />
                            </div>
                            <div class="kotak-content w-100">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="m-0"><b>Alamat</b> : ${e.alamat}, Kel. ${e.kelurahan.nama_kelurahan}, Kec. ${e.kelurahan.kecamatan.nama_kecamatan}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="m-0"><b>Fasilitas</b> : ${e.fasilitas} </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><b>Jam Buka</b> : ${e.jam_buka} - ${e.jam_tutup}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="mb-0"><b>Tenaga Medis</b> : </p>
                                        <ul>
                                            ${tenagaMedis}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;

                const infowindow = new google.maps.InfoWindow({
                    content: contentString,
                });

                const icon = {
                    path: "M384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192H384z",
                    fillColor: iconColor,
                    fillOpacity: 1,
                    strokeWeight: 0,
                    scale: 0.065,
                };

                const marker = new google.maps.Marker({
                    position: {
                        lat: e.latitude,
                        lng: e.longitude
                    },
                    title: `${e.jenis_layanan} ${e.nama_layanan}`,
                    icon: icon,
                    map: map
                });

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
