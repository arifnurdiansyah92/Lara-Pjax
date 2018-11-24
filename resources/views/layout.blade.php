<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Pjax Example">
        <meta name="author" content="AN DEV">
        <title>@yield('title')</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript">
            $(function(){
                $(document).pjax('a', '#content')
            })
            $(document).ready(function(){
                if ($.support.pjax) {
                    $.pjax.defaults.timeout = 2000;
                }
            });
        </script>
    </head>
    <body id="content">
        @yield('nav')
        @yield('content')
    </body>
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.pjax.js')}}"></script>
    @yield("js")
</html>