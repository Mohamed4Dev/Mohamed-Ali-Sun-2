<?php
/*
    Q1
    write a function getNumMatches that searches for a word in an array of words
    and returns the number of matches (repetitions).
*/

require_once('functions.php'); // required for getNumMatches() function

$word = 'ali';
$array = ['mohamed', 'ali', 'sabry', 'ali', 'yousef', 'ali', 'elhalag', 'ali'];
$numMatched = getNumMatches($word, $array);
echo $numMatched;
