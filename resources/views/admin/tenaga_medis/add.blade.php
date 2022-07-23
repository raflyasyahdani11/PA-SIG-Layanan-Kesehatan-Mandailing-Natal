@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12 mb-4">
            <form autocomplete="off" action="{{ route('admin.tenaga_medis.add.post') }}" method="POST">
                <input autocomplete="false" name="hidden" type="text" style="display:none;">
                @csrf
                <div class="row">
                    <div class="col-12 col-xl-5 mx-auto">
                        <div class="card card-body border-0 shadow mb-4">
                            <h2 class="h5 mb-4">Tambah Data Tenaga Medis</h2>
                            <div class="row">
                                <div class="col-md-12 mb-5">
                                    <div>
                                        <label for="first_name">Nama Tenaga Medis</label>
                                        <input class="form-control" id="first_name" type="text" placeholder="Nama"
                                            name="nama_tenaga_medis">
                                    </div>
                                    <div class="mt-3">
                                        <label for="first_name">Profesi</label>
                                        <input class="form-control" id="first_name" type="text" placeholder="Profesi"
                                            name="profesi_tenaga_medis">
                                    </div>
                                    <div class="mt-3">
                                        <label class="my-1 me-2" for="country">Tempat Bekerja</label>
                                        <select class="form-select" id="country" aria-label="Default select example"
                                            name="id_layanan_kesehatan">
                                            <option selected hidden>Pilih..</option>
                                            @foreach ($layananKesehatans as $lay)
                                                <option value="{{ $lay->id_layanan_kesehatan }}">
                                                    {{ $lay->jenis_layanan . ' ' . $lay->nama_layanan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
