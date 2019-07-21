<!-- thre aree three ways to handle exception error reporting,customexception handler,try catch finally -->

<?php 
$car=array(
		array("10" =>"bmw","20" =>"innova","lastname"=>"bale"),
			array("11" =>"bmw","21" =>"innova","lastname"=>"balen"),
			array("12" =>"bmw","22" =>"innova","lastname"=>"baleno")
		);
$lastname=array_column($car, 'lastname');
//array column return the value from the single column in the input array
print_r($lastname);
echo "<br>";
	foreach ($car as $tmpcar) {
		foreach ($tmpcar as $key => $value) {
		echo "key = ".$key." value = ".$value."<br>";
			
		}
	}
$a=array(1,2,3);
foreach ($a as $temp) {
	echo $temp."<br>";
}
//print_r($a);
$carr=array("keyy" =>"audi","21" =>"innova","31"=>"baleno");
foreach ($carr as $key=>$value) {
	echo "key= ".$key." value = ".$value."<br>";
}
echo $carr["keyy"];


$marks=array("mohammad" => array(
					"physics" => "55",
					"maths" => "56",
					"chemistry" => "57"
				),
			"qadir" => array(
					"physics" => "45",
					"maths" => "46",
					"chemistry" => "47"
				),
			"zara" => array(
					"physics" => "75",
					"maths" => "76",
					"chemistry" => "77"
				)
			);
//MDA are accessed using multiple index
echo "marks for mohammad in physics :";
echo $marks['mohammad']['physics'].'<br>';


/*array methods*/
//extract->converts assoc arr keys into string var.
extract($carr);
echo " $keyy is audi.<br>";
//add a prefix to str to diff bet arrays that have the same key.
extract($carr,EXTR_PREFIX_ALL,"cars");
echo "$cars_keyy<br>";
//convert a var into an array
$comic='batman';
$sciencefiction='dreaming void';
$arrbooks=compact('comic','sciencefiction');
foreach ($arrbooks as $key => $value) {
	echo "$value is an aexample of $key book<br>";
}
$arrr=array(1,3,5);
foreach ($arrr as $key => $value) {
	$ar[]=$value*$value;
}
print_r($ar);
echo "<br>";
$ab=array(1,4,6);
foreach ($ab as $key => $value) {
	$abc[$key]=$value*$value;
}
print_r($abc);
echo "<br>";
$res=array_diff($arrr, $ab);
//it will return the diff from frst array
//array_diff_assoc() it com key and values array_diff_key()
//array_key_exists("volvo",$a); array_reverse($a);
//serach an arr for value "red" and retrn key array_search("red",$a);
//array_keys($a); array_sum($a); sum of elenmts
//array_merge($a,$b); array_push($a,"green"); array_pop($a);
//remove duplicate values array_unique($a);
//in_array("abc",$ab); search for the specific value and return true/false eshuffle()
print_r($res);
$aaa=array_search("6", $ab);
echo $ab[$aaa];
$arra=[
		[1,2],
		[3,4],
		];
foreach ($arra as list($a,$b)) {
	echo "A : $a ; B : $b\n";
}
//list only work with numeric array
?>

