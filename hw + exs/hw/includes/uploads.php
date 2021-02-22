<?php 
$path = "../uploads/" . time() . "_" . $_FILES["image"]["name"];
if ($_FILES["image"]["type"] === "image/png") {
	move_uploaded_file($_FILES["image"]["tmp_name"], $path);
	echo "Загрузка выполнена успешна в формате PNG";
} else if ($_FILES["image"]["type"] === "image/jpeg"){
	move_uploaded_file($_FILES["image"]["tmp_name"], $path);
	echo "Загрузка выполнена успешна в формате JPEG";
} else {
	echo "Файл не поддерживается!";
	die();
}


 ?>