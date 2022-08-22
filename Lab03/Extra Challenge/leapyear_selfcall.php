<!DOCTYPE html>
<html>
<body>

<h1>Leap Year PHP</h1>


<form action = leapyear_selfcall.php method = get>
    Input Year: <input type="text" name="year" placeholder="0-4 digits"><br>
        <input type="submit">
    </form>


<?php

//    echo $_GET["year"];
    
    #if check if form exists, else there is no form data
        #if variable is an integer, else variable is not an integer
            #if variable length is 4 or less, continue, otherwise fail as not a valid year format
                #if variable is divided by both 100 and 400, it is a leap year. Else is is not a leap year.
    

    if (isset ($_GET["year"])) { // check if form data exists
        $num = $_GET["year"]; // obtain the form data

        $var_length = strlen((string)$num);

        if(is_numeric($num)){
            if($var_length <= 4) {
                if ($num % 4 ==0){
                    if ($num % 100 == 0 and $num % 400 == 0 ){
                        echo "The year you have entered, $num is a leap year.";
                    } else {
                        echo "The year you have entered, $num is not a leap year.";
                    }
                }else { 
                    echo "The year you have entered, $num is not a leap year.";
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
