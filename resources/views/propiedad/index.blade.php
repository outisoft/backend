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

            <section id="feature-section">
                <div class="container">
                <br>
                    <div class="col-md-11 mx-auto text-left">
                        <div class="row">
                            @foreach($propiedades as $propiedad)
                            <div class="col-lg-4 col-md-6 mx-auto my-3">
                                <div class="property-list shadow">
                                    <div class="image">
                                        <img src="{{ asset($propiedad->img1)}}" alt="{{ $propiedad->title }}" class="img-fluid image-thumbnail">
                                    </div>
                                    <div class="text-right">
                                        <h4 class="h5">${{ $propiedad->price }}</h4>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4">
                                        <div class="item">
                                        <h4 class="h5 m-0">{{ $propiedad->name }}</h4>
                                        <p class="m-0">{{ $propiedad->address_id }}</p>
                                        </div>
                                        <div class="item d-flex aling-self-center">
                                            <i class="fas fa-bed mx-2 aling-self-center"></i>
                                            <span class="mr-3">{{ $propiedad->beds }}</span>
                                            <i class="fas fa-bath mx-2 aling-self-center"></i>
                                            <span>{{ $propiedad->baths }}</span>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection