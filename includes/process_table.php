<?php

$query = "SELECT * FROM form_submits";
$results = $mysqli -> query($query) or die('Error: '.$mysqli -> error);
if ($results -> num_rows > 0) {

        while ($row = $results -> fetch_assoc()) {

        $value = $row['/*The table column here (You can repeat this line with a different variable e.g. $value 2, $value 3 etc and matching them with the respective table column)*/'];

        echo $value./*Concatenate the other variables ($value 1 etc) here*/'<br />';
        }
} else {
        echo 'No records found.';

}
?>
