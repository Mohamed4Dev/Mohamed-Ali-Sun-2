<?php
/*
    Q3
    form inputs:
    name: text
    description: textarea
    price: number
    form is submitting a POST request to script handle-add-product.php
    the handle file contains the following:
    - validate the inputs by rules
    name → required | string | min:5 | max:255
    description → optional | string
    price → required | number | min:0
    - if not valid then display errors
    else then print data (name - description if exists - price -
    price after discount using the
    function getPriceWithDiscount from question 2)
    write a script add-product.php containing a form to add new product
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="handle-add-product.php" method="post">
        <input type="text" placeholder="user name" name="username">
        <br><br>
        <input type="number" placeholder="price" name="price">
        <br><br>
        <textarea placeholder="description" name="textarea"></textarea>
        <br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>