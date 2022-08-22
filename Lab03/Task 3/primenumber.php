<!DOCTYPE html>
<html>
<body>

<h1>Prime Number PHP</h1>


<?php

$var = $_GET["prime"];

echo "<p>The number you have entered is: ", $var,".</p>";

//$var = 7;
$f = 0;


//$isPrime = true;

#check it is numeric
if(is_numeric($var)){

    #start the loop by 2 as each prime number is divisible by 1
    for($i =2; $i<$var;$i++)
    {
        if($var%$i==0)
        #if this condition is true, change f to 1 and end loop
        #if $var modulus i is zero, it means number is divisible by i and it is not prime
        {
            $f=1;
            isPrime($f);
            break;

        }
        else
        #otherwise the number is prime
        {   
            echo isPrime($f);
            break;
        }
    }

}
#or if the variable is not numeric
else{
    echo "Not an integer..";
}


function isPrime($numb){
    if($numb==0)
    {
        echo "Number is Prime";
    }
    else
    {
        echo "Number is Not Prime";
    }
}

?>

</body>
</html>
