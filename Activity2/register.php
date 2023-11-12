<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>IntegProg Act No. 1: Registration Form</title>
</head>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>IntegProg Act No. 1: Registration Form</title>
</head>

<body>
    <?php
    include('db_connection.php');

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

            // Insert user data into the database
            $insertSql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

            if ($conn->query($insertSql) === FALSE) {
                echo "Error inserting data: " . $conn->error;
            } else {
                _alert("Registration successful!");
            }
        } else {
            _alert("Please fill in all the fields.");
        }
    }
    ?>
    
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