<?php

$now = time(); // or your date as well
$your_date = strtotime("2023-01-10");
$datediff = $now - $your_date;

echo round($datediff / (60 * 60 * 24));

 

echo "<hr/>";
 
  
echo stripos(strtoupper("WALK IN/APPLICANT BCC-CAT"), 'WALK'); 

$string = "WALK IN/APPLICANT BCC-CAT";
$character = "WALK";
 
if (strpos($string, $character) !== false) {
    echo "Character '$character' found in the string.";
} else {
    echo "Character '$character' not found in the string.";
}

?>