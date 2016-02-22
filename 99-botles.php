<?php
function sing($bottles) {
	if ($bottles > 1) {
		echo "".$bottles." bottles of beer on the wall, ".$bottles." bottles of beer; ";
		if ($bottles == 2) {
			echo "Take one down and pass it around, 1 bottle of beer on the wall\n";
		} else {
			echo "Take one down and pass it around, ".($bottles-1)." bottles of beer on the wall\n";
		}
	} elseif($bottles == 1) {
		echo "".$bottles." bottle of beer on the wall, ".$bottles." bottle of beer\n";
		echo "Take one down and pass it around, no more bottles of beer on the wall\n";
	} else {
		echo "No more bottles of beer on the wall, no more bottles of beer. ";
		echo "Go to the store and buy some more, 99 bottles of beer on the wall!\n";
	}
}
for($x = 99; $x >=0; $x--) {
   sing($x);
}
?>

