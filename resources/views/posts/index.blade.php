@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
<div class="container">
    <div class="row ">
        @foreach ($posts as $post)
            <div class="col-3">
                <img class="img-fluid" src="{{$post->url_immage}}" alt="">
                <h2>{{$post->name}}</h2>
                <h2>{{$post->description}}</h2>
                <h2>{{$post->pubblication_name}}</h2>
            </div>
        @endforeach
    </div>
</div>
@endsection
