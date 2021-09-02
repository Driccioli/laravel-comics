@extends('layouts.base')

@section('title', 'Home')

@section('content')
This is the homepage<br>
<a href="{{route('product')}}"> Go to a product</a>
@endsection