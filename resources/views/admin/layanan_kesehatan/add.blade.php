@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12 mb-4">
            <div class="row">
                <div class="col-12 col-xl-10 mx-auto">
                    <div class="card card-body border-0 shadow mb-4">
                        <h2 class="h5 mb-4">Tambah Data</h2>
                        <form autocomplete="off" action="{{ route('admin.layanan_kesehatan.add.post') }}" method="POST"
                            enctype="multipart/form-data">

                            <input autocomplete="false" name="hidden" type="text" style="display:none;">
                            @csrf
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <div>
                                        <label for="first_name">Nama Layanan</label>
                                        <input class="form-control" id="first_name" type="text" placeholder="Nama"
                                            name="nama_layanan" value="{{ old('nama_layanan') }}">
                                        @error('nama_layanan')
                                            <small id="emailHelp" class="form-text text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="first_name">Jenis Layanan</label>
                                        <div class="input-group mb-3">
                                            <select class="form-select" id="inputGroupSelect01" name="jenis_layanan">
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
                                        <textarea class="form-control" style="resize: none;" placeholder="Alamat" name="alamat" id="textarea" rows="4">{{ old('alamat') }}</textarea>
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
                                                    value="{{ old('jam_buka') }}" />
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
                                                    value="{{ old('jam_tutup') }}" />
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
                                            <option value="Rawat Inap">Instalasi Rawat Inap</option>
                                            <option value="Kantin">Kantin</option>
                                            <option value="Ruang Besalin">Ruang Besalin</option>
                                            <option value="Rawat Inap">Instalasi Gawat Darurat</option>
                                            <option value="Kantin">Instalasi Pelayanan Intensif</option>
                                            <option value="Ruang Besalin">Instalasi Perinatal</option>
                                            <option value="Rawat Inap">Instalasi Bedah Sentral</option>
                                            <option value="Kantin">Instalasi Unit Hemodialisa</option>
                                            <option value="Ruang Besalin">Instalasi Rawat Jalan</option>
                                            <option value="Ruang Besalin">Ruang Pendaftaran</option>
                                            <option value="Rawat Inap">Ruang Poli Umum</option>
                                            <option value="Kantin">Ruang Poli Gigi</option>
                                            <option value="Ruang Besalin">Ruang Poli Lansia</option>
                                            <option value="Rawat Inap">Ruang Pelayanan Ibu</option>
                                            <option value="Kantin">Ruang Pelayanan Anak</option>
                                            <option value="Ruang Besalin">Ruang Konseling Gizi</option>
                                            <option value="Ruang Besalin">Ruang Konsultasi Dokter</option>
                                            <option value="Rawat Inap">Ruang Tindakan</option>
                                            <option value="Kantin">Ruang Farmasi</option>
                                            <option value="Ruang Besalin">Kamar mandi / WC</option>
                                            <option value="Rawat Inap">Ruang tunggu</option>
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
                                            placeholder="Latitude" value="{{ old('latitude') }}">
                                        @error('latitude')
                                            <small id="emailHelp" class="form-text text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="first_name">Longitude</label>
                                        <input class="form-control" id="long" type="text" name="longitude"
                                            placeholder="Longitude" value="{{ old('longitude') }}">
                                        @error('longitude')
                                            <small id="emailHelp" class="form-text text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="formFileMultiple" class="form-label">Upload Image</label><br>
                                        <img src="/images/question_mark.png" class="img-thumbnail" alt="..."
                                            width="100" id="output">
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
    <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap">
    </script>

    <script>
        "usestrict";

        const kelurahans = @js($kelurahans);
        // Input Kelurahan
        const kecematanSelect = document.querySelector('#kecamatan');
        const kelurahanSelect = document.querySelector('#kelurahan');

        // Input LatLong
        const inputLatitude = document.querySelector('#lat');
        const inputLongitude = document.querySelector('#long');

        let lat = 0;
        let lng = 0;

        // Thumbnail Gambar
        const inputImage = document.querySelector('#inputImage');

        function init() {
            inputLatitude.value = lat;
            inputLongitude.value = lng;

            kecematanSelect.addEventListener("change", (e) => {
                let kecamatan = e.target.value;

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

            // Image Event
            inputImage.addEventListener('change', (e) => {
                let image = document.querySelector('#output');
                image.src = URL.createObjectURL(event.target.files[0]);
            });
        };

        function initMap() {
            const mandailing = {
                lat: 0.78378,
                lng: 99.25495
            };

            const map = new google.maps.Map(document.getElementById("maps"), {
                zoom: 9,
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
    <script>
        $(document).ready(function() {
            $('#fasilitas').select2({
                placeholder: 'Pilih Fasilitas (Boleh Lebih dari 1)',
                allowClear: true
            });
        });
    </script>
@endpush
