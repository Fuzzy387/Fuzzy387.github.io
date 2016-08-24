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
        <h2 class="contactformhead">Actium Contact Form</h2>     
<form>
    <br>
    <fieldset class="contactfield">
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
<br>
</div>
    <fieldset class="contactinfo">
    <h3>Contact Info</h3>
    <p>Mobile: 021123456</p>
    <p>Landline: 1234567</p>
    <p>Email: example@domain.com</p>
    </fieldset>
</body>
</html>