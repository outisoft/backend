@extends('diseño.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
        <div class="row">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <form method="POST" action="{{ route('address.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <h6 class="mb-4">Add Address</h6>
                        <div class="form-floating mb-3">
                            <input name="streetName" type="text" class="form-control" id="streetName"
                                placeholder="Calle san juan">
                            <label for="floatingInput">Nombre de la calle</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="streetNumber" type="text" class="form-control" id="streetNumber"
                                placeholder="Calle #45">
                            <label for="floatingInput">Numero de calle</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="neighborhood" type="text" class="form-control" id="neighborhood"
                                placeholder="Calle #45">
                            <label for="floatingInput">Barrio</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="zipCode" type="text" class="form-control" id="zipCode"
                                placeholder="Calle #45">
                            <label for="floatingInput">Codigo postal</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="reference" type="text" class="form-control" id="reference"
                                placeholder="Calle #45">
                            <label for="floatingInput">Referencia</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="country" type="text" class="form-control" id="country"
                                placeholder="Calle #45">
                            <label for="floatingInput">Pais</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="state" type="text" class="form-control" id="state"
                                placeholder="Calle #45">
                            <label for="floatingInput">Estado</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="city" type="text" class="form-control" id="city"
                                placeholder="Calle #45">
                            <label for="floatingInput">Ciudad</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection