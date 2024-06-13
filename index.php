<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasharik</title>
    <link href="https://lntour.by/files/00997/obj/110/2523/img/d05439b02d8f265930ec1cc2ddfec988.jpg" <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <nav>
            <div>
                <h3>LUNINETS CITY</h3>
                <ul class="menu-main">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">PRODUCTS</a></li>
                    <li><a href="#">CURRENT SALES</a></li>
                    <li><a href="#">MEMBER+</a></li>
                </ul>
            </div>
            <ul class="menu-member">
                <li><a href="#">SIGN UP</a></li>
                <li><a href="#" class="header-login-a">LOGIN</a></li>
            </ul>
        </nav>
    </header>

    <section class="index-intro">
        <div class="index-intro-bg">
            <div class="wrapper">
                <div class="index-intro-c1">
                    <div class="video"></div>
                    <p>Один бизнесмен хотел жениться, но у него было три подружки, и он не знал какую из них выбрать. Решил их проверить: дал каждой по 1000 долларов. Одна потратила все деньги на себя, другая купила что-то для хозяйства, а третья вложила в дело и получила прибыль. Какую же из трех он выбрал? Ту, у которой грудь больше!</p>
                </div>
                <div class="index-intro-c2">
                    <h2>We make<br>professional<br>gear</h2>
                    <a href="#">FIND OUR GEAR HERE</a>
                </div>
            </div>
        </div>
    </section>

    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>SIGN UP</h4>
                <p>Don't have an account yet? Sign up here!</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                    <input type="text" name="email" placeholder="E-mail">
                    <br>
                    <button type="submit" name="submit">SIGN UP</button>
                </form>
            </div>
        </div class="index-login-login">
        <h4>LOGIN</h4>
        <p>Don't have an account yet? Sign up here!</p>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="username">
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <button type="submit" name="submit">LOGIN</button>
        </form>

    </section>
</body>

</html>