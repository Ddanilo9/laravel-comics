@extends('layouts.app')

@section('metaTitle', 'prodotti')
    
@section('content')

<div class="main-up">
    <div class="jumbo">
    </div>
    <div class="container box-cards">
      @foreach ($products as $card)
         <div class="cards">
          <img src="{{$card['thumb']}}" :alt="">
          <h4>{{$card['series']}}</h4>
        </div> 
      @endforeach
      
     <button class="current-series">Current Series</button> 
    </div>
    <div class="button"><button>Load More</button>
    </div>
    
  </div>
  
  <div class="main-down">
    <div class="container">
      <ul class="menu">
        {{-- <li v-for="(link, i) in linksMenu" :key="i" class="menu-links">
          <a href="#nogo">
            <img :src="link.icon" alt="">
             {{link.text}}</a>
        </li> --}}
      </ul>
    </div>
  </div>
@endsection