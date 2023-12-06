<html> <head> <title>Marklist</title>

</head> <body>

<h3><center>Marksheet</center></h3>

Shape9<form method="POST" action="">

<label>Regno:</label><input type="text" name="txtreg"/><br><br><br>

<input type="submit" value="show">

</form>

</body> </html>

 

<?php if($_POST)

{

$rg=$_POST['txtreg'];

$con =pg_connect("host=localhost dbname=college user=postgres password=gems"); if($con)

echo "Successfully Connected...";

$qry="select * from student where rollno=$rg";

$result=pg_query($con,$qry);

$nos=pg_num_rows($result); while($row=pg_fetch_row($result))

{

echo "<br>\n";

echo "rollno: $row[0] name: $row[1] mark: $row[2] grade: $row[3]";

}

}

?>