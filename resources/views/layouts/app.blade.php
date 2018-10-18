<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
    @yield('edit-page-styles-scripts')
</head>
<body>
    <div id="app">
        @include('layouts.partials.navigation')
        <div class="container">
        <main class="py-4">
           

               @include('layouts.partials._alerts')
            @yield('content') 
            
            
        </main>
        </div>
    </div>
     @include('layouts.partials.footer')
</body>
</html>
