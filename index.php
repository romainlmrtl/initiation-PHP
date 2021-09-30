<?php
    extract($_POST);
    $a??=0;
    $b??=0;
    $op??="+";
    $r=eval ("return $a$op$b;");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        body {
            text-align: center;
        }
        
        
        form {
            display: inline-block;
            background-color: black;
            display: center;
            text-align: center;
            margin-top: 300px;
            padding: 10px;
        }
    </style>
    <title>Document</title>
</head>
<body>
<form method="post"> 
    <input type="number" name="a" value="<?=$a?>">
    <input type="number" name="b" value="<?=$b?>">
    <input type="submit" name="op" value="+">
    <input type="submit" name="op" value="-">
    <input type="submit" name="op" value="*">
    <input type="submit" name="op" value="/">
    <input type="submit" name="op" value="^">
    <hr>
    <input type="text" value="<?=$r?>" disabled>
</form>
</body>
</html>


