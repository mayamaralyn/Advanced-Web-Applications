<html>
<body>

<h1>Task 3: Using Expression and looking up built in functions</h1>


<?php
//Conditional operator to determine if a variable contains a number 
//and whether the number is even

//$variable = $_POST["number"];
//echo "<p>The number you have entered is: ", $variable,".</p>";



//print_r($_GET);

$variable = (float)$_GET["numeric"];
//echo gettype($variable), "</br>";


if ($variable == is_float($variable)) {
    $result = round($variable);
    if($result % 2 ==0){
        echo "The (rf) variable $result is an even number.";
    }
    else{
        echo "The (rf) variable $result is an odd number.";
    }

} elseif ($variable == is_numeric($variable)) {
    if($variable % 2 ==0){
        echo "The variable $variable is a even numeric";
    }
    else{
        echo "The variable $variable is an odd numeric";
    }
    
} else {
    echo "<p>The variable $variable is a string</p>";
}

//echo "<p>The number you have entered is: ", $_POST["number"],".</p>";


//The variable 4 contains an even number.


/*

if ($float == is_float($float)) {
    $result = round($float);
    echo "<p>", $result, "</p>";
  } else {
    echo "Not numeric";
}


function isNumeric($digits){
    (is_numeric($digits)) 
    ? $result = "$digits is numeric."
    : $result = "$digits is not numeric.";
echo "<p>", $result, "</p>";
}


*/

?>


</body>
</html>