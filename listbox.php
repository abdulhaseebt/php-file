<html ><body >

<form action="" method="POST">

Choose Your Favorite Fruit<br><br>

<select name="fru">

<option value=" ">(Please Select)

<option value="Grape">Grape

<option value="Banana">Banana

<option value= "Chicku">Chicku

<option value="Apple">Apple

<option value="Orenge">Orenge

<option value="Pine Apple">Pine Apple

</select><br><br>

<input type="submit" value="SELECT">

</form>

</body></html>

 

<?php if($_POST)

{

echo "<h3> You have indicated that you like </h3>"; echo $_POST["fru"];

}

?>