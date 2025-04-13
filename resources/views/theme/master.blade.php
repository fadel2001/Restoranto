<!DOCTYPE html>
<html lang="en">

@include('theme.partials.head')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('theme.partials.spinner')
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        @include('theme.partials.hero_navbar')
        <!-- Navbar & Hero End -->


        @yield('content')


        <!-- Footer Start -->
        @include('theme.partials.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('theme.partials.scripts')
</body>

</html>
