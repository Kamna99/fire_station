<?php
require('textlocal.class.php');

$textlocal = new Textlocal(false,false,'xbKg3pSSlcc-h60Yd1mck69A3FhRGTDM0IvFRkdIHi');
$num='9930564305';
$num1='9930220893';
$numbers = array($num,$num1);
$sender = 'TXTLCL';
$message = 'Hey Shruti';

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>