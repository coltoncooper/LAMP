<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="alert alert-success">
		Thanks for submitting this form! You have submitted this form <?php echo $this->session->userdata('counter'); ?> time/s now.
	</div>

	<div id="body">
		<h3>Submitted Information</h3>

		<p>Name: <?php echo $survey_info['name']; ?></p>
		<p>Dojo Location: <?php echo $survey_info['location']; ?></p>
		<p>Favorite Language: <?php echo $survey_info['language']; ?></p>
		<p>Comment: <?php echo $survey_info['comment']; ?></p>
		<a href="/home" class="btn btn-primary">Go Back</a>
	</div>

</body>
</html>