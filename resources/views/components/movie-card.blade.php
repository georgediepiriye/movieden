<div class="ps-product__column">
    <div class="ps-shoe mb-20">
    <div class="ps-shoe__thumbnail">
        <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" alt="">
    </div>
    <div class="ps-shoe__content">
        <div class="ps-shoe__variants">
        <div class="ps-shoe__variant normal"></div>
      
      
        </div>
        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">{{ $movie['title'] }}</a>
        <p class="ps-shoe__categories"><a href="#">{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, y') }}</a>
          | <i style="color: gold" class="fa fa-star"></i>  <span>{{ $movie['vote_average'] * 10 . '%' }}</span>
          <p class="ps-shoe__categories">
              @foreach ($movie['genre_ids'] as $genre)
                {{ $genres->get($genre) }}@if (!$loop->last),
                  
                @endif
                
              @endforeach
            
          </p> 
             
        </div>
    </div>
    </div>
</div>