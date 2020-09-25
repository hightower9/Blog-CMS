@extends('layouts.admin')

@section('content')
    <h1>Edit User</h1>

    <div class="row">
        <div class="col-sm-3">
            <img class="img-responsive img-rounded" src="{{ $user->photo ? $user->photo->file : asset('images/default-profile-picture.jpg') }}" alt="">
        </div>

        <div class="col-sm-9">

            {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'E-Mail:') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('role_id', 'Role:') !!}
                    {!! Form::select('role_id', $roles, null, ['class' => 'form-control', 'placeholder' => 'Choose an option']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('is_active', 'Status:') !!}
                    {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'], null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('photo_id', 'Photo:') !!}
                    {!! Form::file('photo_id', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password:') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-6">
                    {!! Form::submit('Edit User', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}

            <script>
                function ConfirmDelete()
                {
                    confirm("Are you sure you want to delete?") ? true : false;
                }
            </script>

            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id], 'onsubmit' => 'return ConfirmDelete()', 'class' => 'col-sm-6']) !!}
            {{-- {{Form::hidden('_method','DELETE')}} --}}
                <div class="form-group">
                    {!! Form::submit('Delete User', ['class' => 'btn btn-danger pull-right']) !!}
                </div>
            {!! Form::close() !!}

        </div>
    </div>

    @include('includes.form-error')

@endsection