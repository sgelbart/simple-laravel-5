<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
<head>
    <title>Simple Laravel 5 - @yield('title')</title>
    <link rel="stylesheet" href="https://bootswatch.com/yeti/bootstrap.css">
    <link href="//fonts.googleapis.com/css?family=Lato:100,300,500,800" rel="stylesheet" type="text/css">
    <style>

    </style>
</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>