<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css -->
    <link rel="stylesheet" href="/dating-app/css/login.css">

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
                    <li class="nav__item"><a href="#" class="nav__link">Services</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Contact</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Register</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Logout</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="hero-home">
        <div class="hero__container-home">
            <img class="fitBg-home" src="/dating-app/img/hero.jpg" alt="">
            <div class="message__container-home" id="message__container">
                <h1 class="message__title-home">Welcome to Subtle Asian Dating Live</h1>
                <span class="message__intro-home">Meet your future love by a click of a button</span>
                <button class="message__start-home">Start now</button>
            </div>
        </div>
    </section>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyCZ88aRbgxvHdloRH80Ql8xWYbB0dcgNfE",
    authDomain: "subtle-asian-dating-75cae.firebaseapp.com",
    projectId: "subtle-asian-dating-75cae",
    storageBucket: "subtle-asian-dating-75cae.appspot.com",
    messagingSenderId: "770052564491",
    appId: "1:770052564491:web:a5d9619fc835449f91090e",
    measurementId: "G-TZLMQN4ME8"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
</body>
</html>