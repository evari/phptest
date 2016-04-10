<?php

$num10 = $_GET["num1"];
$num20 = $_GET["num2"];
$seconds = $num10 * 8;
$minutes = $seconds / 60;
$total = $minutes / $num20;
$hours = $total / 60;

$displaytotal = number_format($total);
$displayhours = number_format($hours);


echo "<h3>Download Calculator</h3><p>";



if ( $total > 180 ) {
	echo "A " . $num10 . " Megabyte file will take around " . $displayhours . " hours to transfer with a " . $num20 . "Mbps connection.";
} else {
	echo "A " . $num10 . " Megabyte file will take around " . $displaytotal . " minutes to transfer with a " . $num20 . "Mbps connection.";
}


 ?>
