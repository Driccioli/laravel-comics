@extends('layouts.base')

@section('title', 'Product')

@section('content')
<a href="{{route('home')}}"> Homepage</a>
<br>

<?php
    $currentComic = $comics[$arrayIndex];
?>

    <img src="{{$currentComic['thumb']}}">
    <br>
    <h1>{{$currentComic['title']}}</h1>
    <div class="on-sale">
        <div class="price">
           <span>U.S. Price: {{$currentComic['price']}}</span> 
           <span>AVAILABLE</span>
        </div>
        <div class="availability">Check Availability</div>
    </div>
    <img src="/images/adv.jpg" alt="Ad">
    <p>{{$currentComic['description']}}</p>

    <div class="info">
        <div class="talent">
            <h3>Talent</h3>
            <div class="art">
                Art by:
                <p>
                @foreach ($currentComic['artists'] as $artist)
                    {{$artist}}
                    @if(!$loop->last)
                    ,
                    @endif 
                @endforeach    
                </p>
            </div>
            <div class="written">
                Written by:
                <p>
                    @foreach ($currentComic['writers'] as $writer)
                    {{$writer}}
                    @if(!$loop->last)
                    ,
                    @endif
                @endforeach        
                </p>
            </div>
        </div>
        <div class="specs">
            <h3>Specs</h3>
            <div class="series">
                Series:
                <p>{{$currentComic['series']}}</p>
            </div>
            <div class="spec-price">
                U.S. Price:
                <p>{{$currentComic['price']}}</p>
            </div>
            <div class="sale-date">
                On Sale Date:
                <p>{{$currentComic['sale_date']}}</p>
            </div>
        </div>
    </div>
@endsection