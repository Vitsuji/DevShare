@extends('layouts.main')

@section('title', '?')

@section('stylesheets')
    {{-- Any scripts to include in this page. Use asset function --}}
    <link href="{{ asset('css/other.css') }}" rel="stylesheet">
@endsection

@section('content')
   {{-- All of the goodies --}}

   <h1>Edit</h1>

    {{ Form::model($project, ['route' => ['projects.update', $project->id], 'class' => 'whatever_class', 'enctype' => 'multipart/form-data', 'method' => 'PUT']) }}
        {{ Form::token() }}
        {{ Form::label('title','Title') }}
        {{ Form::text('title', null, ['class' => 'whatever_class', 'max-length' => '255']) }}

        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', null, array('class' => 'whatever_casss')) }}

        {{ Form::label('cover_img', 'Cover Image') }}
        {{ Form::file('cover_img', array('class' => 'whatever_class')) }}

        {{ Form::label('collaborators','Collaborators') }}
        {{ Form::text('collaborators', null, ['class' => 'whatever_class', 'max-length' => '255']) }}

        {{ Form::label('tags','Tags') }}
        {{ Form::text('tags', null, ['class' => 'whatever_class', 'max-length' => '255']) }}

        {{ Form::label('github_repo','Gituhb Repository') }}
        {{ Form::text('github_repo', null, ['class' => 'whatever_class', 'max-length' => '255']) }}

        {{ Form::label('prototype','Prototype') }}
        {{ Form::text('prototype', null, ['class' => 'whatever_class', 'max-length' => '255']) }}

        {{ Form::submit('Edit', ['class' => 'whatever_class']) }}
    {{ Form::close() }}

@endsection

@section('scripts')
    {{-- Any Javascript files to include  --}}
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
@endsection
