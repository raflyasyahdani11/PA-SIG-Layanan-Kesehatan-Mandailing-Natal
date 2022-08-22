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

@section('container')
    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container w-100 h-100" id="maps"></div>
        <div id="legend" class="shadow p-3 mb-5 bg-body rounded" style="width: 230px; text-align: left !important;">
            <div class="container bg-white">
                <div class="row fs-5" style="text-align: left">
                    <div class="col-md-12">
                        <div class="row p-2">
                            <div class="col-md-12">
                                Keterangan :
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-12">
                                <i class="fa-solid fa-location-dot text-danger"></i> Rumah sakit <br>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-12">
                                <i class="fa-solid fa-location-dot text-primary"></i> Puskesmas <br>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-12">
                                <i class="fa-solid fa-location-dot text-dark"></i> Klinik<br>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-12">
                                <i class="fa-solid fa-location-dot text-success"></i> Klinik gigi <br>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-12">
                                <i class="fa-solid fa-location-dot text-warning"></i> Balai <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="carousel-container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-6 footer-info">
                            <div class="row">
                                <div class="col-12">
                                    <h1 style="font-size: 2.5rem !important;"><b> Mulai Cari Layanan Kesehatan
                                            Terdekat</b></h1>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <a href="#footer" class="btn btn-success btn-lg">Tekan Icon <i
                                            class="fa-solid fa-diamond-turn-right text-warning"></i> Untuk Mencari Rute
                                        <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-3 footer-contact">
                            <img src="/assets/user/img/clients/turn-right.png" width="50%" class="img-fluid"
                                alt="" id="route">
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <!-- ======= About Us Section ======= -->
@endsection

{{-- @push('js')
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

            updateList(layananKesehatanShow);
            const legend = document.getElementById("legend");

            map.controls[google.maps.ControlPosition.LEFT_CENTER].push(legend);
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

                let url = '/assets/user/img/clients/';

                switch ('{{ $id }}') {
                    case 'Rumah_Sakit':
                        url += 'rs.png';
                        break;
                    case 'Puskesmas':
                        url += 'puskesmas.png';
                        break;
                    case 'Klinik':
                        url += 'klinik.png';
                        break;
                    case 'Klinik_Gigi':
                        url += 'gigii.png';
                        break;
                    case 'Balai':
                        url += 'balai.png';
                        break;
                }

                const kategori = '{{ $id }}'.replace('_', ' ');

                if (e.jenis_layanan === kategori) {
                    const image = {
                        url: url,
                        scaledSize: new google.maps.Size(40, 40)
                    };

                    const infowindow = new google.maps.InfoWindow({
                        content: contentString,
                    });

                    const marker = new google.maps.Marker({
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

                    google.maps.event.addListener(infowindow, 'domready', function() {
                        document.getElementById("button-route").addEventListener("click", () => {
                            calculateAndDisplayRoute(nowLocation, positions);
                            infowindow.close();
                        });
                    });
                }
            });
        }
        window.initMap = initMap;
    </script>
@endpush --}}


@push('js')
    <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap"></script>
    <script>
        let layananKesehatanShow = @js($layananKesehatans);
        let tempLayananKesehatanShow = layananKesehatanShow;

        let map;
        let directionsService;
        let directionsRenderer;
        let distanceMatrixService;

        const markers = [];

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
            distanceMatrixService = new google.maps.DistanceMatrixService();

            map = new google.maps.Map(document.getElementById("maps"), {
                zoom: 9,
                center: mandailing,
                mapTypeControl: false,
                fullscreenControl: false,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.LEFT_CENTER
                },
                streetViewControl: false
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

            document.getElementById('route').addEventListener('click', async (e) => {
                const tempLayananKesehatan = tempLayananKesehatanShow.map((v) => {
                    const layKesCoord = {
                        lat: v.latitude,
                        lng: v.longitude
                    };

                    return {
                        ...layKesCoord,
                        jarak: haversine(nowLocation, layKesCoord)
                    }
                });

                tempLayananKesehatan.sort((a, b) => a.jarak - b.jarak);

                const request = {
                    origins: [nowLocation],
                    destinations: tempLayananKesehatan.slice(0, 25),
                    travelMode: 'DRIVING'
                };

                const response = await distanceMatrixService.getDistanceMatrix(request);

                let min = 0;
                let index = 0;

                response.rows[0].elements.forEach((v, i) => {
                    if (i === 0) {
                        min = v?.distance?.value;
                        index = i;
                    }

                    if (min > v?.distance?.value) {
                        min = v?.distance?.value;
                        index = i;
                    }
                });

                const nearestLocation = tempLayananKesehatan[index];

                calculateAndDisplayRoute(nowLocation, nearestLocation);
            });

            updateList();

            const legend = document.getElementById("legend");
            const legend2 = document.getElementById("legend-2");

            map.controls[google.maps.ControlPosition.LEFT_CENTER].push(legend);
            map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend2);
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

        function updateList() {
            const id = '{{ $id }}'.replace('_', ' ');
            let layananKesehatans = tempLayananKesehatanShow.filter(f => f.jenis_layanan === id);

            layananKesehatans.forEach(e => {
                let tenagaMedis = '';
                let iconColor = '';
                let iconLogo = '';

                const positions = {
                    lat: e.latitude,
                    lng: e.longitude
                };

                e.tenaga_medis.forEach(el => {
                    tenagaMedis +=
                        `<li>${el.nama_tenaga_medis} (${el.profesi_tenaga_medis})</li>`;
                });

                switch (id) {
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
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-dark float-end px-3" id="button-route">Jalankan <i class="fa-solid fa-location-arrow"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;

                let infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                const icon = {
                    path: "M384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192H384z",
                    fillColor: iconColor,
                    fillOpacity: 1,
                    strokeWeight: 0,
                    scale: 0.065,
                };

                const marker = new google.maps.Marker({
                    position: positions,
                    title: `${e.jenis_layanan} ${e.nama_layanan}`,
                    icon: icon,
                    map: map
                });

                markers.push(marker);

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
