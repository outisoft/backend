@extends('welcome.app')

@section('content')
<section id="property-section">
    <div class="container">
        <h6 class="h6 color-primary m-0">Recent</h6>
        <h1 class="h1 h1-responsive mb-4">Recently Added Properties!</h1>
    <div class="text-right">
        <a href="#">Find more proyets <i class="fas fa-long-arrow-alt-right ml-4"></i></a>
    </div>
        <!--Property List Slider Her-->
        <div id="property-slider">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                @foreach($propiedades as $propiedad)
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="property-list shadow">
                            <div class="image">
                                <img src="{{ asset($propiedad->img1)}}" alt="{{ $propiedad->title }}">
                            </div>
                            <div class="text-right">
                                <h4 class="h5">${{ $propiedad->price }}</h4>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                                <div class="item">
                                    <h4 class="h5 m-0">{{ $propiedad->name }}</h4>
                                    @foreach ($propiedad->address as $address)
                                        <p class="m-0">{{ $address->state }}, {{ $address->city }}</p>
                                    @endforeach
                                </div>
                                <div class="item d-flex aling-self-center">
                                    <i class="fas fa-bed mx-2 aling-self-center"></i>
                                    <span class="mr-3">{{ $propiedad->beds }}</span>
                                    <i class="fas fa-bath mx-2 aling-self-center"></i>
                                    <span>{{ $propiedad->baths }}</span>
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-eye mx-2 aling-self-center"></i>
                                <a href="{{ route('propiedad.show', $propiedad->id) }}">See more... <i class="fas fa-long-arrow-alt-right ml-4"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    <!--/Property List Slider Her-->
    </div>
</section>
@endsection
