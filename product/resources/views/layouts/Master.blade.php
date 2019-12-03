  @include('layouts.Header') 
    <body>
       @include('layouts.Menu')
        @yield('MainSection')
        @include('layouts.Footer')
        @yield('Javascript')
    </body>
</html>

