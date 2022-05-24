@extends('layouts.app')

@section('title', 'Add Posts')

@section('content')
<section class="container-fluid p-5" id="add-form">

	<div class="row">
		<div class="col-12 mb-3">
			<a href="{{ route('admin.posts.index') }}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Back</a>
		</div>
	</div>

    <form class="row row-cols-4 g-3 flex-column align-items-center" action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div class="col">
            <h2>
                Creazione nuovo post
            </h2>
            {{-- @if ( $errors->any() )
            <ul class="alert alert-danger">
                @foreach ( $errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif --}}
        </div>
        <div class="col">
            <label for="name">Nome del post</label>
            <input type="text" name="name" id="name" class="form-control">
		</div>
        <div class="col">
            <label for="description">Descrizione</label>
            <input type="text" name="description" id="description" class="form-control">
        </div>
        <div class="col">
            <label for="url_immage">Inserisci un immagine</label>
            <input type="text" name="url_immage" id="url_immage" class="form-control">
        </div>
        <div class="col">
            <label for="pubblication_date">Data di pubblicazione</label>
            <input type="date" name="pubblication_date" id="pubblication_date" class="form-control">
        </div>

        <div class="col text-center">
            <button type="submit" class="btn btn-primary mb-3">Send</button>
        </div>
@endsection
