<?php


$remarks_pic = "FUB No: null / Excess amount: P99.00";
$remarks_hris = "2024-000150";

echo $excess_amt = substr($remarks_pic,(strpos($remarks_pic,"P")+1));


?>