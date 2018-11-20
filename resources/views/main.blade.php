<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials._head')
    </head>
   
    <body>
    
    <div class="super-container">

        <!-- Header -->
        @include('partials._nav')

        <!-- Home -->

        @include('partials._home')

       @yield('content')

       @include('partials._message')

       @include('partials._footer')

    </div>



        
        @include('partials._javascript')
        @yield('scripts')
    </body>
</html>
