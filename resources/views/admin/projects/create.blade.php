@extends('layouts.admin')

@section('page-title')
    Crea
@endsection

@section('content')
    <h2 class="text-decoration-underline my-3">Crea progetto</h2>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo*</label>
            <input type="text" class="form-control" id="title" name="title" maxlength="150" value="{{ old('title') }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="customer" class="form-label">Cliente*</label>
            <input type="text" class="form-control" id="customer" name="customer" maxlength="100" value="{{ old('customer') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
        <button type="reset" class="btn btn-secondary">Pulisci i campi</button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-light">Annulla</a>
    </form>
@endsection