@extends('diseño.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
        <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
                <h6 class="mb-0">Propiedades</h6>
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">
                <a href="{{ route('propiedad.create') }}" class="btn btn-square btn-primary m-2">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection