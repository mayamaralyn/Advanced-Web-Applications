<!DOCTYPE html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="Web Application Development :: Lab 1" />
<meta name="keywords" content="Web,programming" />
<title>Using if and while statements</title>
</head>
<body>
<?php
 include ("mathfunctions.php");
?>
<h1>Web Programming - Lab 3</h1>



<?php
    

    #if the form data exists obtain the form data, otherwise no input
        #if check if the number is a positive integer, else number is not positive
            #if it is a TRUE round number, factorial it, else number is not a round integer

    if (isset ($_GET["numero"])) { // check if form data exists
        echo "<p>The number you have entered is: ", $_GET["numero"],".</p>";
        $num = $_GET["numero"]; // obtain the form data
        if ($num > 0) { // check if $num is a positive number
            if ($num == round ($num)) { // check if $num is an integer
            echo "<p>", $num, "! is ", factorial ($num), ".</p>";
            } else { // number is not an integer
                echo "<p>Please enter an integer.</p>";
            }
        } else { // number is not positive
       echo "<p>Please enter a positive integer, or greater than zero. </p>";
        }
    } else { // no input
        echo "<p>There is no input.</p>";
    }
?>



</body>
</html>