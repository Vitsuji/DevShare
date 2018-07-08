@extends('layouts.main')

@section('title', 'Index')

@section('stylesheets')
    {{-- Any scripts to include in this page. Use asset function --}}
    <link href="{{ asset('css/other.css') }}" rel="stylesheet">
@endsection

@section('content')
    {{-- All of the goodies --}}
    <main id="splash__index">
        <h1>Emineto</h1>
        <h2>
            <em>Project Yourself</em>
        </h2>
    </main>
@endsection

@section('scripts')
    {{-- Any Javascript files to include  --}}
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
@endsection
