@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>
    
    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Body</th>
            <th>User</th>
            <th>Category</th>
            <th>Created</th>
            <th>Updated</th>
          </tr>
        </thead>
        <tbody>
            @if ($posts)
                @foreach ($posts as $post)
                    <tr onclick="document.location = '{{ route('posts.show', $post->id) }}';">
                        <td>{{ $post->id }}</td>
                        <td>
                            <img height="70" src="{{ $post->photo ? $post->photo->file : asset('images/default-profile-picture.jpg') }}" alt="">
                        </td>
                        <td><a href="{{ route('posts.edit', $post->id) }}">{{ $post->title }}</a></td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->category_id }}</td>
                        
                        <td>{{ $post->created_at->diffForHumans() }}</td>
                        <td>{{ $post->updated_at->diffForHumans() }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection