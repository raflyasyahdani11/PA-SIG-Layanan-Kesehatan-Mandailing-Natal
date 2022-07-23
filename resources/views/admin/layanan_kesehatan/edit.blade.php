@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12 mb-4">
            <div class="row">
                <div class="col-12 col-xl-10 mx-auto">
                    <div class="card card-body border-0 shadow mb-4">
                        <h2 class="h5 mb-4">Edit Data</h2>
                        <form autocomplete="off"
                            action="{{ route('admin.layanan_kesehatan.edit.post', $layananKesehatan->id_layanan_kesehatan) }}"
                            method="POST" enctype="multipart/form-data">
                            <input autocomplete="false" name="hidden" type="text" style="display:none;">
                            @csrf
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <div>
                                        <label for="first_name">Nama Layanan</label>
                                        <input class="form-control" id="first_name" type="text" placeholder="Nama"
                                            name="nama_layanan"
                                            value="{{ old('nama_layanan', $layananKesehatan->nama_layanan) }}">
                                        @error('nama_layanan')
                                            <small id="emailHelp" class="form-text text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="first_name">Jenis Layanan</label>
                                        <div class="input-group mb-3">
                                            <select class="form-select" id="jenis_layanan" name="jenis_layanan">
                                                <option selected hidden>Pilih...</option>
                                                <option value="Rumah Sakit">Rumah Sakit</option>
                                                <option value="Puskesmas">Puskesmas</option>
                                                <option value="Klinik">Klinik</option>
                                                <option value="Klinik Gigi">Klinik Gigi</option>
                                                <option value="Balai">Balai</option>
                                            </select>
                                        </div>
                                        @error('jenis_layanan')
                                            <small id="emailHelp" class="form-text text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="first_name">Alamat</label>
                                        <textarea class="form-control" style="resize: none;" placeholder="Alamat" name="alamat" id="textarea" rows="4">{{ old('alamat', $layananKesehatan->alamat) }}</textarea>
                                        @error('alamat')
                                            <small id="emailHelp" class="form-text text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="first_name">Jam Operasi</label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <input class="form-control datepicker-input" type="time" name="jam_buka"
                                                    value="{{ old('jam_buka', $layananKesehatan->jam_buka) }}" />
                                                @error('jam_buka')
                                                    <small id="emailHelp" class="form-text text-danger">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                            <div class="col-md-2">
                                                <h4 class="text-center align-middle">-</h4>
                                            </div>
                                            <div class="col-md-5">
                                                <input class="form-control datepicker-input" type="time" name="jam_tutup"
                                                    value="{{ old('jam_tutup', $layananKesehatan->jam_tutup) }}" />
                                                @error('jam_tutup')
                                                    <small id="emailHelp" class="form-text text-danger">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <label for="first_name">Fasilitas</label>
                                        <select class="form-select" id="fasilitas" name="fasilitas[]" multiple="multiple">
                                            <option value="Rawat Inap">Rawat Inap</option>
                                            <option value="Kantin">Kantin</option>
                                            <option value="Ruang Besalin">Ruang Besalin</option>
                                        </select>
                                        @error('fasilitas')
                                            <small id="emailHelp" class="form-text text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="first_name">Kecamatan</label>
                                        <select class="form-select" id="kecamatan" name="id_kecamatan">
                                            <option selected hidden>Pilih...</option>
                                            @foreach ($kecamatans as $kecamatan)
                                                <option value="{{ $kecamatan->id_kecamatan }}">
                                                    {{ $kecamatan->nama_kecamatan }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('kecamatan')
                                            <small id="emailHelp" class="form-text text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="first_name">Kelurahan</label>
                                        <select class="form-select" id="kelurahan" name="id_kelurahan">
                                            <option selected hidden>Pilih...</option>
                                        </select>
                                        @error('id_kelurahan')
                                            <small id="emailHelp" class="form-text text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="first_name">Latitude</label>
                                        <input class="form-control" id="lat" type="text" name="latitude"
                                            placeholder="Latitude"
                                            value="{{ old('latitude', $layananKesehatan->latitude) }}">
                                        @error('latitude')
                                            <small id="emailHelp" class="form-text text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="first_name">Longitude</label>
                                        <input class="form-control" id="long" type="text" name="longitude"
                                            placeholder="Longitude"
                                            value="{{ old('longitude', $layananKesehatan->longitude) }}">
                                        @error('longitude')
                                            <small id="emailHelp" class="form-text text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="formFileMultiple" class="form-label">Upload Image</label><br>
                                        <img src="{{ asset('gambar/' . $layananKesehatan->gambar_tempat) }}"
                                            class="img-thumbnail" alt="..." width="100" id="output">
                                        <input class="form-control mt-2" type="file" id="inputImage"
                                            name="gambar_tempat">
                                        @error('gambar_tempat')
                                            <small id="emailHelp" class="form-text text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Submit</button>
                                    </div>
                                </div>
                                <div class="col-md-7 px-5">
                                    <div class="w-100 bg-grey" style="height: 500px" id="maps"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="/assets/admin/assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap"></script>
    <script>
        $(document).ready(function() {
            let fasilitas = @js($layananKesehatan->fasilitas);

            $('#fasilitas').select2({
                placeholder: 'Pilih Fasilitas (Boleh Lebih dari 1)',
                allowClear: true
            });

            $('#fasilitas').val(fasilitas).change();
        });
    </script>
    <script>
        "usestrict";

        // Input Kelurahan
        const kecamatanSelect = document.querySelector('#kecamatan');
        const kelurahanSelect = document.querySelector('#kelurahan');
        const fasilitasSelect = document.querySelector('#fasilitas');
        const jenisLayanan = document.querySelector('#jenis_layanan');

        const kelurahans = @js($kelurahans);

        // Input LatLong
        const inputLatitude = document.querySelector('#lat');
        const inputLongitude = document.querySelector('#long');

        // Thumbnail Gambar
        const inputImage = document.querySelector('#inputImage');

        let lat = {{ $layananKesehatan->latitude }};
        let lng = {{ $layananKesehatan->longitude }};

        function init() {
            inputLatitude.value = lat;
            inputLongitude.value = lng;

            kecamatanSelect.addEventListener('change', (e) => {
                const kecamatan = e.target.value;

                let optionResult = "";

                const resultKelurahan = kelurahans.filter((kel) => {
                    return kel.kecamatan.id_kecamatan == kecamatan
                });

                resultKelurahan.forEach((kel, i) => {
                    optionResult +=
                        `<option value="${kel.id_kelurahan}">${kel.nama_kelurahan}</option>`;
                });

                kelurahanSelect.innerHTML = optionResult;
            });

            setTimeout((e) => {
                kecamatanSelect.value = `{{ $layananKesehatan->kelurahan->id_kecamatan }}`;
                kecamatanSelect.dispatchEvent(new Event('change'));
                kelurahanSelect.value = `{{ $layananKesehatan->kelurahan->id_kelurahan }}`;

                jenisLayanan.value = `{{ $layananKesehatan->jenis_layanan }}`;
            }, 500);

            inputImage.addEventListener('change', (e) => {
                let image = document.querySelector('#output');
                image.src = URL.createObjectURL(event.target.files[0]);
            });
        }

        function initMap() {
            const mandailing = {
                lat: lat,
                lng: lng
            };

            const map = new google.maps.Map(document.getElementById("maps"), {
                zoom: 13,
                center: mandailing,
                mapTypeControl: false,
                fullscreenControl: false,
                // zoomControl: false,
                streetViewControl: false
            });

            const marker = new google.maps.Marker({
                position: {
                    lat: lat,
                    lng: lng
                },
                draggable: true,
                map: map
            });

            inputLatitude.addEventListener('input', async (e) => {
                lat = e.target.value;

                latLng = {
                    lat: parseFloat(lat),
                    lng: parseFloat(lng)
                };

                updateMarkerAndPanTo(marker, latLng, map);
            });

            inputLongitude.addEventListener('input', (e) => {
                lng = e.target.value;

                latLng = {
                    lat: parseFloat(lat),
                    lng: parseFloat(lng)
                };

                updateMarkerAndPanTo(marker, latLng, map);
            });

            map.addListener("click", (e) => {
                inputLatitude.value = e.latLng.lat();
                inputLongitude.value = e.latLng.lng();

                inputLatitude.dispatchEvent(new Event('input'));
                inputLongitude.dispatchEvent(new Event('input'));
            });
        };

        function updateMarkerAndPanTo(marker, latLng, map) {
            marker.setPosition(latLng);
            map.panTo(latLng);
            map.setZoom(13);
        }

        init();
        window.initMap = initMap;
    </script>
@endpush
