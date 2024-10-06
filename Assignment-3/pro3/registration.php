<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <center>
        <form action="#" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>

            <label for="username">Name:</label><br>
            <input type="text" id="txtName" name="txtName" required><br>

            <label for="username">City:</label><br>
            <input type="text" id="txtCity" name="txtCity" required><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" value="Create Account">
            
            <input type="button" id="btnLogOut" name="btnLogOut" class="btn btn-primary" value="Log Out"
                onclick="logout()" />
            <input type="button" id="btnProfile" name="btnProfile" class="btn btn-primary" value="profile"
                onclick="profile()" />
        </form>
    </center>
    <script>
        function logout() {
            window.location.href = "index.php";
        }
        function profile() {
            window.location.href = "profile.php";
        }
    </script>
</body>

</html>