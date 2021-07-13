<?php  
require_once '../Model/model.php';


if (isset($_POST['createProduct'])) {
	$data['Name'] = $_POST['Name'];
	$data['Buy_Price'] = $_POST['Buy_Price'];
	$data['Sell_Price'] = $_POST['Sell_Price'];

  if (addProduct($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>