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
        <tr>
            <td><p>Welcome, <?php echo isset($_SESSION['full_name']) ? $_SESSION['full_name'] : 'Guest'; ?>!</p></td>
            <?php
                for ($i = 0; $i < 25; $i++) {
                    echo "<td></td>";
                }
            ?>
            <td><a href="logout.php" class="btn">Log Out</a></td>
        </tr>
        <tr>
            <td><br><h2> Let's Play with Math! </h2><br></td>
        </tr>
        <tr>
           <td>
                <h4><ins>Factorial (n!) - The Big Multiplyer!</ins></h4>
                <p style="text-align: justify;"> It is represented by the sign (!). When we encounter n! (known as ‘n factorial’)
                we say that a factorial is the product of all the whole numbers between 1 and n, where n must always be positive.</p><br>
                <p>Formula: <br> n (n - 1) (n - 2) .... 1 </p><br>
                <p>Examples:<br>
                    3! = 3 * 2 * 1 = 6 <br>
                    5! = 5 * 4 * 3 * 2 * 1 = 120<br>
                    7! = 7 * 6 * 5 * 4 * 3 * 2 * 1 = 5040 <br>
                    9! = 9 * 8 * 7 * 6 * 5 * 4 * 3 * 2 * 1 = 362 880</p><br>
            </td>
        </tr>
        <tr>
            <td>
                <h4><ins>Combination (<sup>n</sup>C<sub>r</sub>) - Pick 'n' Mix!</ins></h4>
                <p style="text-align: justify;"> It is also called <i>selections</i>. It correspond to the
                selection of things from a given set of things. Here we do not intend to
                arrange things. We intend to select them. We denote the number of unique
                r-selections or combinations out of a group of n objects by <sup>n</sup>C<sub>r</sub>.</p><br>
                <p>Formula: <br> C(n,r) = <sup>n</sup>C<sub>r</sub> = <sub>n</sub>C<sub>r</sub> =  n! / r!(n−r)!</p><br>
                <p> Examples:<br>
                    C(16,3) =  16! / 3!(16−3)! = 16! / 3! 13! = 560<br>
                    <sub>5</sub>C<sub>2</sub> =  5! / 2!(5−2)! = 5! / 2! 3! = 10<br>
                    <sup>9</sup>C<sub>4</sub> =  9! / 4!(9−4)! = 126 </p><br>
            </td>
            </td>
        </tr>
        <tr>
            <td>
                <h4><ins>Permutation (<sup>n</sup>P<sub>r</sub>) - Mix 'n' Match!</ins></h4>
                <p style="text-align: justify;">This is a different way of arranging objects in a
                definite order. It can also be expressed as the rearrangement of items in a linear
                order of an already ordered set. The symbol <sup>n</sup>P<sub>r</sub> is used to denote
                the number of permutations of n distinct objects, taken r at a time. </p><br>
                <p>Formula: <br> P(n,r) = <sub>n</sub>P<sub>r</sub> = <sup>n</sup>P<sub>r</sub> =  n! / (n−r)!</p><br>
                <p> Examples:<br>
                    P(10,2) =  10! / (10−2)! = 90<br>
                    <sub>7</sub>P<sub>5</sub> =  7! / (7−5)! = 2 520<br>
                    <sup>15</sup>P<sub>9</sub> =  10! / (10−9)! = 3 628 800 </p><br>
            </td>
        </tr>
        <tr>
            <td>
                <input type="button" class="btn" value="Take a Test" onclick="window.location.href='Test.html';">
            </td>
        </tr>
    </table>
</body>
</html>
