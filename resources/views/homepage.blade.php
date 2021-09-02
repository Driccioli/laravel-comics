@extends('layouts.base')

@section('title', 'Home')

@section('content')
This is the homepage<br>
<a href="{{route('product')}}"> Go to a product</a><br>
<a href="{{route('about-us')}}"> About us</a><br>
<a href="{{route('contact-us')}}"> Our contacts</a><br>
@endsection