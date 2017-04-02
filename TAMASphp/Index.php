<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>
						TAMAS <small>The Teacher Assistant Management System</small>
					</h1>
				</div>
				<p>
					Welcome to the Instructor module. This login page is not implemented yet.
					The login button will bring you to the core of the system.
				</p>
				<form action="Dummies.php" method="post">
					<div>
						<p>Username? <input type='text' name='username'/></p>
					</div>
					<div>
						<p>Password? <input type='text' name='password'/></p>
					</div>
					<div>
						<input type="button" name='Login' value='Login' class='register' onclick="location='Dummies.php'" />
					</div>
				</form>
			</div>
		</div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>