@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" />
@endsection

@section('content')

<h1 class="text-center">Upload Media</h1>

    {!! Form::open(['method' => 'POST', 'action' => 'AdminMediasController@store', 'files' => true, 'class' => 'dropzone']) !!}
        
    {!! Form::close() !!}

    @include('includes.form-error')
    
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
@endsection