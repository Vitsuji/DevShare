@extends('layouts.main')

@section('title', 'Profile')

@section('stylesheets')
    {{-- Any scripts to include in this page. Use asset function --}}
    <link href="{{ asset('css/other.css') }}" rel="stylesheet">
@endsection

@section('content')
    <h2>Your Profile, {{ $profile->name }}</h2>

    {!! Form::model($profile, ['route' => 'projects.update', $profile->id]) !!}
    <p>{{ $profile->email }}</p>
    <img src="{{ asset('img/uploads/profile/'.$profile->profile_img) }}"/>
    {{-- <p>{{ $profile->project() }}</p> --}}

@endsection

@section('scripts')
    {{-- Any Javascript files to include  --}}
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
@endsection
