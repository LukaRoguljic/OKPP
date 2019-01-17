<!DOCTYPE html>
<html lang="hr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Slanje paketa</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,latin-ext" rel="stylesheet" type="text/css">
</head>

<body class="slanje-paketa">
<!-- LUKA UBACIO IZ SESIJE -->
      <h1>Welcome <?php echo "ADMIN"; ?></h1> 
      <h2><a href = "../logout.php">Sign Out</a></h2>

	<div class="container-fluid">
		<div class="container">
			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box">

					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 small-box">
						<form method="POST" action="admin_print.php">
							<input type="SUBMIT" class="style19" name="povijest" value="Povijest">
						</form>
						<form method="POST" action="admin_24hr.php">
							<input type="SUBMIT" class="style19" name="povijest" value="Povijest 24 sata">
						</form>
					</div>

				</div>

			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	
</body>

</html>