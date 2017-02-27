<!DOCTYPE html>
<html>
<head>
	<title>Show Page</title>
</head>
<body>
	<h2>Product <?php echo $product['id'] ?></h2>

	<p>Name: <?php echo $product['name'] ?></p>
	<p>Description: <?php echo $product['description'] ?></p>
	<p>Price: $<?php echo $product['price'] ?></p>

	<a href="/products/edit/<?php echo $product['id'] ?>">Edit</a> | <a href="/">Back</a>
</body>
</html>