<?php // opening php tags

session_start();
// adding database file
require_once("db.php");

$sql = "select * from users";

$result = $conn -> query($sql);

if ($result->num_rows>0)
{
while ($result->fetch_assoc()){

    echo $row['Name'];
}


}


?> // closing php tags