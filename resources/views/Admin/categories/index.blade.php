@extends('layouts.app')

@section('title')

@section('content')
<div class="container">
    <div class="row ">
        @foreach ($posts as $post)
            <div class="col-3">
                <img class="img-fluid" src="{{$post->url_immage}}" alt="">
                <h2>{{$post->name}}</h2>
                <h2>{{$post->description}}</h2>
                <h2>{{$post->pubblication_name}}</h2>

                <form action="{{route('admin.posts.destroy', $post->id )}}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="">
                        <button type="submit"class="btn btn-outline-danger">
                            <p class="mb-0">delete</p>
                        </button>
                    </a>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
