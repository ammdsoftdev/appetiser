<html> <!-- This page is a layout to be called by another view, in this case, extended in surver-list.blade.php-->
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>App Name - @yield('title')</title>


    </head>
    <body>

        <div class="container" style="color:blue">
            @yield('content')
            <p>tae</p>
        </div>
    </body>
</html>
