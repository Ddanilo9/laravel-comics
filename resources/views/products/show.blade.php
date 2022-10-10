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
                            <span>US Price: {{$card['price']}}</span>
                            <span>Available</span>
                        </div>
                        <div class="col-20">
                            Check Availibility
                        </div>
                    </div>
                    <p>{{$card['description']}}</p>
                </div>
                <div class="col-30">
                    2
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
                            Art by:
                        </div>
                        <div class="col-70">
                            uno, 2, cndsj, cds
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-30">
                            Written by:
                        </div>
                        <div class="col-70">
                            cdsac  hudsi hvuish fusahd
                        </div>
                    </div>
                </div>
                <div class="col-50">
                    <h3>Specs</h3>
                    <div class="row">
                        <div class="col-30">
                            Series:
                        </div>
                        <div class="col-70">
                            uno, 2, cndsj, cds
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-30">
                            US Price
                        </div>
                        <div class="col-70">
                            cdsac  hudsi hvuish fusahd
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-30">
                            On sale date
                        </div>
                        <div class="col-70">
                            cdsac  hudsi hvuish fusahd
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
{{-- @dump($card) --}}
@endsection