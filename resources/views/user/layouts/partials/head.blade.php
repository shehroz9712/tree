<head>
    <meta charset="utf-8">

    @yield('meta')

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="{{ userFile('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ userFile('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ userFile('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ userFile('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ userFile('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ userFile('css/style.css') }}" rel="stylesheet">

    <style>
        :root {
            --themeColor: #6ab42e
        }

        img {
            max-width: 100%;
        }


        .navbar-light .navbar-nav .nav-link:before {

            bottom: 0;
        }

        .navbar-light a.nav-item.nav-link {
            position: relative;
            font-size: 15px;
            text-transform: uppercase;
            font-weight: 500;
            outline: none;
            transition: .5s;
        }

        .navbar-nav .nav-link:before {
            content: "";
            position: absolute;
            background: var(--themeColor);
            height: 5px;
            opacity: 1;
            visibility: visible;
            width: 0;
            -webkit-transition: .15s all ease-out;
            -o-transition: .15s all ease-out;
            transition: .15s all ease-out;
            bottom: 20px;
        }

        .navbar-light .navbar-nav a:hover:before,
        .navbar-light .navbar-nav a.active:before {
            width: calc(100% - 30px);
        }

        .navbar-nav a:hover:before,
        .navbar-nav a.active:before {
            width: calc(100% - 10px);
        }

        .btn {
            border-radius: 4px;
        }

        .btn:hover {
            border-radius: 30px 0px;
        }

        .emergency-section .line::before {
            width: 40%;
            bottom: -15px;
            left: calc(50% - 20%);
        }

        .emergency-section .line::after {
            width: 60%;
            top: -15px;
            left: calc(50% - 30%);
        }

        .emergency-section .line::after,
        .emergency-section .line::before {
            background-color: #6ab42e;
            content: "";
            position: absolute;
            background: var(--themeColor);
            height: 3px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: .15s all ease-out;
            -o-transition: .15s all ease-out;
            transition: .15s all ease-out;

        }

        .emergency-section {
            background-size: cover;
            background-position: center;
            padding: 50px 0;
            color: white;
            text-align: center;
        }

        .rating i.fa-star {
            color: #ffd400;
        }

        .timeline {
            position: relative;
        }

        .timeline-panel {
            margin: 0px 20px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 4px;
            background: #6ab42e73;
            left: 50%;
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
        }

        .timeline-badge {
            position: absolute;
            top: 15px;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            width: 2.5rem;
            height: 2.5rem;
            background-color: #6ab42e;
            border-radius: 50%;
            color: white;
            text-align: center;
            padding: 3px;
            font-size: 25px
        }

        @media (max-width: 767.98px) {
            .timeline::before {
                left: 1.5rem;
            }

            .timeline-item {
                padding-left: 3rem;
            }

            .timeline-item .timeline-panel {
                width: 100%;
                text-align: left;
            }

            .timeline-badge {
                left: 1.5rem;
            }
        }

        .testimonial-item p {
            height: 150px;
        }

        .accordion-button:focus {
            box-shadow: none;
        }

        /* Default style for the accordion button */
        .accordion-button::before {
            flex-shrink: 0;
            width: 1.25rem;
            height: 1.25rem;
            margin-right: 10px;
            content: "+";
            /* background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23666565'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e"); */
            background-repeat: no-repeat;
            background-size: 1.25rem;
            transition: transform 0.2s ease-in-out;
        }

        /* Style when accordion is expanded (not collapsed) */
        .accordion-button:not(.collapsed)::before {
            /* background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23e59114'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e"); */
            /* transform: rotate(45deg); */
            content: "-";

        }

        .mission-content {
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
        }

        .mission {
            padding-left: 120px;
        }

        .mission-icons i {
            font-size: 35px;
            padding: 10px;
        }

        .mission-icons {
            font-size: 20px;
            font-weight: 600;
        }

        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            color: #495057;
            background-color: #ffffff;
            border-color: #dee2e6 #dee2e6 #ffffff;
        }

        .client-counter {
            position: absolute;
            width: 200px;
            padding: 30px;
            text-align: center;
            top: 85%;
            left: 30%;
            transition: .5s;
            border-radius: 4px;
        }

        .client-counter:hover {
            border-radius: 70px 0 !important;
        }
    </style>
</head>
