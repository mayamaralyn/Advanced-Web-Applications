<h1>Task Two: Experimenting on arrays</h2>


<?php

$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");


echo "The Days of the week in English are: <br>";

foreach($days as $daily){
    echo "$daily ";
} 

echo "<br><br>";

$frenchdays = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");


echo "The Days of the week in French are: <br>";

for ($x = 0; $x <= 6; $x+=1) {
    $days[$x] = $frenchdays[$x];
    echo " $days[$x]";
}


//Count
echo "<p>Days of the week has ",
count($days), " days. </p>";




?>