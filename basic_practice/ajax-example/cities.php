<?php 
$state = $_GET["state"];
$c1 = array('patna');
$c2 = array('bhopal','indore','jabalpur');
$c3 = array('kanpur','agra','lucknow');
if ($state=="bihar") {
	foreach ($c1 as $c) {
		echo "<option>$c</option>";
	}
}
elseif ($state=="mp") {
	foreach ($c2 as $c) {
		echo "<option>$c</option>";
	}
}
elseif ($state=="up") {
	foreach ($c3 as $c) {
		echo "<option>$c</option>";
	}
}
else{
	echo "<option>first select state</option>";
}
 ?>
