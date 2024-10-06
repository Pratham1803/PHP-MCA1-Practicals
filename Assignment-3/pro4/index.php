<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 4 Login</title>
</head>
<body>
    <center>
    <!-- create a login form with username and password fields -->
     <form action="#" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Login">
        <input type="button" id="btnSignUp" name="btnSignUp" class="btn btn-primary" value="Signup" onclick="signup()"/>
    </form>
    </center>
    <script>
        function signup() {
            window.location.href = "signup.php";
        }
    </script>
</body>
<?php
    // validate the username and password
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require "validate.php";
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Validate username and password
        if (validator($username, $password)) {
            echo "Login successful";
        } else {
            echo "Invalid username or password.";
        }
    }
 
?>
</html>