<!DOCTYPE html>
<html >
<body>
    <h2>Enter Personal Details</h2>
    <form action="" method="POST">
        Name:
        <input type="text" name="name"><br>

        Address:
        <input type="text" name="address" ><br>

        Age:
        <input type="number" name="age" ><br>

        Mobile:
        <input type="tel" name="mobile" ><br>

        Qualification:
        <input type="text" name="qualification" ><br>

        Email:
        <input type="email" name="email" ><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>


    <?php
    // Check if form is submitted
    if ($_POST) {

        // Display biodata
        echo "Name:".$_POST["name"]."<br>";
        echo "Address:".$_POST["address"]."<br>";
        echo "Age:".$_POST["age"]."<br>";
        echo "Mobile:".$_POST["mobile"]."<br>";
        echo "Qualification:".$_POST["qualification"]."<br>";
        echo "Email:".$_POST["email"]."<br>";
    }
    ?>