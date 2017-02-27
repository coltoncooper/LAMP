<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Result</title>
	<style>
    #form_wrapper{
      border: 2px solid black;
      width: 300px;
      padding: 5px 5px;
    }
    textarea{
      width: 90%;
      resize: none;
    }
    </style>
</head>
<body>
	<h1>Submitted Information</h1>
	<div id="form_wrapper">
		<table>
			<tr>
				<td>Name:</td>
				<td><?php echo $_POST["full_name"]?></td>
			</tr>
			<tr>
				<td>Dojo Location:</td>
				<td><?php echo $_POST["location"]?></td>
			</tr>
			<tr>
				<td>Favorite Language:</td>
				<td><?php echo $_POST["language"]?></td>
			</tr>
			<tr>
				<td>Comment:</td>
				<td><?php echo $_POST["comment"]?></td>
			</tr>
		</table>
		<a href="index.html"><button>Go Back</button></a>
	</div>
</body>
</html>