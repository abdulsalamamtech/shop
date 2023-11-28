<!-- THIS MASTER PAGE YIELD ADMIN CONTENT -->


<!-- HEADER -->
@include("admin.includes.header")

<!-- SIDEBAR -->
@include("admin.includes.sidebar")

<!-- NAVBAR -->
@include("admin.includes.navbar")


<!-- YIELD ADMIN CONTENT -->
@yield('content')


<!-- FOOTER -->
@include("admin.includes.footer")
