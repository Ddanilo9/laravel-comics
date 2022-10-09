<header>
    @php

    $links = [
     [
         'text' => 'Charachters'
     ],
     [
         'text' => 'comics'
     ],
     [
         'text' => 'movies'
     ],
     [
         'text' => 'tv'
     ],
     [
         'text' => 'games'
     ],
     [
         'text' => 'collectibles'
     ],
     [
         'text' => 'video'
     ],
     [
         'text' => 'fans'
     ],
     [
         'text' => 'news'
     ],
     [
         'text' => 'shop'
     ],
 ];      
 @endphp
    <div class="container">
         <img src="{{asset('img/dc-logo.png')}}" alt="">
         <ul class="nav">
            @foreach ($links as $link)
               <li class="nav-link">
                 <a href="">{{$link['text']}}</a>
             </li> 
            @endforeach
         </ul>
    </div>
 </header>