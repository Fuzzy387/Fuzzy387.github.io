<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
<?php
        include $_SERVER['DOCUMENT_ROOT'].'/css/style.css';
?>
</style>
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/src/php/func.php';
    ?>
</head>
<body>
<?php
    template('header.php');
?>
    
<form>
    First name:<br>
    <input type="text" name="firstname"><br>
    Last name:<br>
    <input type="text" name="lastname"><br>
    Email:<br>
    <input type="email" name="email"<br>
    Message:<br>
    <input type="text" 
</form>
</body>
</html>