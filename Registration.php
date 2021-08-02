<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    /*============== CSS ==============*/
    <link rel="stylesheet" href="dating-app/css/style.css?v=<?php echo time(); ?>">

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
                    <div class="info__container">
                        <h1>Sign Up</h1>
                        <form action="dating-app/includes/signup.inc.php" class="form">
                            <div class="first__name__container">
                                <spam class="first__name__title">Name</spam>
                                <input type="text" name="name"></input>
                            </div>
                            <div class="email__container">
                                <spam class="email__title">Email</spam>
                                <input type="text" name="email"></input>
                            </div>
                            <div class="password__container">
                                <spam class="password__title">Password</spam>
                                <input type="text" name="password"></input>
                            </div>
                            <input type="radio" class="accept">
                            <button type="submit" name="submit">Sign Up</button>
                        </form> 
            
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>