<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="{{ csrf_token() }}" />
        <link rel="icon" type="image/png" href="/admin/assets/favicon.png" />
        <title>
            Material Systems 
        </title>

        @include ('admin.partials.css')

    </head>
    <body>

        <div class="wrapper">
                               
            @include ('admin.partials.menu')

            <div class="main-panel">

                @include ('admin.partials.header')

                <!-- CONTENT -->
                    @yield('content')  
                <!-- CONTENT -->
                                           

                @include ('admin.partials.footer')

            </div>
        </div>

        @include ('admin.partials.js')

    </body>
</html>