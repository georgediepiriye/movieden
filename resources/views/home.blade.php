@extends('layouts.base')
@section('content')
<main class="ps-main">
  <div class="container">
   
      <div class="ps-products" data-mh="product-listing">
        <div class="ps-product-action">
         
        
        </div>
        
        <h2 style="margin-bottom: 20px"><b>POPULAR MOVIES</b></h2>
        <div class="">
            <div class="row">
              @foreach ($popular_movies as $movie )
                <div class="col-lg-3 col-md-6">
                  <x-movie-card :movie='$movie' :genres="$genres"/>

                </div>
             
              
              @endforeach
              
            </div>
           
          
  
        
        </div>
  
      </div>
     
 
  
      <div class="ps-products" data-mh="product-listing">
        <div class="ps-product-action">
         
        
        </div>
        <h2 style="margin-bottom: 20px"><b>NOW PLAYING</b></h2>
        <div class="ps-product__columns">
          <div class="row">
            @foreach ($now_playing as $movie )
              <div class="col-lg-3 col-md-6">
                <x-movie-card :movie='$movie' :genres="$genres"/>

              </div>
           
            
            @endforeach
            
          </div>
          
  
        
        </div>
  
      </div>
     
   
    

  </div>


</main> 
@endsection