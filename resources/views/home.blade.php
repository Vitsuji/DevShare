@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (auth()->check())
                        <div class="alert alert-success" role="alert">
                        </div>
                        <h1>Welcome {{ explode(" ", Auth::user()->name)[0] }}</h1>
                        @foreach ($projects as $project)
                            <h2>{{ $project->description }}</h2>
                            {{--  Call the user method and then selelct what you need from the user table e.g name, id, profile pic --}}
                            <h4>{{ $project->user->name}}</h4>
                        @endforeach
                    @else
                        <h3>Not logged</h3>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
