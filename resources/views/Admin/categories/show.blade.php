@extends('layouts.app')

@section('title')

@section('content')
<div class="container-fluid">
    <section class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <img src="{{$post->url_immage}}" class="card-img-top" alt="{{$post->name}}">
                <div class="card-body">
                <p class="card-text">{{$post->description}}</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
