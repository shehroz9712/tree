<head>
    <meta charset="utf-8">

    @yield('meta')

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <link href="{{ userFile('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ userFile('css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ userFile('css/style.css') }}" rel="stylesheet">
    <style>
        .navbar-nav .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        .dropdown-menu {
            display: none;
        }

        .dropdown-menu li {
            border-bottom: 2px #65ab2d dotted;
            margin: 0px !important;
        }
    </style>
</head>
