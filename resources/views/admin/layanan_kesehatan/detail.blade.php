@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12 col-xl-6 mb-4">
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card card-body border-0 shadow mb-4">
                        <h2 class="h5 mb-4">Detail Data</h2>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <img src="{{ asset('gambar/' . $layananKesehatan->gambar_tempat) }}" class="img-thumbnail"
                                    alt="..." style="object-fit: cover; width: 100%; height: 300px">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xl-3 col-3">
                                <p>Nama Layanan</p>
                            </div>
                            <div class="col-xl-1 col-1">
                                <p>:</p>
                            </div>
                            <div class="col-xl-4 col-4">
                                <p>{{ $layananKesehatan->nama_layanan }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-3">
                                <p>Jenis Layanan</p>
                            </div>
                            <div class="col-xl-1 col-1">
                                <p>:</p>
                            </div>
                            <div class="col-xl-4 col-4">
                                <p>{{ $layananKesehatan->jenis_layanan }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-3">
                                <p>Alamat</p>
                            </div>
                            <div class="col-xl-1 col-1">
                                <p>:</p>
                            </div>
                            <div class="col-xl-8 col-8">
                                <p>{{ $layananKesehatan->alamat }}, Kel.
                                    {{ $layananKesehatan->kelurahan->nama_kelurahan }}, Kec.
                                    {{ $layananKesehatan->kelurahan->kecamatan->nama_kecamatan }}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-3">
                                <p>Jam Operasi</p>
                            </div>
                            <div class="col-xl-1 col-1">
                                <p>:</p>
                            </div>
                            <div class="col-xl-4 col-4">
                                <p>{{ $layananKesehatan->jam_buka }} - {{ $layananKesehatan->jam_tutup }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-3">
                                <p>Lat Long</p>
                            </div>
                            <div class="col-xl-1 col-1">
                                <p>:</p>
                            </div>
                            <div class="col-xl-4 col-4">
                                <p>{{ $layananKesehatan->latitude }} - {{ $layananKesehatan->longitude }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-3">
                                <p>Fasilitas</p>
                            </div>
                            <div class="col-xl-1 col-1">
                                <p>:</p>
                            </div>
                            <div class="col-xl-4 col-4">
                                <ul>
                                    @foreach ($layananKesehatan->fasilitas as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6">
            <div class="w-100 bg-grey" style="height: 500px" id="maps"></div>
        </div>
    </div>
@endsection


@push('js')
    <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap">
    </script>
    <script>
        "usestrict";

        const layananKesehatan = @js($layananKesehatan);

        function initMap() {
            const center = {
                lat: layananKesehatan.latitude,
                lng: layananKesehatan.longitude
            };

            const map = new google.maps.Map(document.getElementById("maps"), {
                zoom: 13,
                center: center,
                mapTypeControl: false,
                fullscreenControl: false,
                zoomControl: false,
                streetViewControl: false
            });

            const marker = new google.maps.Marker({
                position: center,
                map: map
            });
        }
    </script>
@endpush
