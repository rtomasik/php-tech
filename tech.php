#!/usr/bin/php -q
<?php
include_once("./funkcje.php");
//autoryzacja
$login="{\"username\":\"test\",\"password\":\"test\",\"rememberMe\":true,\"languageId\":\"pl\"}";
$get=GSTP("https://emodul.pl/login",$login);
//wybór modułu => 0
$select="{\"moduleIndex\":0,\"moduleStatus\":\"active\",\"controllerStatus\":\"active\"}";
$get=GSTP("https://emodul.pl/select_module",$select);
//pobieranie danych
$get=GST("https://emodul.pl/module_data");
$get=json_decode($get,true);
//wypluwanie danych
print_r($get);
?>