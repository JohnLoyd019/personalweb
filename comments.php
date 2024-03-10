<?php
session_start(); // Start the session

$servername = "localhost"; // Change this to your database server
$username = "id21967558_rivera_121902"; // Change this to your database username
$password = "Rivera_121902!"; // Change this to your database password
$dbname = "id21967558_logregis"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the user pressed the submit button
if (isset($_POST["submit_comment"])) {
    // Check if the user is not logged in
    if (!isset($_SESSION["user"])) {
        header("Location: login.php"); // Redirect to the login page
        exit(); // Stop executing the rest of the code
    }

    // User is logged in, process the comment submission
    $comment = $_POST["comment"];
    $user_id = $_SESSION["user"];

    // Insert the comment into the database
    $sql = "INSERT INTO comments (user_id, comment) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "is", $user_id["id"], $comment);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

$sql = "SELECT comments.*, users.first_name FROM comments
        LEFT JOIN users ON comments.user_id = users.id
        ORDER BY comments.created_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>

body {
    background-color: hsla(219, 48%, 8%, 1); /* Applied your HSLA color */
                /* Rest of your styles */
        }

        .comments-container {
            margin-top: 20px;
        }

        .card {
            margin-bottom: 10px;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .card-text {
            color: white;
        }

        .text-muted {
            color: #b1d4ed;
        }
        
        .center-submit {
            display: flex;
            justify-content: center;
            margin-top: 20px; /* Adjust as needed */
        }
        
        .comments-container {
            margin-top: 20px;
            height: 300px; /* Adjust the height as needed */
            overflow-y: auto; /* Add a vertical scrollbar */
        }
        
        #comment {
            margin: auto;
            width: 100%;
            height: 8vh;
            justify-content: center;
        }
        
        
        </style>
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
                        <a href="index.php" class="nav__link ">
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
                        <a href="comments.php" class="nav__link active-link">
                            <i class='bx bx-message-square-dots'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <br><br><br><br><br><br><br><br>
<div id="comment">
<div class="container">
    <h2 style="color: white;">Leave a Comment</h2>
    <form action="comments.php" method="post">
        <div class="mb-3">
            <label for="comment" class="form-label">Your Comment:</label><br>
            <input type="text" class="form-control" id="comment" name="comment" rows="3"></input>
        </div>
        <div class="center-submit">
            <button type="submit" class="btn btn-primary" name="submit_comment">Submit</button>
        </div>
    </form>

    <h2 style="color: white;">Comments</h2>
    <div class="comments-container">
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='card'>";
                echo "<div class='card-body'>";
                echo "<p class='card-text'>{$row['comment']}</p>";
                echo "<p class='card-text'><small class='text-muted'>Posted on {$row['created_at']} Posted by {$row['first_name']}</small>";
                echo "</p>";
                echo "</div>";
                echo "</div>";
            }
        ?>
    </div>
</div>

<footer class="footer">
        <div class="footer__container">
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