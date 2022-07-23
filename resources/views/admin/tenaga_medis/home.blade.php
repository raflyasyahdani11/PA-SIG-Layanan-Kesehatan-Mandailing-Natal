@extends('layouts.admin')

@section('button')
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{ route('admin.tenaga_medis.add') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Tambah Data
        </a>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 mb-4">
            @if (session('status'))
                <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
                    <span class="fas fa-bullhorn me-1"></span>
                    {{ Str::of(session('message'))->toHtmlString() }}
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card card-body border-0 shadow table-wrapper table-responsive mt-3">
                <table class="table table-hover" id="table_tenaga_medis">
                    <thead>
                        <tr>
                            <th class="border-gray-200">No</th>
                            <th class="border-gray-200">Nama</th>
                            <th class="border-gray-200">Profesi</th>
                            <th class="border-gray-200">Tempat Bekerja</th>
                            <th class="border-gray-200">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Item -->
                        @foreach ($tenagaMedis as $tenaga)
                            <tr>
                                <td>
                                    <a href="#" class="fw-bold">
                                        {{ $loop->iteration }}
                                    </a>
                                </td>
                                <td>
                                    <span class="fw-normal">{{ $tenaga->nama_tenaga_medis }}</span>
                                </td>
                                <td><span class="fw-normal">{{ $tenaga->profesi_tenaga_medis }}</span></td>
                                <td>
                                    <a
                                        href="{{ route('admin.layanan_kesehatan.detail', $tenaga->layanan_kesehatan->id_layanan_kesehatan) }}">
                                        <span class="fw-normal">
                                            {{ $tenaga->layanan_kesehatan->jenis_layanan . ' ' . $tenaga->layanan_kesehatan->nama_layanan }}
                                        </span>
                                    </a>
                                </td>
                                <td>

                                    <a href="{{ route('admin.tenaga_medis.add.edit', $tenaga->id_tenaga_medis) }}"
                                        class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('admin.tenaga_medis.add.delete', $tenaga->id_tenaga_medis) }}" 
                                        class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="/assets/admin/assets/js/jquery.min.js"></script>
    <script src="/assets/admin/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/admin/assets/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_tenaga_medis').DataTable({
                lengthChange: false,
                pageLength: 15
            });
        });
    </script>
@endpush
