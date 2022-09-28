@extends('layout.homePage')

@section('title', 'Laravel More Movies Page')
@section('heading', 'Laravel DB More Movies')

@section('load-more')
<div class="d-flex boxed">
    <a href="{{route('homePage')}}" class="btn">
        Home Page
    </a>
</div>
@endsection