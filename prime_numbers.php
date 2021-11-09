<?php

function prime_numbers($n){
$n;
$flag = 1;
$i = 2;
    if ($n <= 1) {
        return false;
    }
    for ($i; $i <= $n/2; $i++) {
        if ($n % $i == 0) {
            $flag = 0;
        }
        if ($flag == 0) {
            return false;
        }
    }
    return true;
}
?>