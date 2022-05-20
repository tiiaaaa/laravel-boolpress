@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($posts as $post)
            <div class="col-3">
                <h2>{{$post->name}}</h2>
                <h2>{{$post->description}}</h2>
                <h2>{{$post->pubblication_name}}</h2>
            </div>
        @endforeach
    </div>
</div>
@endsection
