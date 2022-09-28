@extends('layout.homePage')

@section('title', 'Laravel Movies Home Page')
@section('heading', 'Laravel DB Movies')
@section('load-more')
    <div class="d-flex boxed">
        <a href="{{route('loadMore')}}" class="btn">
            Load More
        </a>
    </div>
@endsection