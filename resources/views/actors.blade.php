@extends('layouts.base')
@section('content')
<main class="ps-main">
    <div class="container">
        
        <div class="ps-products" data-mh="product-listing">
        
            
            <h2 style="margin-bottom: 20px"><b>POPULAR ACTORS</b></h2>
            <div class="ps-product__columns">
            <div class="row">
                @foreach ($popularActors as $popular_actor )
                        <div class="col-lg-3 col-md-6">
                        <div class="">
                            <a href="">
                                <div class="ps-shoe mb-20">
                                    <div class="ps-shoe">
                                        <div class="ps-shoe__thumbnail">
                                            @if ($popular_actor['profile_path'])
                                                <img src="{{ $popular_actor['profile_path'] }}" alt="">
                                                
                                            @else
                                                <img src="{{ 'https://ui-avatars.com/api/?size=500&name=' . $popular_actor['name'] }}" alt="">
                                            @endif
                                            
                                       
                                        
                                        
                                        </div>
                                        <div class="ps-shoe__content">
                                        
                                            <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">{{ $popular_actor['name'] }}</a>
                                            <p class="ps-shoe__categories">
                                                {{ $popular_actor['known_for']}}
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> 

                        </div>
                        
                    
                    
                @endforeach

            </div>
            <div class="row">
                <a href="btn btn-primary">Previous</a>
                <a style="float: right" href="btn btn-primary">Next</a>
            </div>    
            
    
            
            </div>
    
        </div>
           
    
        

    </div>


</main> 
@endsection