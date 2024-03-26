<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="cute.css">
</head>
<body>
    <table>
        <?php
            include("C:/xampp/htdocs/Problem set/FINAL/config.php");

            if(isset($_POST['submit'])){
                $full_name = $_POST['full_name'];
                $email = $_POST['email'];
                $pass = $_POST['password'];

                $verify_query = mysqli_query($conn, "SELECT email FROM accounts WHERE email = '$email'");
                
                if ($verify_query === false) {
                    // Handle query execution error
                    die("Error: " . mysqli_error($conn));
                }
                elseif (mysqli_num_rows($verify_query) != 0){
                    $message = "Email is already used. Try another";
                }
                else{
                    mysqli_query($conn, "INSERT INTO accounts(full_name,email,pass)
                    VALUES ('$full_name','$email','$pass')") or die("Error occurred");

                    $message = "New Account successfully added!";
                }
            }
        ?>
        <tr>
            <th><h2>Sign Up</h2></th>
        </tr>
        <form action="" method="post">
            <tr>
                <td><p>Full Name:</p></td>
            </tr>
            <tr>
                <td><input type="text" id="full_name" name="full_name" required></td>
            </tr>
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
            <tr>
                <td><?php if(isset($message)) echo "<p>$message</p>"; ?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" class="btn" value="Sign up">
                </td>
            </tr>
            <tr>
                <td colspan="2"> Already have an account? <a href="Login.php"> Log in Now</a> </td>
            </tr>
        </form>
    </table>
</body>
</html>
