<?php 
include "webconfig.php";

$id = $_POST['id'];
$customer_name = $_POST['customer_name'];
$client_no = $_POST['client_no'];
$address = $_POST['address'];
$pic = $_POST['pic'];
$contact = $_POST['contact'];
$email = $_POST['email'];

$customer_name = mysql_real_escape_string($customer_name);
$address = mysql_real_escape_string($address);
$pic = mysql_real_escape_string($pic);

mysql_query("
UPDATE client SET 
customer_name = '$customer_name',
client_no = '$client_no',
address = '$address',
pic = '$pic',
contact = '$contact',
email = '$email'
WHERE id = '$id'
") 
or die(mysql_error());  

$msg = $customer_name." information successfully updated to the database.";

echo "<META HTTP-EQUIV=\"Refresh\" Content=\"0; URL=customerlist.php?msg=$msg\">";    

?>
