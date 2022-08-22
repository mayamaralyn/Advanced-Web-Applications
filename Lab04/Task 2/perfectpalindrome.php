<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" />
 <meta name="description" content="Web application development"/>
 <meta name="keywords" content="PHP" />
 <meta name="author" content="Your Name" />
 <title>TITLE</title>
</head>
<body>
    <h1>Web Programming - Lab 4 Task 2</h1>

    <?php 

        $pali = strtolower($_POST["palindrome"]);
        echo "Word entered: ", $pali, "</br>";

        $palirev = strrev($pali);
        echo "Word reversed: ", $palirev, "</br>";

        if (strcmp($pali, $palirev) == 0){
            
            echo "The text you entered, $pali, is a perfect palindrome.";

        }
        else{
            echo "The text you entered, $pali, is NOT a perfect palindrome.";
        }




    ?>

</body>
</html>