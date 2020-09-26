@extends('layouts.admin')

@section('content')
    <h1>Edit Post</h1>

    <div class="row">
        <div class="col-sm-3">
            <img class="img-responsive img-rounded" src="{{ $post->photo ? $post->photo->file : asset('images/default-profile-picture.jpg') }}" alt="">
        </div>

        <div class="col-sm-9">

            {!! Form::model($post, ['method' => 'PATCH', 'action' => ['AdminPostsController@update', $post->id], 'files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('category_id', 'Category:') !!}
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Choose an option']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('photo_id', 'Photo:') !!}
                    {!! Form::file('photo_id', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('body', 'Description:') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-6">
                    {!! Form::submit('Edit Post', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}

            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminPostsController@destroy', $post->id], 'class' => 'col-sm-6']) !!}
            {{-- {{Form::hidden('_method','DELETE')}} --}}
                <div class="form-group">
                    {!! Form::submit('Delete Post', ['class' => 'btn btn-danger pull-right']) !!}
                </div>
            {!! Form::close() !!}

        </div>
    </div>
    @include('includes.form-error')
@endsection