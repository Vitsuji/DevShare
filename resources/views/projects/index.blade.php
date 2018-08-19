@extends('layouts.main')

@section('title', 'Projects')

@section('stylesheets')
    {{-- Any scripts to include in this page. Use asset function --}}
    <link href="{{ asset('css/other.css') }}" rel="stylesheet">
@endsection

@section('content')
  {{-- All of the goodies --}}

  <h1>All of our posts!</h1>


  <div class="alert alert-success" role="alert">
  </div>
  @if (auth()->check())
    <h1>Welcome {{ explode(" ", Auth::user()->name)[0] }}</h1>
  @endif
  @foreach ($projects as $project)
    <h2>{{ $project->description }}</h2>
    {{--  Call the user method and then selelct what you need from the user table e.g name, id, profile pic --}}
    <h4>{{ $project->user->name}}</h4>
  @endforeach


@endsection

@section('scripts')
    {{-- Any Javascript files to include  --}}
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
@endsection
