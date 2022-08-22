<h2>Task One</h2>
<?php

$marks = [85,85,95];
 
$marks[1] = 90;

echo "<p>Second array value altered: $marks[1] </p><br>";


#Printing the array
$zero = 0;

foreach ($marks as $value){
    echo "$value <br>";
    $zero = $value + $zero;
}

echo "<p>Three numbers added are: $zero</p>  <br>";

$ave = array_sum($marks) / count($marks);
echo "<p>The average of the array is : $ave</p>";


//($average=>50)
//? $status = "PASSED."
//: $status = "FAILED" ;


($ave >= 50)
? $status = "PASSED."
: $status = "FAILED.";
echo "<p>", $status, "</p>";

echo "<p>The average score is $ave. You $status</p>";

?>