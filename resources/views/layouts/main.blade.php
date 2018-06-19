{{-- The master file that gathers all of the partials --}}

<!DOCTYPE html>
<html>
    <head>
        @include('layouts.partials._head')
        @yield('stylesheets')
    </head>
    <body>
        @include('layouts.partials._nav')
        @yield('opener')
        <div class="container">
            @include('layouts.partials._messages')
            @yield('content')
        </div>

        @include('layouts.partials._primaryjs')
        @yield('scripts')
    </body>
</html>