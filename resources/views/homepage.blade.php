@extends('layouts.base')

@section('title', 'Home')

@section('content')
<span class="current-series p-2">Current Series</span>
<div class="homepage p-5">
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="comic-series col-2">
                <a href="{{route('comic', ['id' => $loop->iteration])}}">
                    <div class="comic-series-content">
                        <img class="comic-thumbnail" src="{{$comic['thumb']}}" alt="Thumb" >
                        <span>{{$comic['series']}}</span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    
</div>


{{-- <a href="{{route('about-us')}}"> About us</a><br>
<a href="{{route('contact-us')}}"> Our contacts</a><br> --}}
@endsection