<?php  
//action.php
error_reporting(E_ALL);
header('Content-Type: application/json');
require_once '../inc/connect.php';

$input = filter_input_array(INPUT_POST);

$date_operations = mysqli_real_escape_string($db1, $input["date_operations"]);
$operations = mysqli_real_escape_string($db1, $input["operations"]);
$main = mysqli_real_escape_string($db1, $input["main"]);
$trailer = mysqli_real_escape_string($db1, $input["trailer"]);
$driver = mysqli_real_escape_string($db1, $input["driver"]);
$done = mysqli_real_escape_string($db1, $input["done"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE `operations-m4`
 SET date_operations = '".$date_operations."', 
 operations = '".$operations."' ,
 main = '".$main."' ,
 trailer = '".$trailer."' ,
 driver = '".$driver."' ,
 done = '".$done."'
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($db1, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM `operations-m4` 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($db1, $query);
}

echo json_encode($input);

?>

