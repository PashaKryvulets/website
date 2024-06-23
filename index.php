<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasha Kryvulets</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <nav>
            <div class="wrapper">
                <div class="logo">Pasha Kryvulets</div>
                <ul class="menu-main">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">PRODUCTS</a></li>
                    <li><a href="#">CURRENT SALES</a></li>
                    <li><a href="#">MEMBER+</a></li>
                </ul>
                <ul class="menu-member">
                    <?php
                    if (isset($_SESSION["userid"])) {
                    ?>
                        <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
                        <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
                    <?php
                    } else {
                    ?>
                        <li><a href="#">SIGN UP</a></li>
                        <li><a href="#" class="header-login-a">LOGIN</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="wrapper">
                <div class="hero-content">
                    <img src="img\innowise_group_whitelogo.jpg" alt="Innowise Group Logo" class="hero-image">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mollis dui a leo sagittis tempor. Praesent ante ante, eleifend eu quam vel, rutrum egestas purus.</p>
                    <a href="#" class="cta-btn">FIND OUR GEAR HERE</a>
                </div>
                <div class="hero-text">
                    <h1>We make<br>professional<br>gear</h1>
                </div>
            </div>
        </section>

        <section class="forms">
            <div class="wrapper">
                <div class="signup">
                    <h4>SIGN UP</h4>
                    <p>Don't have an account yet? Sign up here!</p>
                    <form action="includes/signup.inc.php" method="post">
                        <input type="text" name="uid" placeholder="Username">
                        <input type="password" name="pwd" placeholder="Password">
                        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                        <input type="text" name="email" placeholder="E-mail">
                        <button type="submit" name="submit">SIGN UP</button>
                    </form>
                </div>

                <div class="login">
                    <h4>LOGIN</h4>
                    <p>Already have an account? Log in here!</p>
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="uid" placeholder="Username">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="submit">LOGIN</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

</body>

</html>