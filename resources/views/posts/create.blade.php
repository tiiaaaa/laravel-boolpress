@extends('layouts.app')

@section('title', 'Add Posts')

@section('content')
<section class="container-fluid p-5" id="add-form">

	{{-- <div class="row">
		<div class="col-12 mb-3">
			<a href="{{ route('posts.index') }}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Back</a>
		</div>
	</div> --}}

    <form class="row row-cols-4 g-3 flex-column align-items-center" method="POST">
        @csrf
        <div class="col">
            <h2>
                Creazione nuovo post
            </h2>
            @if ( $errors->any() )
            <ul class="alert alert-danger">
                @foreach ( $errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <div class="col">
            <label for="numero_telaio">Nome del post</label>
            <input type="text" name="numero_telaio" id="numero_telaio" class="form-control">
		</div>
        <div class="col">
            <label for="model">Descrizione</label>
            <input type="text" name="model" id="model" class="form-control">
        </div>
        <div class="col">
            <label for="porte">Inserisci un immagine</label>
            <input type="text" name="porte" id="porte" class="form-control">
        </div>
        <div class="col">
            <label for="data_immatricolazione">Data di pubblicazione</label>
            <input type="date" name="data_immatricolazione" id="data_immatricolazione" class="form-control">
        </div>

        <div class="col text-center">
            <button type="submit" class="btn btn-primary mb-3">Send</button>
        </div>
@endsection
