<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css -->
    <link rel="stylesheet" href="dating-app/css/style.css?v=<?php echo time(); ?>">

    <!-- poppins font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <!-- NAV -->
    <section class="nav" id="nav">
        <div class="nav__container" id="nav-container">
            <div class="logo__container">
                <a class="logo">Subtle Asian Dating</a>
            </div>

            <nav class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="/dating-app/html/home.html" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Matches</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Contact</a></li>
                    <!-- <li class="nav__item"><a href="Registration.php" class="nav__link">Register</a></li> -->
                    <li class="nav__item"><a href="login.php" class="nav__link">Login</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="hero-home">
        <div class="hero__container-home">
            <img class="fitBg-home" src="dating-app/img/hero.jpg" alt="">
            <div class="message__container-home" id="message__container">
                <h1 class="message__title-home">Welcome to Subtle Asian Dating Live</h1>
                <span class="message__intro-home">Meet your future love by a click of a button</span>
                <button class="message__start-home">Start now</button>
            </div>
        </div>
    </section>
</body>
</html>