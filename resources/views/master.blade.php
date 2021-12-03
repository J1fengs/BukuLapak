<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>@yield('title')</title>
</head>

<body>
    {{ View::make('navbar') }}
    @yield('content')

    <style>
        @font-face {
            font-family: Oswald-Regular;
            src: url('../fonts/oswald/Oswald-Regular.ttf');
        }

        @font-face {
            font-family: Oswald-Medium;
            src: url('../fonts/oswald/Oswald-Medium.ttf');
        }

        a {
            color: #000 !important;
            text-decoration: none!important;
        }

        .trending-image {
            height: 100px;
        }

        .trending-item {
            float: left;
            width: 20%;
        }

        .trending-wrapper {
            margin: 30px;
        }

        .detail-img {
            height: 200px;
        }

        .search-box {
            width: 500px !important;
        }

        .cart-list-devider {
            border-bottom: 2px solid #000;
            margin-bottom: 20px;
        }

        body {
            font-family: Oswald-Regular;
        }

        .slider-img{
            height: 400px!important;
        }

    </style>
</body>

</html>
