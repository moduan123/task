<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
	.table {
  border-collapse: collapse;
}
	</style>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	<input type="text" name="name" placeholder="ENTER THE NAME">
	<input type="text" name="price" placeholder="ENTER THE PRICE">
	<input type="text" name="7asm" placeholder="ENTER THE 7ASM">
	<input type="submit" >
</form>

</body>
</html>
<?php
 $hostname='localhost';
 $username='root';
 $pass='';
$mysqli = mysqli_connect($hostname, $username,$pass);



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$moviname =$_POST['name'];
	$moviPRICE =$_POST['price'];
	$movin7ASM =$_POST['7asm'];
echo "
 <table  >
  <tr>
    <th>name</th>
    <th>price</th>
    <th>7asm</th>
  </tr>
  <tr>
    <td> $moviname </td>
    <td>$moviPRICE</td>
    <td>$movin7ASM</td>
  </tr>  
</table>";
	
}






?>


