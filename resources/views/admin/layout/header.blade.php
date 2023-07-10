<?php
?>

<!DOCTYPE html>
<html>

<head>
    <title>Peminjaman Ruangan</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.css">
    <script src="../../js/jquery.js"></script>
    <script src="../../jsbootstrap.min.js"></script>


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

                    <li><a href="../room.blade.php">Room</a></li>
                    <li><a href="../room_type.php">Room Type</a></li>
                    <li><a href="../peminjaman.php">Data peminjaman</a></li>
                    <li><a href="../hal_utama.php">Dashboard</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="#">Log Out</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
