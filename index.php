<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <title>Server Information</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
	<div class = "container">
		<h1>Server Information</h1>
			<ul class = "list-group">
				<?php foreach($_SERVER as $key => $value): ?>
					<li class ="list-group-item">
						<strong><?php echo $key; ?> : </strong>
						<?php echo $value; ?>
					</li>
				<?php endforeach; ?>
			</ul>
	</div>
  </body>
</html>
