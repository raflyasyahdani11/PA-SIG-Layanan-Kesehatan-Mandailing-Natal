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
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"
                        style="background-image: url(/assets/user/img/hero-carousel/bg-madina.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <div class="float-left" style="text-align: left;">
                                    <h2 class="animate__animated animate__fadeInDown" style="font-size: 5rem">Selamat Datang
                                    </h2>
                                    <h2 class="animate__animated animate__fadeInDown"
                                        style="font-size: 2.5rem; font-weight: 500">Di Pusat Informasi Layanan
                                        Kesehatan
                                        Mandailing Natal</h3>

                                        <a href="#footer"
                                            class="btn-lg btn-get-started px-6 py-3 scrollto animate__animated animate__fadeInUp">Get
                                            Started <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section><!-- End Hero Section -->
    <main id="main">
        <!-- ======= hero Section ======= -->
        <section id="hero">
            <div class="hero-container w-100 h-100" id="maps"></div>
            <div id="legend" class="shadow p-2 bg-body rounded" style="width: 230px; text-align: left !important;">
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
                                    <i class="fa-solid fa-location-dot text-danger"></i> Rumah sakit <input type="checkbox"
                                        id="rumah_sakit" checked /> <br>
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <i class="fa-solid fa-location-dot text-primary"></i> Puskesmas <input type="checkbox"
                                        id="puskesmas" checked /> <br>
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <i class="fa-solid fa-location-dot text-dark"></i> Klinik <input type="checkbox"
                                        id="klinik" checked /> <br>
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <i class="fa-solid fa-location-dot text-success"></i> Klinik gigi <input type="checkbox"
                                        id="klinik_gigi" checked /> <br>
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <i class="fa-solid fa-location-dot text-warning"></i> Balai <input type="checkbox"
                                        id="balai" checked /> <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="legend-2" class="shadow p-1 mb-5 me-4 bg-body rounded" style="text-align: left !important;">
                <div class="container bg-white">
                    <p class="fs-6"><i>*Klik <i class="bi bi-geo-alt-fill"></i> yang tersedia untuk informasi lebih lengkap</i></p>
                </div>
            </div>
        </section>
        <!-- End Hero Section -->
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
                                        <a href="#maps" class="btn btn-success btn-lg" id="route">Rute Terdekat <i
                                                class="fa-solid fa-diamond-turn-right text-warning"></i> 
                                            <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-3 col-md-3 footer-contact">
                                <img src="/assets/user/img/clients/turn-right.png" width="50%" class="img-fluid"
                                    alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ======= About Us Section ======= -->
        <section id="about">
            <div class="container">
                <header class="section-header">
                    <div class="row">
                        <div class="col-2 p-0">
                            <img src="/assets/user/img/madina.png" alt="" width="70%">
                        </div>
                        <div class="col-6 p-0">
                            <h3 style="text-align: left; font-size: 2.5rem; position: relative; top: 50px;">Dinas Kesehatan
                                Mandailing Natal</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 p-0">
                            <p class="mt-3 mb-0 p-0" style="text-align: left; font-size: 1.2rem;">Dinas Kesehatan Mandiling
                                Natal Menyediakan informasi lokasi layanan kesehatan di daerah
                                Mandailing Natal .Berikut jenis layanan kesehatan yang dapat dilihat pada website ini :
                            </p>
                            <ul style="margin-top: 10px; font-size: 1.2rem; font-weight: 600">
                                <li>Rumah Sakit</li>
                                <li>Puskesmas</li>
                                <li>Klinik</li>
                                <li>Klinik Gigi</li>
                                <li>Balai</li>
                            </ul>
                        </div>
                    </div>
                </header>
            </div>
        </section><!-- End About Us Section -->
    </main>
@endsection

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

        const filterCond = {
            rumahSakit: true,
            puskesmas: true,
            klinik: true,
            klinikGigi: true,
            balai: true
        };

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

            // Checkbox Listener
            document.getElementById("rumah_sakit").addEventListener('change', (e) => {
                filterCond.rumahSakit = e.target.checked;
                filterLayananKesehatan();
            });

            document.getElementById("puskesmas").addEventListener('change', (e) => {
                filterCond.puskesmas = e.target.checked;
                filterLayananKesehatan();
            });

            document.getElementById("klinik_gigi").addEventListener('change', (e) => {
                filterCond.klinikGigi = e.target.checked;
                filterLayananKesehatan();
            });

            document.getElementById("klinik").addEventListener('change', (e) => {
                filterCond.klinik = e.target.checked;
                filterLayananKesehatan();
            });

            document.getElementById("balai").addEventListener('change', (e) => {
                filterCond.balai = e.target.checked;
                filterLayananKesehatan();
            });
        }

        function clearMarkers() {
            markers?.forEach(marker => marker?.setMap(null));
        }

        function filterLayananKesehatan() {
            let resultLayananFilter = [];

            if (filterCond.rumahSakit) {
                const tempLayananKesehatan = layananKesehatanShow.filter(f => f.jenis_layanan === "Rumah Sakit");
                tempLayananKesehatanShow.push(...tempLayananKesehatan);
            } else {
                tempLayananKesehatanShow = tempLayananKesehatanShow.filter(f => f.jenis_layanan !== "Rumah Sakit");
            }

            if (filterCond.puskesmas) {
                const tempLayananKesehatan = layananKesehatanShow.filter(f => f.jenis_layanan === "Puskesmas");
                tempLayananKesehatanShow.push(...tempLayananKesehatan);
            } else {
                tempLayananKesehatanShow = tempLayananKesehatanShow.filter(f => f.jenis_layanan !== "Puskesmas");
            }

            if (filterCond.klinikGigi) {
                const tempLayananKesehatan = layananKesehatanShow.filter(f => f.jenis_layanan === "Klinik Gigi");
                tempLayananKesehatanShow.push(...tempLayananKesehatan);
            } else {
                tempLayananKesehatanShow = tempLayananKesehatanShow.filter(f => f.jenis_layanan !== "Klinik Gigi");
            }

            if (filterCond.klinik) {
                const tempLayananKesehatan = layananKesehatanShow.filter(f => f.jenis_layanan === "Klinik");
                tempLayananKesehatanShow.push(...tempLayananKesehatan);
            } else {
                tempLayananKesehatanShow = tempLayananKesehatanShow.filter(f => f.jenis_layanan !== "Klinik");
            }

            if (filterCond.balai) {
                const tempLayananKesehatan = layananKesehatanShow.filter(f => f.jenis_layanan === "Balai");
                tempLayananKesehatanShow.push(...tempLayananKesehatan);
            } else {
                tempLayananKesehatanShow = tempLayananKesehatanShow.filter(f => f.jenis_layanan !== "Balai");
            }

            updateList();
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
            clearMarkers();
            let layananKesehatans = tempLayananKesehatanShow;
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
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-dark float-end px-3" id="button-route">Jalankan <i class="fa-solid fa-location-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;

                const infowindow = new google.maps.InfoWindow({
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
