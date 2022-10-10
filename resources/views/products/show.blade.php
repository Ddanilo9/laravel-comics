@extends('layouts.app')

@section('MetaTitle', $card['series'])
    

@section('content')
    <div class="jumbo">
    </div>
    <div class="box-comic-card">
        <div class="blue-band">
            <div class="container">
                <img src="{{$card['thumb']}}" alt="">
            </div>
        
        </div>
        <div class="container">
            <div class="row">
                <div class="col-70">
                    <h3>{{$card['title']}}</h3>
                    <div class="row">
                        <div class="col-80">
                            <span>U.S. Price: <span class="price">{{$card['price']}}</span></span>
                            <span>AVAILABLE</span>
                        </div>
                        <div class="col-20">
                            Check availability
                        </div>
                    </div>
                    <p>{{$card['description']}}</p>
                </div>
                <div class="col-30">
                    <img src="{{asset('img/adv.png')}}" alt="">
                    <span>ADVERTISEMENT</span>
                </div>
            </div>
        </div>
    </div>
    <div class="comics-about">
        <div class="container">
            <div class="row">
                <div class="col-50">
                    <h3>Talent</h3>
                    <div class="row">
                        <div class="col-30">
                            <span>Art by:</span> 
                        </div>
                        <div class="col-70">
                            @foreach ($card['artists'] as $item)
                            <p> {{ $item }}, </p>                    
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-30">
                            <span>Written by:</span> 
                        </div>
                        <div class="col-70">
                            @foreach ($card['writers'] as $item)
                            <p> {{ $item }}, </p>                    
                            @endforeach 
                        </div>
                    </div>
                </div>
                <div class="col-50">
                    <h3>Specs</h3>
                    <div class="row">
                        <div class="col-30">
                            <span>Series:</span> 
                        </div>
                        <div class="col-70">
                            <p>{{$card['series']}}</p> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-30">
                            <span>US Price</span> 
                        </div>
                        <div class="col-70">
                            <span>{{$card['price']}}</span> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-30">
                            <span>On sale date</span> 
                        </div>
                        <div class="col-70">
                            <span>{{$card['sale_date']}}</span> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
{{-- @dump($card) --}}
@endsection