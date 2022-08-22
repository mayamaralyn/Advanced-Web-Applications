<!DOCTYPE html>
<html>
<body>

<h1>Leap Year PHP</h1>


<?php

//    echo $_GET["year"];
    
    #if check if form exists, else there is no form data
        #if variable is an integer, else variable is not an integer
            #if variable length is 4, continue, otherwise fail as not a year
    

    if (isset ($_GET["year"])) { // check if form data exists
        echo "<p>The year you have entered is: ", $_GET["year"],".</p>";
        $num = $_GET["year"]; // obtain the form data

        $var_length = strlen((string)$num);

        if(is_numeric($num)){
            echo "<p>The variable: ", $num,", is numeric</p>";
            if($var_length <= 4) {
                echo "<p>Integer index length is four or less</br></p>";
                if ($num % 4 ==0){
                    echo "<p>Number is divisible by four...</br></p>";
                    if ($num % 100 == 0 and $num % 400 == 0 ){
                        echo "$num, <b>is a Leap Year</b> as it is divisible by both 100 AND 400.";
                    } elseif ($num % 100 == 0) {
                        echo "$num, <b>Not a Leap Year</b> as it needs to be divisible by both 100 AND 400.";
                    }
                } else { 
                    echo "$num, <b>is Not a Leap Year</b> as it is not divisible by four";
                }
            } else {
                echo "Please type a valid Year Format (0-4 digits).";
            }    
        }
        else { // no input
            echo "<p>The variable: ", $num,", is not an integer.</p>";
        }


    } else { // no input
        echo "<p>There is no form data.</p>";
    }


?>

</body>
</html>
