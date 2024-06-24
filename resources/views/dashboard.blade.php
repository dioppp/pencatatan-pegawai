@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-title fw-semibold">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb p-3">
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-body">
                        <div class="row mb-5">
                            <div class="col-4">
                                <h5 class="fw-semibold mb-3 text-center"><b>Jenis Kelamin</b></h5>
                                <canvas id="genderChart"></canvas>
                            </div>
                            <div class="col-4">
                                <h5 class="fw-semibold mb-3 text-center"><b>Alamat</b></h5>
                                <canvas id="addressChart"></canvas>
                            </div>
                            <div class="col-4">
                                <h5 class="fw-semibold mb-3 text-center"><b>Departemen</b></h5>
                                <canvas id="departmentChart"></canvas>
                            </div>

                        </div>
                        <div class="row mt-5">
                            <div class="col-4">
                                <h5 class="fw-semibold mb-3 text-center"><b>Jabatan</b></h5>
                                <canvas id="positionChart"></canvas>
                            </div>
                            <div class="col-4">
                                <h5 class="fw-semibold mb-3 text-center"><b>Status Kepegawaian</b></h5>
                                <canvas id="statusChart"></canvas>
                            </div>
                            <div class="col-4">
                                <h5 class="fw-semibold mb-3 text-center"><b>Pendidikan Terakhir</b></h5>
                                <canvas id="educationChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Gender Chart --}}
    <script>
        var employeeGenderLabels = @json($employeeGender->pluck('jenis_kelamin'));
        var employeeGenderData = @json($employeeGender->pluck('total'));

        const ctxGender = document.getElementById('genderChart');

        new Chart(ctxGender, {
            type: 'pie',
            data: {
                labels: employeeGenderLabels,
                datasets: [{
                    label: 'Banyak data',
                    data: employeeGenderData,
                    backgroundColor: [
                        'rgba(111, 78, 55, 1)',
                        'rgba(166, 123, 91, 1)',
                    ],
                    borderColor: [
                        'rgba(111, 78, 55, 1)',
                        'rgba(166, 123, 91, 1)',
                    ],
                    borderWidth: 1
                }]
            }
        });
    </script>

    {{-- Address Chart --}}
    <script>
        var employeeAddressLabels = @json($employeeAddress->pluck('alamat'));
        var employeeAddressData = @json($employeeAddress->pluck('total'));

        const ctxAddress = document.getElementById('addressChart');

        new Chart(ctxAddress, {
            type: 'pie',
            data: {
                labels: employeeAddressLabels,
                datasets: [{
                    label: 'Banyak data',
                    data: employeeAddressData,
                    backgroundColor: [
                        'rgba(111, 78, 55, 1)',
                        'rgba(166, 123, 91, 1)',
                        'rgba(236, 177, 118, 1)',
                        'rgba(254, 216, 177, 1)',
                        'rgba(154, 131, 74, 1)',
                        'rgba(203, 174, 98 , 1)'
                    ],
                    borderColor: [
                        'rgba(111, 78, 55, 1)',
                        'rgba(166, 123, 91, 1)',
                        'rgba(236, 177, 118, 1)',
                        'rgba(254, 216, 177, 1)',
                        'rgba(154, 131, 74, 1)',
                        'rgba(203, 174, 98 , 1)'
                    ],
                    borderWidth: 1
                }]
            }
        });
    </script>

    {{-- Department Chart --}}
    <script>
        var employeeDepartmentLabels = @json($employeeDepartment->pluck('departemen'));
        var employeeDepartmentData = @json($employeeDepartment->pluck('total'));

        const ctxDepartment = document.getElementById('departmentChart');

        new Chart(ctxDepartment, {
            type: 'pie',
            data: {
                labels: employeeDepartmentLabels,
                datasets: [{
                    label: 'Banyak data',
                    data: employeeDepartmentData,
                    backgroundColor: [
                        'rgba(111, 78, 55, 1)',
                        'rgba(166, 123, 91, 1)',
                        'rgba(236, 177, 118, 1)',
                        'rgba(254, 216, 177, 1)',
                        'rgba(154, 131, 74, 1)',
                        'rgba(203, 174, 98 , 1)'
                    ],
                    borderColor: [
                        'rgba(111, 78, 55, 1)',
                        'rgba(166, 123, 91, 1)',
                        'rgba(236, 177, 118, 1)',
                        'rgba(254, 216, 177, 1)',
                        'rgba(154, 131, 74, 1)',
                        'rgba(203, 174, 98 , 1)'
                    ],
                    borderWidth: 1
                }]
            }
        });
    </script>

    {{-- Position Chart --}}
    <script>
        var employeePositionLabels = @json($employeePosition->pluck('jabatan'));
        var employeePositionData = @json($employeePosition->pluck('total'));

        const ctxPosition = document.getElementById('positionChart');

        new Chart(ctxPosition, {
            type: 'pie',
            data: {
                labels: employeePositionLabels,
                datasets: [{
                    label: 'Banyak data',
                    data: employeePositionData,
                    backgroundColor: [
                        'rgba(111, 78, 55, 1)',
                        'rgba(166, 123, 91, 1)',
                        'rgba(236, 177, 118, 1)',
                        'rgba(254, 216, 177, 1)',
                        'rgba(154, 131, 74, 1)',
                        'rgba(203, 174, 98 , 1)'
                    ],
                    borderColor: [
                        'rgba(111, 78, 55, 1)',
                        'rgba(166, 123, 91, 1)',
                        'rgba(236, 177, 118, 1)',
                        'rgba(254, 216, 177, 1)',
                        'rgba(154, 131, 74, 1)',
                        'rgba(203, 174, 98 , 1)'
                    ],
                    borderWidth: 1
                }]
            }
        });
    </script>

    {{-- Status Chart --}}
    <script>
        var employeeStatusLabels = @json($employeeStatus->pluck('status'));
        var employeeStatusData = @json($employeeStatus->pluck('total'));

        const ctxStatus = document.getElementById('statusChart');

        new Chart(ctxStatus, {
            type: 'pie',
            data: {
                labels: employeeStatusLabels,
                datasets: [{
                    label: 'Banyak data',
                    data: employeeStatusData,
                    backgroundColor: [
                        'rgba(111, 78, 55, 1)',
                        'rgba(166, 123, 91, 1)',
                    ],
                    borderColor: [
                        'rgba(111, 78, 55, 1)',
                        'rgba(166, 123, 91, 1)',
                    ],
                    borderWidth: 1
                }]
            }
        });
    </script>

    {{-- Education Chart --}}
    <script>
        var employeeEducationLabels = @json($employeeEducation->pluck('pendidikan'));
        var employeeEducationData = @json($employeeEducation->pluck('total'));

        const ctxEducation = document.getElementById('educationChart');

        new Chart(ctxEducation, {
            type: 'pie',
            data: {
                labels: employeeEducationLabels,
                datasets: [{
                    label: 'Banyak data',
                    data: employeeEducationData,
                    backgroundColor: [
                        'rgba(111, 78, 55, 1)',
                        'rgba(166, 123, 91, 1)',
                        'rgba(236, 177, 118, 1)',
                        'rgba(254, 216, 177, 1)',
                        'rgba(154, 131, 74, 1)',
                        'rgba(203, 174, 98 , 1)'
                    ],
                    borderColor: [
                        'rgba(111, 78, 55, 1)',
                        'rgba(166, 123, 91, 1)',
                        'rgba(236, 177, 118, 1)',
                        'rgba(254, 216, 177, 1)',
                        'rgba(154, 131, 74, 1)',
                        'rgba(203, 174, 98 , 1)'
                    ],
                    borderWidth: 1
                }]
            }
        });
    </script>
@endpush
