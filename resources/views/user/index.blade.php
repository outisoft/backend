@extends('diseño.app')

@section('content')
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
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form class="btn btn-sm btn-danger" action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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
@endsection
