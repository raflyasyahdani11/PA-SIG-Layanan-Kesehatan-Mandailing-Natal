@extends('layouts.main')

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
    </style>
@endsection

@section('container')
    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container w-100 h-100" id="maps"></div>
    </section>
    <!-- End Hero Section -->

    <section id="clients">
        <div class="container col-6 mb-4" data-aos="zoom-out">
            <header class="section-header">
            </header>
            <div class="clients-slider swiper col-1 mb-1">
                <div class="swiper-wrapper">
                    <div class="">
                        <img src="/assets/user/img/clients/bg.png" class="img-fluid" alt="" id="route">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients">
        <div class="container col-6 mb-4" data-aos="zoom-out">
            <header class="section-header">
            </header>
            <div class="clients-slider swiper col-3 mb-4">
                <div class="swiper-wrapper">
                    <div class=""><img src="/assets/user/img/clients/rs.png" class="img-fluid" alt=""></div>
                    <div class=""><img src="/assets/user/img/clients/puskesmas.png" class="img-fluid" alt="">
                    </div>
                    <div class=""><img src="/assets/user/img/clients/klinik.png" class="img-fluid" alt="">
                    </div>
                    <div class=""><img src="/assets/user/img/clients/gigi.png" class="img-fluid" alt=""></div>
                    <div class=""><img src="/assets/user/img/clients/balai.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Layanan Kesehatan ======= -->
@endsection

@push('js')
    <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap"></script>
    <script>
        let layananKesehatanShow = @js($layananKesehatans);

        let map;
        let directionsService;
        let directionsRenderer;

        const nowLocation = {
            lat: 0,
            lng: 0
        }

        function initMap() {
            const mandailing = {
                lat: 0.78378,
                lng: 99.25495
            };

            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer();

            map = new google.maps.Map(document.getElementById("maps"), {
                zoom: 9,
                center: mandailing,
                mapTypeControl: false,
                fullscreenControl: false
            });

            directionsRenderer.setOptions({
                polylineOptions: {
                    strokeColor: '#363636'
                }
            });

            directionsRenderer.setMap(map);

            const options = {
                enableHighAccuracy: true,
                timeout: 5000,
                maximumAge: 0
            };

            const image = {
                url: '/assets/user/img/clients/people.png',
                scaledSize: new google.maps.Size(40, 40)
            };

            const markers = new google.maps.Marker({
                position: nowLocation,
                title: `Lokasi anda Sekarang`,
                icon: image,
                draggable: true,
                map: map
            });

            markers.addListener('position_changed', () => {
                nowLocation.lat = markers.position.lat();
                nowLocation.lng = markers.position.lng();
            });

            map.addListener("click", (e) => {
                const liveCoord = {
                    lat: e.latLng.lat(),
                    lng: e.latLng.lng()
                }

                markers.setPosition(liveCoord);
            });

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const liveCoord = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        }

                        markers.setPosition(liveCoord);
                    }, (err) => {
                        console.warn(`ERROR(${err.code}): ${err.message}`);
                    }, options);
            }

            document.getElementById('route').addEventListener('click', (e) => {
                let min = 0;
                const nearestLocation = {
                    lat: 0,
                    lng: 0
                };

                layananKesehatanShow.forEach((v, i) => {
                    const posLayananKesehatan = {
                        lat: v.latitude,
                        lng: v.longitude
                    };

                    const jarak = haversine(posLayananKesehatan, nowLocation);

                    if (i === 0) {
                        min = jarak;
                        nearestLocation.lat = v.latitude;
                        nearestLocation.lng = v.longitude;
                    }

                    if (jarak < min) {
                        min = jarak;
                        nearestLocation.lat = v.latitude;
                        nearestLocation.lng = v.longitude;
                    }
                });

                calculateAndDisplayRoute(nowLocation, nearestLocation);
            });

            updateList(layananKesehatanShow);
        }

        function calculateAndDisplayRoute(start, destination) {
            directionsService
                .route({
                    origin: start,
                    destination: destination,
                    travelMode: google.maps.TravelMode.DRIVING,
                })
                .then((response) => {
                    directionsRenderer.setDirections(response);
                })
                .catch((e) => window.alert("Directions request failed due to " + status));
        }

        function haversine(coords1, coords2, isMiles) {
            function toRad(x) {
                return x * Math.PI / 180;
            }

            let lon1 = coords1.lng;
            let lat1 = coords1.lat;

            let lon2 = coords2.lng;
            let lat2 = coords2.lat;

            let R = 6371; // km

            let x1 = lat2 - lat1;
            let dLat = toRad(x1);
            let x2 = lon2 - lon1;
            let dLon = toRad(x2)
            let a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(toRad(lat1)) * Math.cos(toRad(lat2)) *
                Math.sin(dLon / 2) * Math.sin(dLon / 2);
            let c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            let d = R * c;

            if (isMiles) d /= 1.60934;

            return d;
        }

        function updateList(layanan) {
            let layananKesehatans = layanan;
            layananKesehatans.forEach(e => {
                let tenagaMedis = '';

                e.tenaga_medis.forEach(el => {
                    tenagaMedis +=
                        `<li class="text-start">${el.nama_tenaga_medis} (${el.profesi_tenaga_medis})</li>`;
                });

                const positions = {
                    lat: e.latitude,
                    lng: e.longitude
                };

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
                                <tr>
                                    <td colspan="3">
                                        <button id="button-route" class="btn">
                                            <img src="/assets/user/img/clients/bg.png" class="img-thumbnail" style="width: 30px; height: 30px; object-fit: cover">
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                      </div>
                    </div>`;

                let infowindow = new google.maps.InfoWindow({
                    content: contentString
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

                const image = {
                    url: url,
                    scaledSize: new google.maps.Size(40, 40)
                };

                const marker = new google.maps.Marker({
                    position: positions,
                    title: `${e.jenis_layanan} ${e.nama_layanan}`,
                    icon: image,
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

                google.maps.event.addListener(infowindow, 'domready', function() {
                    document.getElementById("button-route").addEventListener("click", () => {
                        calculateAndDisplayRoute(nowLocation, positions, directionsService,
                            directionsRenderer);
                        infowindow.close();
                    });
                });
            });
        }

        window.initMap = initMap;
    </script>
@endpush
