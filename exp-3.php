<?php
$data = $_GET['name'];

$db = new mysqli('localhost', 'root', '', 'exp3');

$query = "insert into data values ('".$data."');";

$ins_row = $db -> query ($query);

if($ins_row)
{
header("successful!");
echo "successful!";
}
else
{
echo "unsuccessful!";
header("unsuccessful");
}
?>
