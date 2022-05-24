@extends('layouts.app')

@section('title')

@section('content')
<section class="container-fluid p-5" id="add-form">

	<div class="row">
		<div class="col-12 mb-3">
			<a href="{{ route('admin.categories.index') }}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Back</a>
		</div>
	</div>

    <form class="row row-cols-4 g-3 flex-column align-items-center" action="{{ route('admin.categories.store') }}" method="POST">
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
            <label for="name">Category name</label>
            <input type="text" name="name" id="name" class="form-control">
		</div>
        <div class="col">
            <label for="color" class="form-label">Category Color</label>
            <input type="color" id="color" name="color" class="form-control form-control-color" value="#00000" title="Choose your Category Color">
        </div>
        <div class="col text-center">
            <button type="submit" class="btn btn-primary mb-3">Send</button>
        </div>
@endsection

