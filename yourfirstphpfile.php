<?php

    define('NAME', 'Yoshi');

    // $name = "Yoshi";
    $age = 30;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my First PHP file</title>
</head>
<body>

    <h1>User Profile Page</h1>
    <div><?php echo NAME; ?></div>
    <div><?php echo $age; ?></div>
</body>
</html>