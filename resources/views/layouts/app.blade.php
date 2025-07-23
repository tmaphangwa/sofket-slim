<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="https://sofket.co.za/images/SOFKETLogo3.png" />

    <meta name="theme-color" content="black">
    <meta property="og:type" content="Republic44.com" />

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link href="css/site.css" rel="stylesheet" />

    <script src="jquery/dist/jquery.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <style>
        nav {
            background-color: black;
        }
    </style>
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
