
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v34/ekka-admin/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jun 2023 09:55:53 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ekka - Admin Dashboard HTML Template.">

    <title>ECommerce Admin Auth</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

    <link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- Ekka CSS -->
    <link id="ekka-css" rel="stylesheet" href="{{ URL('assets/css/ekka.css') }}" />

    <!-- FAVICON -->
    <link href="{{ URL('assets/img/favicon.png') }}" rel="shortcut icon" />

    {{-- Error Styles --}}
    <style>
        .error{
            /* color: #dc3545; */
            color: #e74c3c;
        }
        .form-error{
            border: 2px solid #e74c3c;
        }
    </style>

</head>

<body class="sign-inup" id="body">

    @yield('content')

    <!-- Javascript -->
    <script src="{{ URL('assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ URL('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('assets/plugins/jquery-zoom/jquery.zoom.min.js') }}"></script>
    <script src="{{ URL('assets/plugins/slick/slick.min.js') }}"></script>

<!-- Ekka Custom -->
<script src="{{ URL('assets/js/ekka.js') }}"></script>
</body>

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v34/ekka-admin/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jun 2023 09:55:53 GMT -->
</html>
