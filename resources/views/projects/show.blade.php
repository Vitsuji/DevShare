@extends('layouts.main')

@section('title', '?')

@section('stylesheets')
    {{-- Any scripts to include in this page. Use asset function --}}
    <link href="{{ asset('css/other.css') }}" rel="stylesheet">
@endsection

@section('content')
   {{-- All of the goodies --}}

   @if(auth()->check())
    {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'DELETE']) !!}
        {!! Form::submit('Delete', ['class' => 'whatever_class'])  !!}
    {!! Form::close() !!}
   @endif
   <h1>{{ $project->title }}</h1>
   <h2>{{ $project->description }}</h2>
   <h2>{{ $project->user->name }}</h2>
   <img src="{{ asset('img/uploads/project/'.$project->cover_img) }}"/>
   <h2>{{ $project->github_repo }}</h2>
   <h2>{{ $project->prototype }}</h2>
   <h2>{{ $project->collaborators }}</h2>

@endsection

@section('scripts')
    {{-- Any Javascript files to include  --}}
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
@endsection
