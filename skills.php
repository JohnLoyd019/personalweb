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
                        <a href="index.php" class="nav__link">
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
                        <a href="skills.php" class="nav__link active-link">
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

        
   
        <!--=============== SKILLS ===============-->
        <section class="skills section" id="skills">
            <span class="section__subtitle">Skills</span>
            <h2 class="section__title">My Experience</h2>

            <div class="skills__container container grid">
                <div class="skills__content">
                    <h3 class="skills__title">Frontend Developer</h3>

                    <div class="skills__box">
                        <div class="skills__group">
                            <div class="skills__data">
                                <i class='bx bxl-html5'></i>

                                <div>
                                    <h3 class="skills__name">HTML</h3>
                                </div>
                            </div>
                            <div class="skills__data">
                                <i class='bx bxl-css3'></i>

                                <div>
                                    <h3 class="skills__name">CSS</h3>
                                </div>
                            </div>
                            <div class="skills__data">
                                <i class='bx bxl-javascript'></i>

                                <div>
                                    <h3 class="skills__name">JavaScipt</h3>
                                </div>
                            </div>
                        </div>
                        <div class="skills__group">
                            <div class="skills__data">
                                <i class='bx bxl-bootstrap'></i>

                                <div>
                                    <h3 class="skills__name">Bootstrap</h3>
                                </div>
                            </div>
                    

                            <div class="skills__data">
                                <i class='bx bxl-react'></i>

                                <div>
                                    <h3 class="skills__name">React</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>
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
                <a href="https://www.instagram.com/jlriveraa_19" target="_blank" class="footer__social-link">
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