<!DOCTYPE html>
<html>
<head>
	<title>All Users</title>
</head>
<body>
	<div id="container">
		<form action='/result' method="post">
			<label>Your Name:</label>
			<input type="text" name="name" required><br>
			<label>Dojo Location: </label>
			<select name="location" required>
				<option value="Mountain View">Mountain View</option>
				<option value="Seattle">Seattle</option>
			</select><br>
			<label>Favorite Language:</label>
			<select name="language" required>
				<option value="JavaScript">JavaScript</option>
				<option value-"PHP">PHP</option>
			</select><br>
			<label>Comment (optional):</label><br>
			<textarea name="comment" cols="30" rows="10"></textarea><br>
			<input type="submit" value="submit">
		</form>
	</div>
</body>
</html>