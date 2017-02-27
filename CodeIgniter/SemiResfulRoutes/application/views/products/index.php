<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="/assets/index_style.css">
</head>
<body>
	<h1>Products</h1>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Actions</th>	
			</tr>
		</thead>
		<tbody>
			<?php foreach($products as $product){ ?>
					<tr>
						<td><?= $product['name']; ?></td>
						<td><?= $product['description']; ?></td>
						<td><?= $product['price']; ?></td>
						<td><a href="products/show/<?= $product['id']; ?>">show</a></td>
						<td><a href="products/edit/<?= $product['id']; ?>">edit</a></td>
						<td><a href="products/destroy/<?= $product['id']; ?>">remove</a></td>
					</tr>

			<?php		} ?>
		</tbody>
	</table>







	<p><a href="products/new">Add a new product<a></p>
</body>
</html>