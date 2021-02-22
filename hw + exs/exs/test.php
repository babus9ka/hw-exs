<form action="includes/add_product.php" method="post" enctype="multipart/form-data">
	<p>Название товара</p>
	<input type="text" name="title">
	<p>Описание товара</p>
	<textarea name="description"></textarea>
	<br><br>
	<select name="category">
		<option value="Для женщин">Для женщин</option>
		<option value="Для мужчин">Для мужчин</option>
		<option value="Для детей">Для детей</option>
	</select>
	<br><br><br>
	<button type="submit">Добавить</button>
</form>