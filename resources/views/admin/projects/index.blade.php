@extends('layouts.admin')

@section('content')
    <h2 class="text-decoration-underline my-3">Lista progetti</h2>
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
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-light"><i class="fa-solid fa-eye"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection