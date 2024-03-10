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
            <a href="index.html" class="nav__logo">John Loyd Rivera</a>
            
            <?php
                if (isset($_SESSION["user"])) {
                    echo "<a href='logout.php' class='nav__logo'>Logout</a>";
                }
            ?>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.html" class="nav__link">
                            <i class='bx bx-home-alt'></i>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="about.html" class="nav__link">
                            <i class='bx bx-user'></i>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="education.html" class="nav__link">
                            <i class='bx bxs-graduation'></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="achievements.html" class="nav__link">
                            <i class='bx bx-trophy'></i> 
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="skills.html" class="nav__link">
                            <i class='bx bx-book'></i>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="work.html" class="nav__link">
                            <i class='bx bx-briefcase'></i>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="contact.html" class="nav__link active-link">
                            <i class='bx bx-message-square-dots'></i>
                        </a>
                    </li>
                </ul>
            </div>

            
        </nav>
    </header>

        <!--=============== CONTACT ===============-->
        <section class="contact section" id="contact">
            <span class="section__subtitle">Complete Information
            </span>
            <h2 class="section__title">My Contact</h2>

            <div class="contact__container container grid">

                    <div class="contact__info">
                        <div class="contact__card">
                            <i class='bx bx-mail-send contact__card-icon'></i>
                            <h3 class="contact__card-title">Email</h3>
                            <span class="contact__card-data">riverajohnloyd5@gmail.com
                            </span>

                            <a href="riverajohnloyd5@gmail.com" target="_blank" class="contact__button">
                                Send Email
                                <i class='bx bx-right-arrow-alt contact__button-icon'></i>
                            </a>
                        </div>
                      
                        <div class="contact__card">
                            <i class='bx bxl-instagram contact__card-icon'></i>
                            <h3 class="contact__card-title">Instagram</h3>
                            <span class="contact__card-data">@jlriveraa_19</span>

                            <a href="https://www.instagram.com/jlriveraa_19/_" target="_blank" class="contact__button">
                                Send Message
                                <i class='bx bx-right-arrow-alt contact__button-icon'></i>
                            </a>
                        </div>
                    </div>
                <div class="contact__content">
                    <h3 class="contact__title">Advice</h3>

                    <form action="https://formspree.io/f/mjvnowwe" class="contact__form" name="contact" method="POST" data-netlify="true">
                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">Name</label>
                            <input type="text" placeholder="Example: Loyd" class="contact__form-input">
                        </div>
                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">Email</label>
                            <input type="email" name="email" placeholder="yourname@example.com" class="contact__form-input">
                        </div>
                        <div class="contact__form-div contact__form-area">
                            <label for="" class="contact__form-tag">Contact</label>
                            <textarea name="message" cols="30" rows="10" placeholder="Write Message"
                                class="contact__form-input "></textarea>
                        </div>

                        <button class="button" type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer">
        <div class="footer__container container">
            <h1 class="footer__title">John Lloyd</h1>
    
            <ul class="footer__list">
                <li>
                    <a href="#about" class="footer__link">About</a>
                </li>
                <li>
                    <a href="#work" class="footer__link">Projects</a>
                </li>
            </ul>
    
            <ul class="footer__social">
                <a href="https://github.com/JohnLoyd019" target="_blank" class="footer__social-link">
                    <i class='bx bxl-github'></i>
                </a>
                <a href="discordapp.com/users/.loydiee" target="_blank" class="footer__social-link">
                    <i class='bx bxl-discord'></i>
                </a>
                <a href="https://www.instagram.com/kibieptr_/" target="_blank" class="footer__social-link">
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