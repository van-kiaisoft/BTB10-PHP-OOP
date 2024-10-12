<?php
function check_number($number) {
    if ($number%2 == 0) {
        return "số chẵn";
    }
    elseif ($number%2 == 1) {
        return "số lẻ";
    }
    else {
        return 0;
    }
}
$x = 10;
echo check_number($x);
?>