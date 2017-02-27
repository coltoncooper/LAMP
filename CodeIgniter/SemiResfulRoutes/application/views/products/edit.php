<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<h2>Edit Product <?php echo $product['id'] ?></h2>
	<form action="/products/update" method="post">
		<input type="text" value=<?php echo $product['id']?> name='id' hidden>
		<label>Name</label><br>
		<input type='text' name="product_name" value=<?php echo $product['name']?>><br>
		<label>Description</label><br>
		<input type="text" name="product_description" value=<?php echo $product['description']?>><br>
		<label>Price</label><br>
		<input type="text" name="product_price" value=<?php echo $product['price']?>><br>
		<input type="submit" value="Update"><br>
	</form>
	<a href="/products/show/<?php echo $product['id'] ?>">Show</a> | <a href="/">Back</a>

</body>
</html>