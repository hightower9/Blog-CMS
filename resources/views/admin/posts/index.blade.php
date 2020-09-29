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
            <th>View</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>
            @if ($posts)
                @foreach ($posts as $post)
                {{-- onclick="document.location = '{{ route('posts.show', $post->id) }}';" --}}
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>
                            <img height="70" src="{{ $post->photo ? $post->photo->file : asset('images/default-profile-picture.jpg') }}" alt="">
                        </td>
                        <td>{{ $post->title }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($post->body, 15) }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->category ? $post->category->name : 'Uncategorized' }}</td>
                        <td>{{ $post->created_at->diffForHumans() }}</td>
                        <td>{{ $post->updated_at->diffForHumans() }}</td>
                        <td><a href="{{ route('home.post', $post->id) }}">View Post</a></td>
                        <td><a href="{{ route('comments.show', $post->id) }}">View Comments</a></td>
                        <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection