<?php

    // variable scope

    // local vars

    function myFunc() {
        $price = 10;
        echo $price;
    }

    // myFunc();
    // echo $price;


    function myFuncTwo($age) {
       echo $age;
    }

    // myFuncTwo(25);
    // echo $age;

    // global variables

    $name = 'mario';

    // function sayHello() {
    //     global $name;
    //     $name = 'yoshi';
    //     echo "hello $name";
    // }

    // sayHello();
    // echo $name;

    function sayBye(&$name) {
        $name = 'wario';
        echo "bye $name";
    }

    sayBye($name);
    echo $name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>
    
</body>
</html>