<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 3 Login</title>
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
        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);
        
        // Validate username and password
        if ($username == "admin" && $password == "admin") {
            // Redirect to the welcome page
            header("location: profile.php");
        } else {
            echo "Invalid username or password.";
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 
?>
</html>