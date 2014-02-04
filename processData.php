<?php

$filename = "./data.txt";
$newData = $_POST['newData'] . "\n";

if ($newData > 0) {
	file_put_contents($filename, $newData, FILE_APPEND);
}

//now fetch all data and display it
$lines = file($filename);

echo '<ul>';

foreach ($lines as $line) {
	echo "<li>$line</il>";
}

echo '</ul>';


?>