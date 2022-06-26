<section id="feature-section">
    <div class="container">
    <h6 class="h6 color-primary m-0">Recent</h6>
    <h1 class="h1 h1-responsive mb-4">All Our Properties</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam voluptates <br>vero cumque sint? Qui ea magni expedita, vel maiores consectetur veniam eveniet esse.</p>
    
    <br>
    <div class="col-md-11 mx-auto text-left">
        <div class="row">
        @foreach($propiedades as $propiedad)
            <div class="col-lg-4 col-md-6 mx-auto my-3">
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
                </div>
            </div>
        @endforeach
        </div>
        <div class="my-5 text-center">
            <button class="btn btn-theme">Load More</button>
        </div>
    </div>
    </div>
</section>