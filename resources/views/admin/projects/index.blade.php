@extends('layouts.admin')

@section('page-title')
    Progetti
@endsection

@section('content')
    <h2 class="text-decoration-underline my-3">Lista progetti</h2>
    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <a href="{{ route('admin.projects.create') }}" class="btn btn-light my-3"><i class="fa-regular fa-square-plus me-2"></i>Aggiungi progetto</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->slug }}</td>
                <td>
                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-light"><i class="fa-solid fa-eye"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection