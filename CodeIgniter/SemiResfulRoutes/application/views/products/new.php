<!DOCTYPE html>
<html>
<head>
	<title>New Page</title>
</head>
<body>
	<h3>Add a new product</h3>
	<form action="/products/create" method="post">
		<label>Name</label><br>
		<input type='text' name="product_name"><br>
		<label>Description</label><br>
		<input type="text" name="product_description"><br>
		<label>Price</label><br>
		<input type="text" name="product_price"><br>
		<input type="submit" value="Create"><br>
	</form>

	<?php if(isset($errors) && !empty($errors)){
			echo $errors;
	} ?>


	<p><a href="/">Go Back</a></p>

</body>
</html>