<?php 
//pattern
/*for ($i=1; $i <=5; $i++) { 
	for ($j=1; $j <=5; $j++) { 
		if ($i==1 || $i==5) {
			echo "*";
		}elseif ($j==1 || $j==5) {
			echo "*";
		}else{
			echo "&nbsp&nbsp";
		}
	}
	echo "<br>";
}*/

/*$k=0;
for ($i=1; $i <=5 ; $i++) {
	$k+=$i;
	for ($j=1; $j <=$k ; $j++) { 
		echo "*";
	}
	for ($a=1; $a <=$i ; $a++) { 
		echo "0";
	}
	echo "<br>";
}*/

//pattern
/*$num=1;
for ($i=1; $i <=5 ; $i++) { 
 	for ($j=1; $j <=$i; $j++) { 
 		echo $num;
 		$num++;
 	}
 	echo "<br>";
 } */

//printing-table
/*echo "<table width='270px' cellspacing='0' cellpadding='0' border='1px'>";
 for ($row=1; $row <=8 ; $row++) { 
 	echo "<tr>";
 	for ($col=1; $col <=8 ; $col++) { 
 		$sum=$row+$col;
 		if ($sum%2==0) {
 			echo "<td height='30px' width='30px' bgcolor='#ffffff'></td>";
 		}else{
 			echo "<td height='30px' width='30px' bgcolor='#000000'></td>";
 		}
 	}
 }
echo "</table>";*/

/*echo "<table width='550px' cellspacing='0' cellpadding='0' border='1px'>";
 for ($row=1; $row <=6 ; $row++) { 
 	echo "<tr>";
 	for ($col=1; $col <=5 ; $col++) { 
 		$mul=$row*$col;
 		?>
 		<td><?php echo $row."*".$col."=".$mul; ?></td>
 		<?php }
 	}
echo "</table>";*/

/*echo "<table  cellspacing='0' cellpadding='0' border='1px'>";
 for ($row=1; $row <=10 ; $row++) { 
 	echo "<tr>";
 	for ($col=1; $col <=10 ; $col++) { 
 		$mul=$row*$col;
 		?>
 		<td><?php echo $mul; ?></td>
 		<?php }
 	}
echo "</table>";
$a=1;
//echo $b=&$a;
//echo $c="2$b";
echo "2$a";*/

/*
$str="JOHN";
$strr="CENA";
$a=str_split($str); //string into array
$b=str_split($strr);
print_r($a);*/

/*$arr=array(1,2,3,44,22);
$max1=0;
$max2=0;
for ($i=0; $i <count($arr) ; $i++) { 
	if ($arr[$i]>$max1) {
		$max2=$max1;
		$max1=$arr[$i];
	}elseif ($arr[$i]>$max2) {
		$max2=$arr[$i];
	}
}
echo "$max2 is secind maximum.<br>";*/

/*$a=[1,3,5];
for ($i=0; $i <3 ; $i++) { 
	$b[]=$a[$i]*$a[$i];
}
print_r($b);
print_r($a);*/
?>