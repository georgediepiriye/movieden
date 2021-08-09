<div class="navigation__column right">
    <form class="ps-search--header" action="do_action" method="post">
 
        <span style="position: absolute"><i class="ps-icon-search"></i></span>
      <input class="form-control" type="text" placeholder="Search Product…" wire:model.debounce.500ms='search'>
      <div class="loader" style="position: absolute; float: right !important;" wire:loading ></div>
      
      @if (strlen($search)>2)
            @if ($searchResult->count() > 0)
                <div class="search-dropdown">
                    <ul>
                        @foreach ($searchResult as $result)
                        <li class="search-list">
                            <a href="{{ route('movie.details',['id'=>$result['id']]) }}" style="float: left" style="font-size: 5px !important">{{ $result['title'] }}</a>
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
          
      @endif
     
 
    </form>
    
    <div class="menu-toggle"><span></span></div>
</div>
