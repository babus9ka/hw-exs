<?php 

 $title = $_POST["title"];
 $description = $_POST["description"];
 $category = $_POST["category"];


 $content = "Название товара: $title\nКатегория товара: $category\nОписание:$description\nЦена: 1000р";
 $filename = "products.txt";
 $fp = fopen($filename, "w");
 fwrite($fp, $content);
 fclose($fp)

 ?>