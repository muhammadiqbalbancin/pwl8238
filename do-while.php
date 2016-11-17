<!DOCTYPE html>
<html>
<head>
	<title>perulangan menggaunakan do-while</title>
</head>
<body>
<form action="do-while.php" method="post">
	masukkan bilangan bilangan positif:
	<input type="text" name="do">
	<input type="submit" name="btnsubmit" value="SUBMIT">

</form>
</body>
</html>

<?php 
if (isset($_POST['btnsubmit'])) {
	$do = $_POST['do'];
	$i = 0;
	do {
		echo "Baris Ke-".$i."<br />";
		$i++;
	} while ($i < 10);
}
 ?>