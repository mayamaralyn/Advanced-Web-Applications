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
    <h1>Web Programming - Lab 4 Task 1</h1>

    <?php 
        //echo $_POST["form"];
    ?>

<?php

    if (isset ($_POST["form"])){
        $str = $_POST["form"];
        $pattern = "/^[A-Za-z ]+$/";    //initialise the pattern (user decides)
        if (preg_match($pattern, $str)) { // check if $str with regular expression
            $ans = ""; // initialise variable for the answer
            $len = strlen($str); // obtain length of string $str
            //echo strlen($str);
 
            for ($i = 0; $i < $len; $i++) { // checks all characters in $str
                //echo $str; for test, loops 4 times (strlen==4)
                $letter = substr ($str[$i], 0, 1); // extract 1 char using substr
                // check using strops, is_numeric is used as strops returns a number
                // (position) if found, and false otherwise
                if ((strpos ("AEIOUaeiou", $letter)) === false){
                $ans = $ans . $letter; // concatenate letter to answer
                }
            }
            // generate answer after all letters are checked
            echo "<p>The word with no vowels is ", $ans, ".</p>";
        } else { // string contains invalid characters
        echo "<p>Please enter a string containing only letters or space.</p>";
        }
    } else { // no input
    echo "<p>Please enter string from the input form.</p>";
    }
?>
</body>
</html>