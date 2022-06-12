@extends('diseño.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Ocupadas</p>
                    <h6 class="mb-0">234</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Disponibles</p>
                    <h6 class="mb-0">123</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Citas</p>
                    <h6 class="mb-0">37</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-area fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Usuarios Totales</p>
                    <h6 class="mb-0">464</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Usuarios</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <!--th scope="col"><input class="form-check-input" type="checkbox"></th-->
                        <th scope="col">Nombre(s)</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellodo Materno</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <!--td><input class="form-check-input" type="checkbox"></td-->
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->apePat }}</td>
                        <td>{{ $user->apeMat }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    {{ $role->title }}
                                </span>
                            @endforeach
                        <td><a class="btn btn-sm btn-primary" href="#">Detail</a></td>
                    </tr>
                    @endforeach                                
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
