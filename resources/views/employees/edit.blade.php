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
                                <li class="breadcrumb-item active" aria-current="page">Edit Pegawai - {{ $employee->id }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employees.update', ['employee' => $employee->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="updated_by" value="{{ auth()->user()->name }}">
                            <div class="mb-3">
                                <h4>Informasi Pribadi</h4>
                            </div>
                            <div class="d-flex flex-column flex-md-row mb-3 gap-3">
                                <div class="w-100">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik"
                                        value="{{ old('nik', $employee->nik) }}" placeholder="Masukkan NIK pegawai"
                                        required>
                                </div>
                                <div class="w-100">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="{{ old('nama', $employee->nama) }}" placeholder="Masukkan nama pegawai"
                                        required>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-md-row mb-3 gap-3">
                                <div class="w-100">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                        value="{{ old('tanggal_lahir', $employee->tanggal_lahir) }}" required>
                                </div>
                                <div class="w-100">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="" disabled
                                            {{ old('jenis_kelamin', $employee->jenis_kelamin) ? '' : 'selected' }}>Pilih
                                            jenis kelamin pegawai</option>
                                        <option value="Laki-laki"
                                            {{ old('jenis_kelamin', $employee->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>
                                            Laki-laki</option>
                                        <option value="Perempuan"
                                            {{ old('jenis_kelamin', $employee->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                                            Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-md-row mb-3 gap-3">
                                <div class="w-100">
                                    <label for="no_hp" class="form-label">Nomor Handphone</label>
                                    <input type="tel" class="form-control" id="no_hp" name="no_hp"
                                        value="{{ old('no_hp', $employee->no_hp) }}"
                                        placeholder="Masukkan Nomor Handphone pegawai" required>
                                </div>
                                <div class="w-100">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email', $employee->email) }}" placeholder="Masukkan email pegawai"
                                        required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input class="form-control" id="alamat" name="alamat"
                                    value="{{ old('alamat', $employee->alamat) }}" placeholder="Masukkan alamat pegawai"
                                    required>
                            </div>

                            <div class="mb-3 mt-5">
                                <h4>Informasi Kepegawaian</h4>
                            </div>
                            <div class="d-flex flex-column flex-md-row mb-3 gap-3">
                                <div class="w-100">
                                    <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                                    <select class="form-select" id="pendidikan" name="pendidikan" required>
                                        <option value="" disabled
                                            {{ old('pendidikan', $employee->pendidikan) ? '' : 'selected' }}>Pilih
                                            pendidikan terakhir pegawai</option>
                                        <option value="SMA/SMK Sederajat"
                                            {{ old('pendidikan', $employee->pendidikan) == 'SMA/SMK Sederajat' ? 'selected' : '' }}>
                                            SMA/SMK Sederajat</option>
                                        <option value="D3"
                                            {{ old('pendidikan', $employee->pendidikan) == 'D3' ? 'selected' : '' }}>D3
                                        </option>
                                        <option value="D4"
                                            {{ old('pendidikan', $employee->pendidikan) == 'D4' ? 'selected' : '' }}>D4
                                        </option>
                                        <option value="S1"
                                            {{ old('pendidikan', $employee->pendidikan) == 'S1' ? 'selected' : '' }}>S1
                                        </option>
                                        <option value="S2"
                                            {{ old('pendidikan', $employee->pendidikan) == 'S2' ? 'selected' : '' }}>S2
                                        </option>
                                        <option value="S3"
                                            {{ old('pendidikan', $employee->pendidikan) == 'S3' ? 'selected' : '' }}>S3
                                        </option>
                                    </select>
                                </div>
                                <div class="w-100">
                                    <label for="departemen" class="form-label">Departemen</label>
                                    <input type="text" class="form-control" id="departemen" name="departemen"
                                        value="{{ old('departemen', $employee->departemen) }}"
                                        placeholder="Masukkan asal departemen pegawai" required>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-md-row mb-3 gap-3">
                                <div class="w-100">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan" name="jabatan"
                                        value="{{ old('jabatan', $employee->jabatan) }}"
                                        placeholder="Masukkan jabatan pegawai" required>
                                </div>
                                <div class="w-100">
                                    <label for="status" class="form-label">Status Kepegawaian</label>
                                    <select class="form-select" id="status" name="status" required>
                                        <option value="" disabled
                                            {{ old('status', $employee->status) ? '' : 'selected' }}>Pilih status
                                            kepegawaian pegawai</option>
                                        <option value="Tetap"
                                            {{ old('status', $employee->status) == 'Tetap' ? 'selected' : '' }}>Tetap
                                        </option>
                                        <option value="Kontrak"
                                            {{ old('status', $employee->status) == 'Kontrak' ? 'selected' : '' }}>Kontrak
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-md-row mb-3 gap-3">
                                <div class="w-100">
                                    <label for="gaji" class="form-label">Gaji</label>
                                    <input type="number" class="form-control" id="gaji" name="gaji"
                                        value="{{ old('gaji', $employee->gaji) }}" required>
                                </div>
                                <div class="w-100">
                                    <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                                    <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk"
                                        value="{{ old('tanggal_masuk', $employee->tanggal_masuk) }}" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" class="form-control" id="foto" accept=".jpg, .jpeg, .png"
                                    name="foto">
                            </div>

                            <div class="mt-5">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('employees.index') }}" class="btn btn-outline-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
