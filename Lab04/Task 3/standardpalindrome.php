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
    <h1>Web Programming - Lab 4 Task 3</h1>

    <?php 

        //strip_tags to remove html bugs..
        $pali = strip_tags(($_POST["palindrome"]));
        echo "Word/Phrase entered:", $pali;

        
        //$palinew = preg_replace('/[^a-z0-9]+/i', " ", $pali);

        //removing punctuation and whitespace
        $palinew = strtolower(str_replace(array(":","'","/",'"',","," "), "", $pali));

        echo "<p>Word/Phrase with punctuation removed: $palinew</p>";

        //reversing the string
        $palirev = strrev($palinew);

        //echo $palinew, "</br>";
        //echo $palirev, "</br>";


        if (strcmp($palinew, $palirev) == 0){
            
            echo "The text you entered, $pali, is a perfect palindrome.";

        }
        else{
            echo "The text you entered, $pali, is NOT a perfect palindrome.";
        }
        



    ?>

</body>
</html>