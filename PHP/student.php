<?php
	$a=array("Akhila","Sneha","Shifana");
	print " array of student";
	echo "<br>";
	print_r($a);
	echo"<br><br><br>";
	print "sorted array of student";//ascending
	
	echo "<br>";
	asort($a);
	print_r($a);
	echo"<br><br><br>";
	print "unsorted array of student";//descending
	echo "<br>";
	arsort($a);
	print_r($a);
	
?>
