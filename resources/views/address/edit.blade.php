@extends('diseño.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
        <div class="row">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <form method="POST" action="{{ route('address.update', $address->id) }}">
                    {{ csrf_field() }}
                    @method('put')
                        <h6 class="mb-4">Add Address</h6>
                        <div class="form-floating mb-3">
                            <input name="streetName" type="text" class="form-control" id="streetName"
                            value="{{ old('name', $address->streetName) }}">
                            <label for="floatingInput">Nombre de la calle</label>
                            @error('streetName')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input name="streetNumber" type="text" class="form-control" id="streetNumber"
                            value="{{ old('name', $address->streetNumber) }}">
                            <label for="floatingInput">Numero de calle</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="neighborhood" type="text" class="form-control" id="neighborhood"
                            value="{{ old('name', $address->neighborhood) }}">
                            <label for="floatingInput">Barrio</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="zipCode" type="text" class="form-control" id="zipCode"
                            value="{{ old('name', $address->zipCode) }}">
                            <label for="floatingInput">Codigo postal</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="reference" type="text" class="form-control" id="reference"
                            value="{{ old('name', $address->reference) }}">
                            <label for="floatingInput">Referencia</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="country" type="text" class="form-control" id="country"
                            value="{{ old('name', $address->country) }}">
                            <label for="floatingInput">Pais</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="state" type="text" class="form-control" id="state"
                            value="{{ old('name', $address->state) }}">
                            <label for="floatingInput">Estado</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="city" type="text" class="form-control" id="city"
                            value="{{ old('name', $address->city) }}">
                            <label for="floatingInput">Ciudad</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection