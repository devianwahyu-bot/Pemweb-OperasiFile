<?php
$myFile = "testFile.txt";
$fh = fopen($myFile, 'r');
while (!feof($fh)) {
    $theData = fgets($fh);
    echo $theData . "<br>";
}
fclose($fh);
