@extends('layouts.base')
@section('content')
<main class="ps-main" style="z-index: -1 !important">
    <div class="test">
      <div class="container">
        <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
              </div>
        </div>
      </div>
    </div>
    <div class="ps-product--detail pt-60">
      <div class="ps-container">
        <div class="row">
          <div class="col-lg-10 col-md-12 col-lg-offset-1">
            <div class="ps-product__thumbnail">
              
                <div class="ps-product__image">
                  <div class="item"><img class="zoom" src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}"  alt="" data-zoom-image="images/shoe-detail/1.jpg"></div>
                </div>
              </div>
            <div class="ps-product__thumbnail--mobile">
              <div class="ps-product__main-img"><img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" alt=""></div>
              <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on"><img src="images/shoe-detail/1.jpg" alt=""><img src="images/shoe-detail/2.jpg" alt=""><img src="images/shoe-detail/3.jpg" alt=""></div>
            </div>
            <div class="ps-product__info">
              <h1>{{ $movie['title'] }}</h1>
              <i style="color: gold" class="fa fa-star"></i>  <span>{{ $movie['vote_average'] * 10 . '%' }} | {{ Carbon\Carbon::parse($movie['release_date'])->format('M d, y') }} | 
                 @foreach ($movie['genres'] as $genre)
                {{ $genre['name'] }}@if (!$loop->last),
                
                @endif
                
               @endforeach</span>
             
          
              <div class="ps-product__block ps-product__quickview">
                <h4>OVERVIEW</h4>
                <p>{{ $movie['overview'] }}</p>
                <h4 style="margin-top: 20px;">FEATURED CREW</h4>
                <div class="row">
                    @foreach ($movie['credits']['crew'] as $crew)
                        @if ($loop->index < 2)
                            <div class="col-md-6">
                                <h5>{{ $crew['name'] }}</h5>
                                <div>{{ $crew['job'] }}</div>

                            </div>
                            
                        @endif
                    
                        
                    @endforeach
                    

                </div>
               
              </div>
                
                @if (count($movie['videos']['results'])  > 0  )
                    <div class="ps-product__shopping"><a class="ps-btn mb-10" href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}">Play Trailer<i class="ps-icon-next"></i></a>

                    </div>
                    
                @endif
              
            </div>
         
 
          </div>
        </div>
      </div>
    </div>
    <div class="ps-section ps-section--top-sales ps-owl-root pt-40 pb-80">
      <div class="ps-container">
        <div class="ps-section__header mb-50">
          <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                  <h3 class="ps-section__title">CASTS</h3>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
                </div>
                
          </div>
        </div>
        <div class="ps-section__content">
          <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                @foreach ($movie['credits']['cast'] as $cast)
                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                              <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $cast['profile_path'] }}" alt="">
                            </div>
                            <div class="ps-shoe__content">
                            
                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">{{ $cast['name'] }}</a>
                                <p class="ps-shoe__categories"><a href="#">{{ $cast['character'] }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
          
         
    
          </div>
        </div>


        <div class="ps-container">
            <div class="ps-section__header mb-50">
              <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                      <h3 class="ps-section__title">IMAGES</h3>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
                    </div>
                    
              </div>
            </div>
            <div class="ps-section__content">
              <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                    @foreach ($movie['images']['backdrops'] as $image)
                      @if ($loop->index < 9)
                        <div class="ps-shoes--carousel">
                            <div class="ps-shoe">
                                <div class="ps-shoe__thumbnail">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $image['file_path'] }}" alt="">
                                </div>
                        
                            </div>
                        </div>
                    
                          
                      @endif
                      
                    @endforeach
              
             
        
              </div>
            </div>
      </div>
    </div>
   
  </main>
@endsection