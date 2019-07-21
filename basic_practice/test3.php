<?php 
/*//factorial
$sum=fact(4);
function fact($a){
	$sum=1;
for ($i=1; $i<=$a; $i++) { 
	$sum=$sum*$i;
}
	return $sum;
}
echo "factorial is $sum<br>";*/

//fibonacci series
/*$a=0;
$b=1;
for ($num=0; $num <10 ; $num++) { 
	$c=$a+$b;
	echo $c.'<br>';
	$a=$b;
	$b=$c;
}*/

//armstrong->sum of the cube of the digit
/*$number=153;
$temp=$number;
$sum=0;
while ($temp!= 0) {
	$remainder=$temp%10;
	$sum=$sum+($remainder*$remainder*$remainder);
	$temp=$temp/10;
}
echo $sum.'<br>';
if ($number==$sum) {
	echo "$number is armstrong";
}
else {
	echo "$number is not armstrong";
}*/

//reverse of a number
/*$temp=1234;
$rev=0;
while ($temp>=1) {
	$remainder=$temp%10;
	$rev=$remainder+$rev*10;
	$temp=$temp/10;
}
echo $rev;*/

//prime number
$num=19;
/*$check=0;
for ($i=2; $i <=($num/2) ; $i++) { 
	if ($num%$i==0) {
		$check++;
		if ($check==1) {
			echo "$num is not a prime number<br>";
			break;
		}
	}else{
	echo "$num is prime number<br>";
	break;
		}
}*/

//leap year
/*$yr=2012;
if($yr%4==0)
{
	echo "it is a leap year";
 }
else{
	echo "it's not a leap year";
}*/

//pattern $i+=2; 
/*$number=9;
for ($i=$number; $i>=1 ; $i--) { 
	for ($j=1; $j <=2*$i-1 ; $j++) { 
		echo "$j";
	}
	echo "<br>";
}*/
/*for ($a=1; $a <=4 ; $a++) { 
	$b=$a+4;
	$c=$a+8;
	echo $a." ".$b." ".$c.'<br>';
}*/
//biggest and smallest number in an array
$arr1=array(12,1,4,13,99);
/*$max=$arr1[0];
echo count($arr1).'<br>';
for ($i=1; $i < count($arr1); $i++) { 
	if ($arr1[$i]>$max) {
		$max=$arr1[$i];
	}
}
echo $max;*/
/*$min=$arr1[0];
for ($i=1; $i <count($arr1) ; $i++) { 
	if ($arr1[$i]<$min) {
		$min=$arr1[$i];
	}
}
echo $min;*/
?>
