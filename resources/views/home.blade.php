@extends('layouts.base')
@section('content')
<main class="ps-main">
  <div class="ps-products-wrap">
    <div class="ps-products" data-mh="product-listing">
      <div class="ps-product-action">
       
      
      </div>
      
      <h4 style="margin-bottom: 20px">POPULAR MOVIES</h4>
      <div class="ps-product__columns">
          @foreach ($popular_movies as $movie )
              <x-movie-card :movie='$movie' :genres="$genres"/>
              
          @endforeach
        

      
      </div>

    </div>
   
  </div>

  <div class="ps-products-wrap">
    <div class="ps-products" data-mh="product-listing">
      <div class="ps-product-action">
       
      
      </div>
      <h4 style="margin-bottom: 20px">NOW PLAYING</h4>
      <div class="ps-product__columns">
          @foreach ($now_playing as $movie )
           <x-movie-card :movie='$movie' :genres="$genres"/>
              
          @endforeach
        

      
      </div>

    </div>
   
  </div>

</main> 
@endsection