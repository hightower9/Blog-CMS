@extends('layouts.admin')

@section('content')

<h1 class="text-center">Media</h1>

<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Created</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        @if ($photos)
            @foreach ($photos as $photo)
                <tr>
                    <td>{{ $photo->id }}</td>
                    <td><img height="70" src="{{ $photo->file }}" alt=""></td>
                    <td>{{ $photo->created_at->diffForHumans() }}</td>
                    <td><a href="{{ route('medias.destroy', $photo->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
    
@endsection