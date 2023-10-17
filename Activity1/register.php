<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>IntegProg Act No. 1: Registration Form</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $email = $_POST['email'];
        $num = 0;

        function _alert($msg)
        {
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        if (trim($password) == trim($password2)) {
            $num += 1;
        }
        if (!empty($username)) {
            $num += 1;
        }

        if (!empty($password) && !empty($password2)) {
            $num += 1;
        }

        if (!empty($email)) {
            $num += 1;
        }
    }
    ?>
    <script>
        function registerForm() {
            let Username = document.getElementById("username").value;
            let Password = document.getElementById("password").value;
            let Password2 = document.getElementById("password2").value;
            let Email = document.getElementById("email").value;

            if (Password == Password2) {
                localStorage.setItem("username", Username);
                localStorage.setItem("password", Password);
                localStorage.setItem("email", Email);
                alert("Successfully Stored to Local Storage");
            } else {
                alert("Password does not match!");
            }
        }
    </script>

    <div class="register">
        <h1>REGISTRATION FORM</h1>
        <form onsubmit="registerForm()" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="username" placeholder="Username" id="username" required>
            <input type="email" name="email" placeholder="Email" id="email" required>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="password" name="password2" placeholder="Retype Password" id="password2" required>
            <input type="submit" value="Register">
        </form>
    </div>
</body>

</html>