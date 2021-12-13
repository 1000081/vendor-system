<?php
include 'database.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$prod_name=$_POST['prod_name'];
		$price=$_POST['price'];
		$weight=$_POST['weight'];
		$des=$_POST['des'];
		$prod_cat=$_POST['prod_cat'];
		$sql = "INSERT INTO `products`( `prod_name`, `price`,`weight`,`des`,`prod_cat`, `cre_ts`) 
		VALUES ('$prod_name','$price','$weight','$des','$prod_cat', CURRENT_TIME)";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$prod_name=$_POST['prod_name'];
		$price=$_POST['price'];
		$weight=$_POST['weight'];
		$des=$_POST['des'];
		$prod_cat=$_POST['prod_cat'];
		$sql = "UPDATE `products` SET `prod_name`='$prod_name',`price`='$price',`weight`='$weight',`des`='$des',`prod_cat`='$prod_cat' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `products` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM products WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>