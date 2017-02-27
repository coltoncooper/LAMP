<html>
<head>
	<title>Courses Assignment Dashboard</title>
</head>
<body>
	<h1>All Courses</h1>
	<form action="/courses/create" method="post">
		<input type="text" name="course_name">
		<textarea name="description"></textarea>
		<input type="submit" value="Add Course">
	</form>

	<?php if(isset($errors) && !empty($errors)){
			echo $errors;
	} ?>
		
	<table>
		<thead>
			<tr>
				<th>Course Name</th>
				<th>Description</th>
				<th>Created At</th>
				<th>Action</th>	
			</tr>
		</thead>
		<tbody>
			<?php foreach($courses as $course){ ?>
					<tr>
						<td><?= $course['name']; ?></td>
						<td><?= $course['description']; ?></td>
						<td><?= $course['created_at']; ?></td>
						<td><a href="courses/destroy/<?= $course['id']; ?>">remove</a></td>
					</tr>

			<?php		} ?>
		</tbody>
	</table>
</body>
</html>