<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="cute.css">
</head>
<body>
    <table>
        <?php
            include("C:/xampp/htdocs/Problem set/FINAL/config.php");

            if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($conn,$_POST['email']);
                $pass = mysqli_real_escape_string($conn,$_POST['password']);

                $result =  mysqli_query($conn, "SELECT * FROM accounts WHERE email='$email' AND pass='$pass'")
                    or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['full_name'] = $row['full_name'];
                    $_SESSION['valid'] = $row['email'];
                    $_SESSION['id'] = $row['Id'];
                    header("Location: homepage.html");
                    exit();
                }
                else{
                    $error_message = "Wrong username or password";
                }
            }
        ?>
        <tr>
            <th><h2>Log in</h2></th>
        </tr>
        <form action="" method="post">
        <tr> 
            <td><p>Email: </p></td>
        </tr>
        <tr>
            <td><input type="email" id="email" name="email" required></td>
        </tr>
        <tr>
            <td><p>Password:</p></td>
        </tr>
        <tr>
            <td><input type="password" id="password" name="password" required></td>
        </tr>
        <?php if(isset($error_message)) { ?>
        <tr>
            <td><p><?php echo $error_message; ?></p></td>
        </tr>
        <?php } ?>
        <tr>
            <td><input type="submit" name="submit" class="btn" value="Log in"></td>
        </tr>
        <tr>
            <td><p>Don't have account yet? <a href="Signup.php"> Sign Up Now</a></p></td>
        </tr>
        </form>
    </table>
</body>
</html>
