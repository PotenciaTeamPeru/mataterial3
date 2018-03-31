<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/png" href="/admin/assets/favicon.png" />
        <title>
            Material Systems 
        </title>

        <!-- ----- STYLE ----- -->
        
        @stack('democss')
        @stack('materialcss')
        @stack('bootstrap337css')
        @stack('bootstrap335css')
        @stack('awesomecss')
        @stack('font')
        @stack('datatablescss')
        
        <!-- ----- STYLE ----- -->

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

        <!-- ------ JS ------ -->

        @stack('jquery111js')
        @stack('jquery321js')
        @stack('bootstrap337js')
        @stack('bootstrap335js')
        @stack('materialjs')
        @stack('chartlistjs')
        @stack('arrive')
        @stack('scrollbarjs')
        @stack('notifyjs')
        @stack('dashboardjs')
        @stack('demojs')
        @stack('materialscriptjs')
        @stack('datatablesjs')
        
        <!-- ------ JS ------ -->

    </body>
</html>



