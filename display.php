<?php
$username = "root";
$password = "";
$database = "myshop";
$mysqli = new mysqli("localhost", $username, $password, $database);

$query = "SELECT * FROM recipe_tb1 WHERE id=1";
echo "<b> <center>Database Output</center> </b> <br> <br>";

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["recipe"];
        $field3name = $row["ingredients"];
        $field4name = $row["method"];
        $image = $row["image"];

        echo $field1name.'<br />'.'<br />';
        echo '<br><img src="'.$image.'" width="300px" height="300px"><br>';
        echo $field2name.'<br />'.'<br />'.'<br />';
        echo nl2br($row['ingredients'].'<br />'.'<br />'.'<br />');
        echo '<br />';
        echo nl2br($row['method']);
    }

/*freeresultset*/
$result->free();
}