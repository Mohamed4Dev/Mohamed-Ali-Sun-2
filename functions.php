<?php
//function Q1
function getNumMatches($word, $array)
{
    $numMatched = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $word) {
            $numMatched++;
        }
    }
    return $numMatched;
}

//function Q2
function getPriceWithDiscount($price)        // function name and argument
{
    if ($price < 1000) {                     //condition one
        $priceAfterDiscount = $price * 0.90; // process based on condition one
    } elseif ($price >= 1000) {              //condition two
        $priceAfterDiscount = $price * 0.95; // process based on condition two
    }
    return $priceAfterDiscount;              //output of the function
}
