@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-title fw-semibold">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb p-3">
                                <li class="breadcrumb-item active" aria-current="page">Daftar Pegawai</li>
                            </ol>
                        </nav>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert"
                            style="margin-top: 20px; margin-left: 20px; margin-right: 20px">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert"
                            style="margin-top: 20px; margin-left: 20px; margin-right: 20px">
                            <strong>{{ session('error') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between position-relative mb-3">
                            <a href="{{ route('employees.create') }}" class="btn btn-primary">
                                <i class="ti ti-user-plus"></i>
                                <span class="ms-2">
                                    Tambah Pegawai
                                </span>
                            </a>
                        </div>

                        {{-- Table --}}
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">No.</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Nama</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Tanggal Lahir</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Jenis Kelamin</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Departemen</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Jabatan</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Aksi</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($employees as $e)
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">{{ $e->nama }}</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal">{{ $e->tanggal_lahir }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal">{{ $e->jenis_kelamin }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal">{{ $e->departemen }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="mb-0 fw-normal">{{ $e->jabatan }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <a href="{{ route('employees.show', ['employee' => $e->id]) }}"
                                                    class="btn btn-dark">
                                                    <i class="ti ti-info-circle"></i>
                                                </a>
                                                <a href="{{ route('employees.edit', ['employee' => $e->id]) }}"
                                                    class="btn btn-warning">
                                                    <i class="ti ti-edit"></i>
                                                </a>
                                                <form action="{{ route('employees.destroy', ['employee' => $e->id]) }}"
                                                    method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">
                                                        <i class="ti ti-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="border-bottom-0 text-center" colspan="7">
                                                <h6 class="fw-semibold mb-0">Tidak ada data</h6>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{-- End Table --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
