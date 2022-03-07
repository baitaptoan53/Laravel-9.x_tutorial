<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/clients/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/clients/js/styles.css">
    <title>@yield('title')</title>
    @yield('css')
</head>

<body>
    @include('clients.blocks.header')
    <main>
        <aside>
            @section('sidebar')
                @include('clients.blocks.header')
            @show
        </aside>
        <div class="content">
            @yield('content')
        </div>
    </main>
    <footer>
        <h1>FOOTER</h1>
    </footer>
    <script src="assets/clients/js/bootstrap.min.js"></script>
    <script src="assets/clients/js/custurnt.js"></script>
    @yield('js')
</body>

</html>
