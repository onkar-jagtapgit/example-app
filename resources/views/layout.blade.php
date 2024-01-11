<html>


<head>

    <script type="text/javascript">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    </script>
    @yield('scripts')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <title>Laravel 10 task</title>


</head>

<body>
    <h1>@yield('title')</h1>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>