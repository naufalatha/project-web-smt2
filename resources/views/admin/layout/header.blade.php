<!DOCTYPE html>
<html>

<head>
    <title>Peminjaman Ruangan</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>

<body>

    <nav class="navbar navbar-default" style="padding: 5px;">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">

                    <li><a href="{{ route('admin.ruangan') }}">Room</a></li>
                    <li><a href="{{ route('admin.tipe-ruangan') }}">Room Type</a></li>
                    <li><a href="{{ route('admin.peminjaman') }}">Data peminjaman</a></li>
                    <li><a href="{{ route('admin.home') }}">Dashboard</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="#">Log Out</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    @yield('content')

</body>
