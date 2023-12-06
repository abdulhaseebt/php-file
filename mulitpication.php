<!DOCTYPE html>

<html><body>

<h3> Multiplication Table</h3>

<form action="" method="POST"> Enter a Number

<input type="text" name="num">

<input type="submit">

</form>

</body></html>

 

<?php if($_POST)

{

$n=$_POST['num'];

for ($i = 1; $i <= 15; $i++)

echo $i." * ".$n." = ".$i*$n."<br>";

}

?>