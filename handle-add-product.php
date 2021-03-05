<?php

require_once('functions.php');

if (isset($_POST['submit'])) {          //check for method 'post'
    //getting 'form names' in variables
    $username = $_POST['username'];
    $price = $_POST['price'];
    $description = $_POST['textarea'];

    $errors = []; // variable for collecting errors

    //validating username
    /*
        name rules
        name → required | string | min:5 | max:255
    */
    if (empty($username)) {
        $errors[] =  "username is required";
    } elseif (!is_string($username)) {
        $errors[] = "username must be string";
    } elseif (strlen($username) < 5) {
        $errors[] = "username minimum 5 chars";
    } elseif (strlen($username) > 225) {
        $errors[] = "username maximum 255 chars";
    }

    //validating price
    /*
        price rules
        price → required | number | min:0 
    */
    if (empty($price)) {
        $errors[] =  "price is required";
    } elseif (!is_numeric($price)) {
        $errors[] = "price must be number";
    }

    //validating decsription
    /*
        decsription rules
        description → optional | string 
    */
    if (empty($description)) {
    } elseif (!is_string($description)) {
        $errors[] = "description must be string";
    }

    //errors display 
    if (count($errors) != 0) {
        print_r($errors);
    } else if (count($errors) == 0) {
        echo "name is $username <br>";
        echo "price is $price <br>";
        echo "price after discount is " . getPriceWithDiscount($price) . "<br>";
        if (empty($description)) {
        } else {
            echo "description <br> $description <br>";
        }
    }
}
?>

<a href="add-product.php">Back to add product form</a>