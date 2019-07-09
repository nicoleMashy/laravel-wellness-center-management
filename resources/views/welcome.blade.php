<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="{{ asset('/css/custom.css') }}" type="text/css">
        <title>zcc Belvedere wellness</title>




    </head>
    <body>
    <div class=" main-nav-block">
        <nav class =" main navbar navbar-expand-sm ">
            <ul class="nav navbar-nav  style="float:left;">
                <li class=" divider-vertical nav-item active">
                    <div class=" topnav ">
                        <a class="navbar-brand" href="{{ url('home') }}"> HOME </a>
                    </div>
                </li>
            </ul>
            <ul class=" main-nav nav navbar-nav ml-auto ">

                <li class=" divider-vertical nav-item active">
                    <div class=" topnav ">
                        <a href="{{ url('patience-and-vistors') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">PATIENCE AND VISTORS<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">

                            <li><a class="dropdown-item" href="#">registration and admission</a></li>
                            <li><a class="dropdown-item" href="#"> wellness stay</a></li>
                            <li><a class="dropdown-item" href="#">wellness discharge and feedback</a></li>
                            <li><a class="dropdown-item" href="#"> advice and support</a></li>
                            <li><a class="dropdown-item" href="#"> hours and direction</a></li>


                        </ul>
                    </div>
                </li>
                <li class="  divider-vertical nav-item active">
                    <div class=" topnav ">
                        <a href="{{ url('tabheras') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">TABHERAS<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">

                            <li><a class="dropdown-item" href="#">BELVEDERE 1</a></li>
                                <li><a class="dropdown-item" href="#"> BELVEDERE ACADEMY</a></li>


                        </ul>
                    </div>
                </li>
                <li class="  divider-vertical nav-item active">
                    <div class=" topnav ">
                        <a class="nav-link" href="{{ url('jorodhani') }}">JORODHANI</a>
                    </div>
                </li>
                <li class="  divider-vertical nav-item active">
                    <div class=" topnav ">
                        <a class="nav-link" href="{{ url('contact us') }}"> CONTACT US</a>
                    </div>
                </li>
                <li class=" dropdown community-dropdown divider-vertical nav-item active">
                    <div class=" topnav ">
                        <a href="{{ url('about') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ABOUT<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="#">holy and centenary items</a></li>
                            <li><a class="dropdown-item" href="#"> church history</a></li>
                            <li><a class="dropdown-item" href="#">understanding raviro</a></li>
                            <li><a class="dropdown-item" href="#">reception</a></li>

                        </ul>
                    </div>
                </li>
                <li class="  divider-vertical nav-item active">
                    <div class=" topnav ">
                        <a href="{{ url('zcc-community') }}" class="nav-link" href="forge">ZCC COMMUNITY</a>
                    </div>
                </li>


            </ul>

        </nav>
    </body>
</html>
