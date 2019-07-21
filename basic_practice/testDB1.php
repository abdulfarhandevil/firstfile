<!-- <?php 
//join helps to retireive data or rows from 2 or more tbales based on commn fld bet them
$conn=mysqli_connect("localhost","root","","register");
if ($conn) {
	echo "connection established successfully.<br>";
}
$sql="select * from registration where name LIKE '%dul%' ";
//"select * from registration ORDERBY name DESC ";
//orderby clauseis used to shoert data in ascor desc order  based on one or more column (bu def ascending)
/*likw clause is used to compare a value to similar values using wildcard operater there are two wildcards used in conjuction with like operator % ,_ they ca be used in combination*/
$res=mysqli_query($conn,$sql);
if ($res) {
	echo "query run successfully.<br>";
}
while ($row=mysqli_fetch_assoc($res)) {
	echo $row['name'];
}
	mysqli_close($conn);
 ?> -->
 <?php 
$conn=mysqli_connect("localhost","root","","register");
if ($conn) {
	echo "connection established successfully.<br>";
}
$sql="select a.name , b.email FROM registration a , user b WHERE a.name = b.name ";
//left join= select a.name , b.email FROM registration a LEFT JOIN user b ON a.name = b.name 
//left join returns all the rows fro left table plus matched value from rigth table
//exporting data->select * from tablename INTO OUTFILE '/tmp/ttr,txt'; 
$res=mysqli_query($conn,$sql);
if ($res) {
	echo "query run successfully.<br>";
}
while ($row=mysqli_fetch_assoc($res)) {
	print_r($row);
}
echo "done";
	mysqli_close($conn);

  ?>