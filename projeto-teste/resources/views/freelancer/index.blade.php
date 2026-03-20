<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/freelancer/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        @include('freelancer.components.nav') <!-- Navigation -->
        @include('freelancer.components.masthead') <!-- Masthead -->
        @include('freelancer.components.portfolio') <!-- Portfolio Grid -->
        @include('freelancer.components.about') <!-- About Section -->
        @include('freelancer.components.contact') <!-- Contact Section -->
        @include('freelancer.components.footer') <!-- Footer -->
        @include('freelancer.components.copyright') <!-- Copyright Section -->
        @include('freelancer.components.modals') <!-- Portfolio Modals -->
        @include('freelancer.components.scripts') <!-- Bootstrap core JS and theme JS-->
    </body>
</html>
