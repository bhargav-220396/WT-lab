<?php

$username = "Bunny's service";
$service = "Automation";

echo "Username is: $username.<br><br>";
echo "Service : $service.<br><br>";

echo "Length of the username: " .  strlen($username) ."<br><br>";
echo "Word count is: ". str_word_count($service) . "<br><br>";
echo "Reversing the username: ". strrev($username) ."<br><br>";

echo "Converting into uppper: ". strtoupper($username) ."<br><br>";

echo "Upper casing first words: " . ucfirst($username) ."<br><br>";
echo "Upper casing words: " . ucwords($username) ."<br><br>";

$cleanUsername = trim($username);
echo "Clean Username: $cleanUsername <br><br>";

echo "Position of service: ". strpos($username,"service")."<br><br>";

echo "Replaced the username : ". str_replace("automation","web Development" ,$service) ."<br><br>";;

echo " Comparing the strings: " . strcmp("Tech","TECH") . "<br><br>";

echo htmlspecialchars("<script>alert('hack')</script>") . "<br>";




