@extends('diseño.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
        <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
                <h6 class="mb-0">Address</h6>
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">
                <a href="{{ route('address.create') }}" class="btn btn-square btn-primary m-2">
                    <i class="fa fa-plus"></i>
                </a>
            </div>

            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <!--th scope="col"><input class="form-check-input" type="checkbox"></th-->
                            <th scope="col">Calle</th>
                            <th scope="col">Numero</th>
                            <th scope="col">Barrio</th>
                            <th scope="col">Codigo postal</th>
                            <th scope="col">referencias</th>
                            <th scope="col">Pais</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($address as $address)
                        <tr>
                            <!--td><input class="form-check-input" type="checkbox"></td-->
                            <td>{{ $address->streetName }}</td>
                            <td>{{ $address->streetNumber }}</td>
                            <td>{{ $address->neighborhood }}</td>
                            <td>{{ $address->zipCode }}</td>
                            <td>{{ $address->reference }}</td>
                            <td>{{ $address->country }}</td>
                            <td>{{ $address->state }}</td>
                            <td>{{ $address->city }}</td>
                            <td>
                                <a href="{{ route('address.show', $address->id) }}" class="btn btn-sm btn-primary">View</a>
                                <a href="{{ route('address.edit', $address->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form class="btn btn-sm btn-danger" action="{{ route('address.destroy', $address->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="right" title="Delete"><span class="icon-trash mr-0"></span></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach                                
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection