@extends('layouts.admin')

@section('content')
    <h2 class="my-3">Dettagli progetto</h2>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title fw-bold">{{ $project->title}}</h4>
            <h5 class="card-subtitle mb-2 text-muted">{{ $project->slug }}</h5>
            <p class="card-text">{{ $project->description }}</p>
            <div>Cliente:
                <strong>{{ $project->customer }}</strong>
            </div>
        </div>
    </div>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary my-3">Torna ai progetti</a>
@endsection