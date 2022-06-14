@extends('diseño.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
        <div class="row">
            <form method="post" action="{{ route('propiedad.update', $propiedad->id) }}">
            @csrf
            @method('put')
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    <h6 class="mb-0">Editar Propiedad</h6>
                    <br>
                    <div class="col-md-5 ml-auto my-auto my-5">
                        <div class="image">
                            <img src="{{ asset($propiedad->img1)}}" alt="{{ $propiedad->title }}" class="img-fluid image-thumbnail">
                        </div>
                    </div>
                </div>
                

                <div class="col-sm-12 col-xl-6">
                    <div class="bg-light rounded h-100 p-4">
                        <br>
                        <div class="form-floating mb-3">
                            <input name="name" type="text" class="form-control" id="name"
                                value="{{ old('name', $propiedad->name) }}">
                            <label for="floatingInput">Name of property</label>
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input name="description" type="text" class="form-control" id="description"
                            value="{{ old('description', $propiedad->description) }}">
                            <label for="floatingPassword">Description</label>
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input name="price" type="text" class="form-control" id="price"
                                value="{{ old('price', $propiedad->price) }}">
                            <label for="floatingPassword">Price</label>
                            @error('price')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select name="address_id[]" class="form-select" id="address_id"
                                aria-label="Floating label select example" value="{{ old('address_id', $propiedad->address_id) }}">

                                @foreach($address as $id => $direccion)
                                    <option value="{{ $id }}"{{ in_array($id, old('address', [])) ? ' selected' : '' }}>{{ $direccion }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Address</label>
                        </div>                        
                        <div class="form-floating mb-3">
                            <select name="rooms" class="form-select" id="rooms"
                                 value="{{ old('rooms', $propiedad->rooms) }}">
                                <option selected>{{ old('rooms', $propiedad->rooms) }}</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                            <label for="floatingSelect">Rooms</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="beds" class="form-select" id="beds"
                                aria-label="Floating label select example">
                                <option selected>{{ old('beds', $propiedad->beds) }}</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                            <label for="floatingSelect">Beds</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="baths" class="form-select" id="baths"
                                aria-label="Floating label select example">
                                <option selected>{{ old('baths', $propiedad->baths) }}</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                            <label for="floatingSelect">Baths</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="tipo[]" class="form-select" id="tipo"
                                aria-label="Floating label select example" value="{{ old('tipo', $propiedad->tipo) }}">
                                @foreach($tipos as $id => $tipo)
                                    <option value="{{ $id }}"{{ in_array($id, old('tipos', [])) ? ' selected' : '' }}>{{ $tipo }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Tipo</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection