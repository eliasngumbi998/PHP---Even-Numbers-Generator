<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="<a href="https://eliasngumbipro.com">eliasngumbipro</a>
" rel="nofollow">https://eliasngumbipro.com">eliasngumbipro</a>
</a>		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Even Numbers Generator</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form method="POST">
				<div class="form-inline">
					<label>Enter a number</label>
					<input type="number" class="form-control" max="100" name="number" required="required" min="1"/>
					<button name="generate" class="btn btn-primary">Generate</button>
				</div>
			</form>
			<br />
			<?php
				if(ISSET($_POST['generate'])){
					$array = [];
					$number = $_POST['number'];
					for($i=1; $i<=$number; $i++){
						array_push($array, $i);
					}	
 
					echo implode(", ", $array);
				}
			?>
		</div>
		<br />
		<div class="col-md-8">	
			<?php include 'generate.php'?>
		</div>
	</div>
</body>
</html>
