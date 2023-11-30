<!-- THIS MASTER PAGE YIELD ADMIN CONTENT -->


<!-- HEADER -->
@include("admin.layouts.header")

<!-- SIDEBAR -->
@include("admin.layouts.sidebar")

<!-- NAVBAR -->
@include("admin.layouts.navbar")


<!-- YIELD ADMIN CONTENT -->
@yield('content')


<!-- FOOTER -->
@include("admin.layouts.footer")
