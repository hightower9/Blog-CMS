@extends('layouts.admin')

@section('content')
    <h1>Edit Category</h1>

    <div class="row">
        <div class="col-sm-6">
            {!! Form::model($category, ['method' => 'PATCH', 'action' => ['AdminCategoriesController@update', $category->id]]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-6">
                    {!! Form::submit('Update Category', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}

            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminCategoriesController@destroy', $category->id], 'class' => 'col-sm-6']) !!}
                <div class="form-group">
                    {!! Form::submit('Delete Category', ['class' => 'btn btn-danger pull-right']) !!}
                </div>
            {!! Form::close() !!}

            @include('includes.form-error')
        </div>
    </div>
@endsection