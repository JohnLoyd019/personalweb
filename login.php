<?php
if (isset($_POST['Login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $servername = "localhost"; // Change this to your database server
        $username = "id21967558_rivera_121902"; // Change this to your database username
        $dbpassword = "Rivera_121902!"; // Change this to your database password
        $dbname = "id21967558_logregis"; // Change this to your database name
    
        $conn = new mysqli($servername, $username, $dbpassword, $dbname);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Prepare and execute SQL statement to retrieve user by email
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
    
        $result = $stmt->get_result();
    
        // Check if user exists
        if ($result->num_rows == 1) {
            // Fetch user data
            $user = $result->fetch_assoc();
            
            // Verify the password
            if ($password == $user["password"]) {
                session_start();
                $_SESSION["user"] = $user;
                header("Location: index.php");
                exit(); // Ensure script execution stops after redirection
            } else {
                echo "<div class='alert alert-danger'> Password does not match $password $user</div>";
            }
        } else {
            echo "<div class='alert alert-danger'> Email does not exist </div>";
        }
    
        // Close statement and connection
        $stmt->close();
        $conn->close();
    }   
    ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>

body {
    background-color: hsla(219, 48%, 8%, 1); /* Applied your HSLA color */
                /* Rest of your styles */
        }

        header {
            background-color: #E94057;
            padding: 10px 0;
            color: white;
        }


        header nav {
            display: flex;
            justify-content: flex-end;
            margin-right: 40px;
        }

        header nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            gap: 30px;
        }

        header nav ul li {
            display: inline;
        }

        header nav ul li a {
            color: white;
            font-weight: 20px;
            font-family: ;
            text-decoration: none;
        }
#loginForm {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color:#E94057;
    padding: 20px;
    height: 400px;
    width: 350px;
    border-radius: 20px;
}

#loginForm form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

#loginForm input {
    height: 20px;
    margin-top: 50px;
    border-radius: 5px;
    width: 200px;
    padding: 10px;
    background-color: whitesmoke;
    border: 1px solid black;
}

#loginForm button {
    margin-top: 10px;
    border-radius: 5px;
    padding: 10px 20px;
    color: black;
    border: black;
    cursor: pointer;
}


    </style>
</head>
<body>
<form action="login.php" method="post">
<div id="loginForm">
        <input type="text" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" name="Login">Login</button>
        <div><p style="color: black;">Not Registered yet? <a href="register.php" style="color: black;"> Registration Here</a></p></div>

        </div>

    </form>
</div>
</body>
</html>