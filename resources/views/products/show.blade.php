@extends('layouts.app')

@section('MetaTitle', $card['series'])
    

@section('content')
    <div class="container">
        <img src="{{$card['thumb']}}" alt="">
    </div>
    <h1>{{$card['series']}}</h1>
    <p>{{$card['price']}}</p>
{{-- @dump($card) --}}
@endsection