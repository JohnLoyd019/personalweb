<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <!--=============== META ===============-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!--=============== TITLE WEB ===============-->
    <title> John Loyd Rivera | Portfolio </title>
</head>

<body>
    
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">John Loyd Rivera</a>
            
            <?php
                if (isset($_SESSION["user"])) {
                    echo "<a href='logout.php' class='nav__logo'>Logout</a>";
                }
            ?>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link active-link">
                            <i class='bx bx-home-alt'></i>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="about.php" class="nav__link">
                            <i class='bx bx-user'></i>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="education.php" class="nav__link">
                            <i class='bx bxs-graduation'></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="achievements.php" class="nav__link">
                            <i class='bx bx-trophy'></i> 
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="skills.php" class="nav__link">
                            <i class='bx bx-book'></i>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="work.php" class="nav__link">
                            <i class='bx bx-briefcase'></i>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="comments.php" class="nav__link">
                            <i class='bx bx-message-square-dots'></i>
                        </a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== HOME ===============-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <span class="home__greeting">
                        Hello, I'm
                    </span>
                    <h1 class="home__name">
                        John Loyd Rivera
                    </h1>
                    <h3 class="home__education">
                       Bachelor of Science in Inforamtion Technology With Specialization in Mobile and Internet Technology Student
                    </h3>

                    <div class="home__buttons">
                        <a href="about.php" class="button">About me</a>
                    </div>
                </div>

                <div class="home__quote">
                </div>

                <div class="home__social">
                    <a href="discordapp.com/users/.loydiee" class="home__social-link">
                        <i class='bx bxl-discord'></i>
                    </a>
                    <a href="https://github.com/JohnLoyd019" class="home__social-link">
                        <i class='bx bxl-github'></i>
                    </a>
                    <a href="https://www.instagram.com/jlriveraa_19/_" class="home__social-link">
                        <i class='bx bxl-instagram'></i>
                    </a>
                    <a href="https://www.facebook.com/johnlyod.rivera" class="home__social-link">
                        <i class='bx bxl-facebook'></i>
                    </a>
                </div>
            </div>
        </section>
       


        

    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer">
        <div class="footer__container container">
            <h1 class="footer__title">John Loyd</h1>

            <ul class="footer__list">
                <li>
                    <a href="about.php" class="footer__link">About</a>
                </li>
                <li>
                    <a href="work.php" class="footer__link">Projects</a>
                </li>
            </ul>

            <ul class="footer__social">
                <a href="https://github.com/JohnLoyd019" target="_blank" class="footer__social-link">
                    <i class='bx bxl-github'></i>
                </a>
                <a href="discordapp.com/users/.loydiee" target="_blank" class="footer__social-link">
                    <i class='bx bxl-discord'></i>
                </a>
                <a href="https://www.instagram.com/jlriveraa_19?target="_blank" class="footer__social-link">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="https://www.facebook.com/johnlyod.rivera" class="footer__social-link">
                    <i class='bx bxl-facebook'></i>
                </a>
            </ul>

            <span class="footer__copy" id="copyright"></span>
        </div>
    </footer>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="./assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="./assets/js/swiper-bundle.min.js"></script>

    <!--=============== MIXITUP FILTER ===============-->
    <script src="./assets/js/mixitup.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="./assets/js/main.js"></script>

    <!--=============== SCRIPT TAMBAHAN FOOTER ===============-->
    <script>
        const copyrightSpan = document.getElementById("copyright");
        
        const currentYear = new Date().getFullYear();
        
        copyrightSpan.innerHTML = `&copy; John Loyd Rivera ${currentYear}. All Rights reserved.`;
    </script>
</body>

</html>