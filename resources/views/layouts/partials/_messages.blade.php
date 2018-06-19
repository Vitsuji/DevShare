{{-- In case we need session flashes --}}
@if (Session::has('success'))
    <div class="message success_message">
        <strong> Success:</strong> {{ Session::get('success')}}
    </div>
@endif

@if (count($errors) > 0)
    <div class="message error_message">
        <strong> Error:</strong>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
        @endforeach
        </ul>
    </div>
@endif