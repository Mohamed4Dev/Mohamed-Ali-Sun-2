<?php
/*
    Q2
    and 5% for prices greater than or equal 1000
    write a function getPriceWithDiscount that takes the price 
    and returns the price after discount.
    discount is 10% for prices less than 1000
/*

require_once('functions.php');            // required for getPriceWithDiscount() function

$price = 100;                                 //value one
$price1 = 1000;                               //value two
$price2 = 10000;                              //value three
echo  getPriceWithDiscount($price) . "<br>";  //test case one
echo  getPriceWithDiscount($price1) . "<br>"; //test case two
echo  getPriceWithDiscount($price2) . "<br>"; //test case three
