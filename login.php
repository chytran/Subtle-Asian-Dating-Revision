<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">

    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- poppins font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <!-- main -->
    <main class="main-1">
        <section class="hero">
            <div class="hero__container">
                <div class="form__content">
                    <div class="language__container">
                        <p class="language__name">English</p>
                        <div class="symbol"><i class='bx bxs-down-arrow'></i></div>
                    </div>

                    <!-- <div class="form__container"> -->
                        <h2 class="form__title">Login in to your Account</h2>
                        <form action="sub" class="form">
                            <input type="email" class="email__input" placeholder="Email or username">
                            
                            <input type="text" class="password__input" placeholder="Password">
                            <!-- <input type="submit" value="Login in" class="login__button"> -->
                            
                            <input type="submit" value="Login in" class="login__button">
                            
                            <button class="forget__button"><a class="forget__link" href="/dating-app/html/Registration.html">Register Now</a></button>
                            <button class="forget__button"><a class="forget__link" href="/dating-app/html/ResetPassword.html">Forgot Password?</a></button>
                        </form>
                        
                    <!-- </div> -->
                </div>

                <img class="hero__img" src="dating-app/img/subtle-asian.jpg" alt="">
            </div>
        </section>
    </main>
</body>
</html>