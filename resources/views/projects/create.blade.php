@extends('layouts.main')

@section('title', '?')

@section('stylesheets')
    {{-- Any scripts to include in this page. Use asset function --}}
    <link href="{{ asset('css/other.css') }}" rel="stylesheet">
@endsection

@section('content')
   {{-- All of the goodies --}}

   <h1>Create</h1>

    {{ Form::open(['route' => 'projects.store', 'class' => 'whatever_class']) }}
        {{ Form::token() }}
        {{ Form::label('title','Title') }}
        {{ Form::text('title', null, ['class' => 'whatever_class', 'max-length' => '255']) }}

        {{ Form::label('slug', 'Slug') }}
        {{ Form::text('slug', null, ['class' => 'whatever_classs', 'min-length' => '5', 'maxlength' => '255']) }}

        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', null, array('class' => 'whatever_casss')) }}
         
        {{ Form::submit('Create', ['class' => 'whatever_class']) }}
    {{ Form::close() }}

@endsection

@section('scripts')
    {{-- Any Javascript files to include  --}}
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
@endsection
