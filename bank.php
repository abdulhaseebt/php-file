<html> <head>

<title>BANK DATABASE</title><center><h2>ACCOUNT DETAILS</h2></center>

</head> <body>

<form action="" method="POST">

<table border=0>

<tr><td>Account Number</td><td><input type="text" name="acc"></td></tr>

<tr><td>Amount</td><td><input type="text" name="amnt"></td></tr>

<tr>

<td rowspan=1>Transaction</td>

<td><input type="radio" name="trans" value="deposit">Deposit<br>

<input type="radio" name="trans" value="withdrawal">Withdrawal</td><br>

</tr>

<tr><td></td><td><input type="submit" value="submit"></td></tr></table>

</form>

</body> </html>

 

<?php if($_POST)

{

$acc1=$_POST["acc"];

$amnt1=$_POST["amnt"];

$trans1=$_POST["trans"];

$con =pg_connect("host=localhost dbname=college user=postgres password=gems"); if($con)

{

Shape14echo "Successfully Connected..."; if($trans1=="deposit")

{

$qry="update bank SET balance = (select balance from bank where accno=$acc1)+$amnt1 where accno=$acc1";

$result=pg_query($con,$qry);

}

else

{

$qry="update bank SET balance = (select balance from bank where

accno=$acc1)-$amnt1 where accno=$acc1";

$result=pg_query($con,$qry);

 

 

}

else

 

}

?>

}

echo "Database Updated..."; echo "Not Connected";