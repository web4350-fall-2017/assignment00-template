<?php

function DoWhileLoop() {
    $result = "";
    $i = 0;
    do {
        $result .= "Value of i is " . $i++ . PHP_EOL;
    } while($i <= 10);
    return $result;
}

function ForLoop() {
    $result = "";
    for ($i = 0; $i <= 10; $i++) {
        $result .= "Value of i is " . $i . PHP_EOL;
    }
    return $result;
}
