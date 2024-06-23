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
                                <li class="breadcrumb-item active" aria-current="page">Tambah Pegawai</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="created_by" value="{{ auth()->user()->name }}">
                            <input type="hidden" name="updated_by" value="-">
                            <div class="mb-3">
                                <h4>Informasi Pribadi</h4>
                            </div>
                            <div class="d-flex flex-column flex-md-row mb-3 gap-3">
                                <div class="w-100">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                        id="nik" name="nik" value="{{ old('nik') }}"
                                        placeholder="Masukkan NIK pegawai" required>
                                    @error('nik')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="w-100">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="nama" name="nama" value="{{ old('nama') }}"
                                        placeholder="Masukkan nama pegawai" required>
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-md-row mb-3 gap-3">
                                <div class="w-100">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                        id="tanggal_lahir" name="tanggal_lahir" value="{{ old('name') }}" required>
                                    @error('tanggal_lahir')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="w-100">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select @error('jenis_kelamin') is-invalid @enderror"
                                        id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="" disabled {{ old('jenis_kelamin') ? '' : 'selected' }}>Pilih
                                            jenis kelamin pegawai</option>
                                        <option value="Laki-laki"
                                            {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan"
                                            {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-md-row mb-3 gap-3">
                                <div class="w-100">
                                    <label for="no_hp" class="form-label">Nomor Handphone</label>
                                    <input type="tel" class="form-control @error('no_hp') is-invalid @enderror"
                                        id="no_hp" name="no_hp" value="{{ old('no_hp') }}"
                                        placeholder="Masukkan Nomor Handphone pegawai" required>
                                    @error('no_hp')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="w-100">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}"
                                        placeholder="Masukkan email pegawai" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                    name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan alamat pegawai"
                                    required></input>
                                @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 mt-5">
                                <h4>Informasi Kepegawaian</h4>
                            </div>
                            <div class="d-flex flex-column flex-md-row mb-3 gap-3">
                                <div class="w-100">
                                    <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                                    <select class="form-select @error('pendidikan') is-invalid @enderror" id="pendidikan"
                                        name="pendidikan" required>
                                        <option value="" selected disabled>Pilih pendidikan terakhir pegawai</option>
                                        <option value="SMA/SMK Sederajat"
                                            {{ old('pendidikan') == 'SMA/SMK Sederajat' ? 'selected' : '' }}>SMA/SMK
                                            Sederajat</option>
                                        <option value="D3" {{ old('pendidikan') == 'D3' ? 'selected' : '' }}>D3
                                        </option>
                                        <option value="D4" {{ old('pendidikan') == 'D4' ? 'selected' : '' }}>D4
                                        </option>
                                        <option value="S1" {{ old('pendidikan') == 'S1' ? 'selected' : '' }}>S1
                                        </option>
                                        <option value="S2" {{ old('pendidikan') == 'S2' ? 'selected' : '' }}>S2
                                        </option>
                                        <option value="S3" {{ old('pendidikan') == 'S3' ? 'selected' : '' }}>S3
                                        </option>
                                    </select>
                                    @error('pendidikan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="w-100">
                                    <label for="departemen" class="form-label">Departemen</label>
                                    <input type="text" class="form-control @error('departemen') is-invalid @enderror"
                                        id="departemen" name="departemen" value="{{ old('departemen') }}"
                                        placeholder="Masukkan asal departemen pegawai" required>
                                    @error('departemen')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-md-row mb-3 gap-3">
                                <div class="w-100">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                                        id="jabatan" name="jabatan" value="{{ old('jabatan') }}"
                                        placeholder="Masukkan jabatan pegawai" required>
                                    @error('jabatan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="w-100">
                                    <label for="status" class="form-label">Status Kepegawaian</label>
                                    <select class="form-select @error('status') is-invalid @enderror" id="status"
                                        name="status" required>
                                        <option value="" selected disabled>Pilih status kepegawaian pegawai</option>
                                        <option value="Tetap" {{ old('status') == 'Tetap' ? 'selected' : '' }}>Tetap
                                        </option>
                                        <option value="Kontrak" {{ old('status') == 'Kontrak' ? 'selected' : '' }}>Kontrak
                                        </option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-md-row mb-3 gap-3">
                                <div class="w-100">
                                    <label for="gaji" class="form-label">Gaji</label>
                                    <input type="number" class="form-control @error('gaji') is-invalid @enderror"
                                        id="gaji" name="gaji" value="{{ old('gaji') }}" required>
                                    @error('gaji')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="w-100">
                                    <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                                    <input type="date"
                                        class="form-control @error('tanggal_masuk') is-invalid @enderror"
                                        id="tanggal_masuk" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}"
                                        required>
                                    @error('tanggal_masuk')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                    id="foto" accept=".jpg, .jpeg, .png" name="foto" required>
                                @error('foto')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
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
