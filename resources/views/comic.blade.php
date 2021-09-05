@extends('layouts.base')

@section('title', 'Product')

@section('content')
<?php
    $currentComic = $comics[$arrayIndex];
?>
    <div>
        <div class="thumb-container">
            <img src="{{$currentComic['thumb']}}">
        </div>
        <div class="container  p-5 d-flex justify-content-around">
            <div class="comic-showcase col-8">
                <h1 class="comic-title">{{$currentComic['title']}}</h1>
                <div class="on-sale d-flex justify-content-between p-2">
                    <div class="price">
                    <span>U.S. Price: {{$currentComic['price']}}</span> 
                    <span>AVAILABLE</span>
                    </div>
                    <div class="availability">Check Availability</div>
                    
                </div>
                <p>{{$currentComic['description']}}</p>
            </div>
            <img src="/images/adv.jpg" alt="Ad">
        </div>    
        
        
        
        

        <div class="info p-5 d-flex justify-content-around">
            <div class="talent col-6">
                <h3>Talent</h3>
                <div class="art d-flex justify-content-around p-2">
                    <span class="col-3">Art by:</span>
                    <p class="col-9 link">
                    @foreach ($currentComic['artists'] as $artist)
                        {{$artist}}
                        @if(!$loop->last)
                        ,
                        @endif 
                    @endforeach    
                    </p>
                </div>
                <div class="written d-flex justify-content-around p-2">
                    <span class="col-3">Written by:</span>
                    <p class="col-9 link">
                        @foreach ($currentComic['writers'] as $writer)
                        {{$writer}}
                        @if(!$loop->last)
                        ,
                        @endif
                    @endforeach        
                    </p>
                </div>
            </div>
            <div class="specs col-6">
                <h3>Specs</h3>
                <div class="series d-flex justify-content-around p-2">
                    <span class="col-3">Series:</span>
                    <p class="col-9 link">{{$currentComic['series']}}</p>
                </div>
                <div class="spec-price d-flex justify-content-around p-2">
                    <span class="col-3">U.S. Price:</span>
                    <p class="col-9">{{$currentComic['price']}}</p>
                </div>
                <div class="sale-date d-flex justify-content-around p-2">
                    <span class="col-3">On Sale Date:</span>
                    <p class="col-9">{{$currentComic['sale_date']}}</p>
                </div>
            </div>
        </div>
        <div class="buy-comics d-flex justify-content-center">
            <div class="d-flex col-2 p-2 justify-content-around">
                <span class="">Digital Comics</span>
                <img src="/images/buy-comics-digital-comics.png" alt="Digital Comics">
            </div>
            <div class="d-flex col-2 p-2 justify-content-around">
                <span class="">Shop DC</span>
                <img src="/images/buy-comics-merchandise.png" alt="Merchandise">
            </div>
            <div class="d-flex col-2 p-2 justify-content-around">
                <span class="">Comic Shop Locator</span>
                <img src="/images/buy-comics-shop-locator.png" alt="Comic Shop Locator">
            </div>
            <div class="d-flex col-2 p-2 justify-content-around">
                <span class="">Subscriptions</span>
                <img src="/images/buy-comics-subscriptions.png" alt="Subscriptions">
            </div>
        </div>
    </div>
    
@endsection