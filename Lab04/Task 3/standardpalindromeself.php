<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" />
 <meta name="description" content="Web application development"/>
 <meta name="keywords" content="PHP" />
 <meta name="author" content="Reyne Ilves" />
 <title>TITLE</title>
</head>
<body>
    <h1>Web Programming Form - Lab 4 Task 3 Extra Challenge.</h1>
    <form action = standardpalindromeself.php method = post>
    Enter String Data: <input type="text" name="palindrome" placeholder="String"><br>
        <input type="submit" value="Check for Perfect Palindrome">
    </form>

    <h2>LOGIN HERE.</h2>
    <h2>This is the same file name in the login branch.</h2>

    <?php 

if (isset ($_POST["palindrome"])){


     //strip_tags to remove html bugs.
     $pali = strip_tags(($_POST["palindrome"]));
     echo "</br>Word/Phrase entered:", $pali;

     
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
    
} else { // no input
echo "<p>Please enter from the input form.</p>";
}
        

//Comment for testing purposes

    ?>

</body>
</html>