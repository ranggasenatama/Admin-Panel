<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>SSL | @yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="{{ asset('/blogtemplate/style.css')}}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ asset('/blogtemplate/js/cufon-yui.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/blogtemplate/js/arial.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/blogtemplate/js/cuf_run.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/blogtemplate/js/jquery-1.3.2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/blogtemplate/js/radius.js')}}"></script>
</head>

<body>
    <div class="main">
        @yield('content')
    </div>
</body>
</html>
