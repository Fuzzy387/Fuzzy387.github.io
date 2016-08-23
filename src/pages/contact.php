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
    <div class="contact_form">
<form>
    <br>
    <fieldset>
    First name:<br>
    <input type="text" name="firstname"><br>
    Email:<br>
    <input type="email" name="email"><br>
    Message:<br>
    <textarea name="comment" form="usrform"></textarea><br>
    <input type="submit" value="Submit">
    </fieldset>
</form>
</div>

</body>
</html>