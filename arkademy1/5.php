<!DOCTYPE html>
<html>
<head>
<form method="post">
<input type="text" name="max">
<input type="submit" value="proses">
</html>
</form>
</head>
<?php

	$jumlah = 0;
$max= $_POST['max'];
for ($i = 1; $i < $max; $i++) {
	$jumlah += $i;
echo "$i + ";


echo "<br/>totalnya : $jumlah";
}

?>