<?php
// the message
$msg = "Hi James, Just checking if you are working or not";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("james.lane0424@gmail.com","Hows it going",$msg);
?>
