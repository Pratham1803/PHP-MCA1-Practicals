<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <h3>Hello User</h3><br /><br /><br>

    <p>Name: John Doe</p>
    <p>Email: john.doe@example.com</p>
    <p>Address: 123 Main St, Anytown, USA</p>

    <input type="button" id="btnRegistration" name="btnRegistration" class="btn btn-primary" value="Registration"
        onclick="reg()" />
    <input type="button" id="btnLogout" name="btnLogout" class="btn btn-primary" value="logout" onclick="logout()" />
    <script>
        function logout() {
            window.location.href = "index.php";
        }

        function reg() {    
            window.location.href = "registration.php";
        }
    </script>
</body>

</html>