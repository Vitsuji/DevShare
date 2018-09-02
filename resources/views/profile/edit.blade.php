@extends('layouts.main')

@section('title', 'Profile')

@section('stylesheets')
    {{-- Any scripts to include in this page. Use asset function --}}
    <link href="{{ asset('css/other.css') }}" rel="stylesheet">
@endsection

@section('content')
    <h2>Your Profile, {{ $profile->name }}</h2>

    {!! Form::model($profile, ['route' => ['user.update', $profile->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        {{ Form::token() }}
        {{ Form::label('name','Name') }}
        {{ Form::text('name', null, ['class' => 'whatever_class', 'max-length' => '255']) }}

        {{ Form::label('email', 'Email') }}
        {{ Form::textarea('email', null, array('class' => 'whatever_casss')) }}

        {{ Form::label('profile_img', 'Profile Image') }}
        {{ Form::file('profile_img', array('class' => 'whatever_class')) }}

        {{ Form::submit('Edit', ['class' => 'whatever_class']) }}
    {{ Form::close() }}
@endsection

@section('scripts')
    {{-- Any Javascript files to include  --}}
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
@endsection
