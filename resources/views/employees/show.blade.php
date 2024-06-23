@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-title fw-semibold">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb p-3">
                                <li class="breadcrumb-item"><a href="{{ route('employees.index') }}">Daftar Pegawai</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail Pegawai - {{ $employee->id }}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('storage/' . $employee->foto) }}" class="card-img-top"
                                        alt="..." />
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $employee->nama }}</h5>
                                        <p class="card-text">
                                            {{ $employee->jabatan }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3"><b>Informasi Pribadi</b></h5>
                                        <div class="d-flex flex-column flex-md-row mb-4 gap-3">
                                            <div class="w-100">
                                                <label class="form-label">NIK</label>
                                                <p class="card-text">{{ $employee->nik }}</p>
                                            </div>
                                            <div class="w-100">
                                                <label class="form-label">Nama</label>
                                                <p class="card-text">{{ $employee->nama }}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-md-row mb-4 gap-3">
                                            <div class="w-100">
                                                <label class="form-label">Tanggal Lahir</label>
                                                <p class="card-text">{{ \Carbon\Carbon::parse($employee->tanggal_lahir)->format('d-m-Y') }}</p>
                                            </div>
                                            <div class="w-100">
                                                <label class="form-label">Jenis Kelamin</label>
                                                <p class="card-text">{{ $employee->jenis_kelamin }}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-md-row mb-4 gap-3">
                                            <div class="w-100">
                                                <label class="form-label">Nomor Handphone</label>
                                                <p class="card-text">{{ $employee->no_hp }}</p>
                                            </div>
                                            <div class="w-100">
                                                <label class="form-label">Email</label>
                                                <p class="card-text">{{ $employee->email }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Alamat</label>
                                            <p class="card-text">{{ $employee->alamat }}</p>
                                        </div>

                                        <h5 class="card-title mb-3 mt-5"><b>Informasi Kepegawaian</b></h5>
                                        <div class="d-flex flex-column flex-md-row mb-4 gap-3">
                                            <div class="w-100">
                                                <label class="form-label">Pendidikan Terakhir</label>
                                                <p class="card-text">{{ $employee->pendidikan }}</p>
                                            </div>
                                            <div class="w-100">
                                                <label class="form-label">Departemen</label>
                                                <p class="card-text">{{ $employee->departemen }}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-md-row mb-4 gap-3">
                                            <div class="w-100">
                                                <label class="form-label">Jabatan</label>
                                                <p class="card-text">{{ $employee->jabatan }}</p>
                                            </div>
                                            <div class="w-100">
                                                <label class="form-label">Status Kepegawaian</label>
                                                <p class="card-text">{{ $employee->status }}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-md-row mb-4 gap-3">
                                            <div class="w-100">
                                                <label class="form-label">Gaji</label>
                                                <p class="card-text">{{ Number::currency($employee->gaji, in: 'IDR') }}</p>
                                            </div>
                                            <div class="w-100">
                                                <label class="form-label">Tanggal Masuk</label>
                                                <p class="card-text">{{ \Carbon\Carbon::parse($employee->tanggal_masuk)->format('d-m-Y') }}</p>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <a href="{{ route('employees.index') }}" class="btn btn-outline-primary">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
