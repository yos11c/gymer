<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vive una vida Fitness plus Entre Rios</title>

    <!-- favicon -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/256/2936/2936886.png">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body id="top">

<!-- HEADER -->
<header class="header" data-header>
    <div class="container">

        <a href="/" class="logo">
            <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>
            <span class="span">Fitness plus Entre Rios</span>
        </a>

        <nav class="navbar" data-navbar>

            <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
            </button>

            <ul class="navbar-list">

                <li><a href="/" class="navbar-link active" data-nav-link>Home</a></li>
                <li><a href="clientes" class="navbar-link" data-nav-link>Clientes</a></li>
                <li><a href="productos" class="navbar-link" data-nav-link>Productos</a></li>
                <li><a href="#footer" class="navbar-link" data-nav-link>Horarios</a></li>
                <li><a href="#footer" class="navbar-link" data-nav-link>Contactanos</a></li>

            </ul>

        </nav>

        <a href="#" class="btn btn-secondary">Comienza</a>

        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>

    </div>
</header>

<!-- Main Content -->
@yield('main')

<!-- Footer -->
@yield('footer')
<footer class="footer" id="footer">

    <div class="section footer-top bg-dark has-bg-image">
        <div class="container">

            <div class="footer-brand">

                <a href="#" class="logo">
                    <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>
                    <span class="span">Fitness plus Entre Rios</span>
                </a>

                <p class="footer-brand-text">Horario entre semana</p>

                <p>Lunes a viernes 5am a 11:00am - 3:00PM a 9:00pm</p>

            </div>

            <ul class="footer-list">
                <li><p class="footer-list-title has-before">Nuestros enlaces</p></li>
                <li><a href="#" class="footer-link">Home</a></li>
                <li><a href="" class="footer-link">Clientes</a></li>
                <li><a href="#" class="footer-link">Productos</a></li>
                <li><a href="#" class="footer-link">Blog</a></li>
                <li><a href="#" class="footer-link">Contactanos</a></li>
            </ul>



            <ul class="footer-list">
                <li><p class="footer-list-title has-before">Contactanos</p></li>
                <li class="footer-list-item">
                    <div class="icon">
                        <ion-icon name="call" aria-hidden="true"></ion-icon>
                    </div>
                    <div>
                        <a href="tel:+502 4198 7739" class="footer-link">+502 4198 7739</a>
                    </div>
                </li>
            </ul>

            <ul class="footer-list">
                <li><p class="footer-list-title has-before">Nuestro buzon</p></li>
                <li>
                    <form action="" class="footer-form">
                        <input type="email" name="email_address" aria-label="email" placeholder="Email Address" required class="input-field">
                        <button type="submit" class="btn btn-primary" aria-label="Submit">
                            <ion-icon name="chevron-forward-sharp" aria-hidden="true"></ion-icon>
                        </button>
                    </form>
                </li>
                <li>
                    <ul class="social-list">
                        <li><a href="#" class="social-link"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href="#" class="social-link"><ion-icon name="logo-instagram"></ion-icon></a></li>
                        <li><a href="#" class="social-link"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>

</footer>

<!-- BACK TO TOP -->
<a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up-sharp" aria-hidden="true"></ion-icon>
</a>

<!-- Custom JS -->
<script src="./assets/js/script.js" defer></script>

<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- Laravel JS -->
<script src="{{ asset('js/app.js') }}"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
