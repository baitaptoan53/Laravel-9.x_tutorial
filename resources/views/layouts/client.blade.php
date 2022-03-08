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
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <aside>
                        @section('sidebar')
                            @include('clients.blocks.header')
                        @show
                    </aside>
                </div>
                <div class="col-8">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>



    </main>
    @include('clients.blocks.footer')
    <script src="assets/clients/js/bootstrap.min.js"></script>
    <script src="assets/clients/js/custurnt.js"></script>
    @yield('js')
</body>

</html>
