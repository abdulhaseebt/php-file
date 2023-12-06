<!DOCTYPE html>
<html>

<body>
    <h2>Enter a String to Reverse</h2>
    <form action="" method="POST">
        Input String:
        <input type="text" name="str"><br>

        <input type="submit" value="Reverse">
    </form>
</body>

</html>
    <?php
    if ($_POST) {
        function reverseString($str) {
            $length=strlen($str);
            for($i=($length-1);$i>=0;$i--)
            echo $str[$i]; 
        }    
        $String = $_POST['str'];
        reverseString($String);
} ?>