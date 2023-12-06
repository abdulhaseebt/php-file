<html> <head> <title>Product</title> </head> <body>

<h1><center>List of Products</center></h1>

<form method="POST" action="">

Item Code:<input type="text" name="icode"/><br><br><br> Item Name:<input type="text" name="iname"/><br><br><br> Unit Price:<input type="text" name="iprice"/><br><br><br>

<input type="submit" value="Display">

</form>

</body> </html>

 

<?php

if($_POST)

{

$no=$_POST['icode'];

$name=$_POST['iname'];

$price=$_POST['iprice'];

$con=pg_connect("host=localhost dbname=college user=postgres password=gems"); if($con)

{

 

 

$price)";

echo "Successfully Connected. ";

Shape13$qry="insert into product (itemcode,itemname,unitprice) values ($no,'$name',

 

$result=pg_query($con,$qry);

$qry1="select * from product";

$result1=pg_query($con,$qry1); echo "<table border=1>";

echo "<tr><th>Item Code</th><th>Item Name</th><th>Unit Price</th></tr>"; while ($row = pg_fetch_row($result1))

{

 

echo "<tr><td>$row[0]</td> <td>$row[1]</td> <td>$row[2]</td></tr>";

}

echo "</table>";

}

}

?>