<?php
$school = "Welcome to Moat Academy";

echo "string length plus space character --".strlen($school)."<br>"; // string length plus space character.
echo "counts words --".str_word_count($school)."<br>"; // counts words
echo "counts words --".strrev($school)."<br>"; // reverses words
echo "return requested string position --".strpos($school, "Moat")."<br>"; //return requested string position
echo "Replace string ; use string to be replaced first ".str_replace("Welcome","You are welcome", $school)."<br>";
echo "For title case --".ucwords($school)."<br>";
echo "For upper case --".strtoupper($school)."<br>";
echo "For upper case --".strtolower($school)."<br>";
echo "To repeat --".str_repeat("winner ", 15 )."<br>"; // word to repeated , number of times to repeat;
echo "To compare strings; returns '0' if they match and '1' if they don't. NB: it is case sensitive   --".strcmp("Welcome Moat", "Welcome Moat")."<br>";
echo "Displays part of a string; Syntax(string,start,length) --".substr("Welcome to moat", 6)."<br>";
echo "Displays part of a string; Syntax(string,start,length) --".substr("Welcome to moat", 0,10)."<br>";
echo "To trim white spaces --".trim($school)."<br>";


//extract John Bull
$sentence = "The Footballer, John Bull goes to stadium everyday.";
echo "For upper case --".strtoupper($sentence)."<br>";
echo "Displays part of a string; Syntax(string,start,length) --".substr($sentence, 16, 9)."<br>";

date_default_timezone_set("Africa/Lagos"); // sets to your preferred location.
echo date('d/m/Y')."<br>";
echo "year with two digits".date('d/m/y')."<br>";
echo "Day of week --".date('l')."<br>"; //Day of week
echo "Write date in full --".date('l F dS, Y')."<br>";
echo "hour minute seconds time; am or pm --".date('h:i:sa')."<br>";


 ?>
