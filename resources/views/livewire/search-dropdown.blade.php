<div class="navigation__column right">
   
    <div class="ps-search--header"  x-data="{ isOpen: true }" @click.away="isOpen = false">

        <span style="position: absolute"><i class="ps-icon-search"></i></span>
        <input class="form-control" type="text" placeholder="Search Product…"
         wire:model.debounce.500ms="search"
         x-ref="search"
         @keydown.window="
            if(event.keycode==191){
                $refs.search.focus(); 
            }
         "
         @focus="isOpen=true"
         @keydown="isOpen=true"
         @keydown.escape.window="isOpen=false" 
         @keydown.shift.tab="isOpen=false">
        <div class="loader" style="position: absolute; float: right !important;" wire:loading ></div>
        
        @if (strlen($search) > 2)
            
            <div x-show.transition.opacity="isOpen">
                @if ($searchResult->count() > 0)
                    <div class="search-dropdown" >
                        <ul>
                            @foreach ($searchResult as $result)
                                <li class="search-list">
                                    <a href="{{ route('movie.details',['id'=>$result['id']]) }}" style="float: left" style="font-size: 5px !important"
                                      @if ($loop->last)
                                          @keydown.tab="isOpen=false"
                                      @endif
                                        >
                                        {{ $result['title'] }}</a>
                                </li>
                            
                            @endforeach
                            
                    
                        </ul>
                    </div>
                @else
                    <div class="search-dropdown-no-result">
                        <ul>
                            <li class="search-list-no-result"><h5 style="color:white;">  No result for "{{ $search }}"</h5></li>
                        </ul>
                    
                    </div> 
                @endif

            </div>
                
            
            
        @endif
        
    
    </div>

    
    <div class="menu-toggle"><span></span></div>
</div>
