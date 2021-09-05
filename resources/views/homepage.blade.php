@extends('layouts.base')

@section('title', 'Home')

@section('content')
<span class="current-series p-2">Current Series</span>
<div class="container homepage">
    <div class="row">
        @foreach($comics as $comic)
        <div class="comic-series col-2">
            <a href="{{route('comic', ['id' => $loop->iteration])}}">
                <div class="comic-series-content">
                    <div class="comic-thumbnail"></div>
                    <span>{{$comic['series']}}</span>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>


<a href="{{route('about-us')}}"> About us</a><br>
<a href="{{route('contact-us')}}"> Our contacts</a><br>
@endsection