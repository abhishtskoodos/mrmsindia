<!DOCTYPE html>
<html lang="en">

<head>
@include('include.header')
</head>


<body>

    @include('include.nav')
    
    @yield('content')

@include('include.footer')
    <script src="include/js/jquery.min.js"></script>
    <script src="include/js/bootstrap.bundle.min.js"></script>
    <script src="include/js/plugins.js"></script>
    <script src="include/js/custom.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>
