<!DOCTYPE html>
<html>
<head>
	<title>Courses</title>
</head>
<body>
	<div id="container">
		<h3>Add a new course</h3>
		<form action='/courses/add' method="post">
			<label>Name:</label>
			<input type="text" name="course_name"><br>
			<label>Description</label>
			<textarea name='course_description' cols="30" rows="10"></textarea>
			<input type="submit" value="add">
		</form>
	</div>
	<div>
		<?php 
			if(isset($errors) && $errors!=null)
			{
				echo $errors;
			}

		?>
	</div>

	<table>
		<tr>
			<th>Course Names</th>
			<th>Description</th>
			<th>Date Added</th>
			<th>Action</th>
		</tr>
		<?php 
			
			foreach($courses as $course)
			{
				echo "<tr>";
				echo "<td>".$course['name']."</td>";
				echo "<td>".$course['description']."</td>";
				echo "<td>".$course['created_at']."</td>";
				echo "<td><a href='/courses/destroy/".$course['id']."'>Remove</a></td>";
				echo "</tr>";
			}	
			

			
				

		?>







	</table>
</body>
</html>