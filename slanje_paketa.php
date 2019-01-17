<?php
   include('session.php');
?>
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
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>

	<div class="container-fluid">
		<div class="container">
			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box">

					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 small-box">

						<form name="form2" method="post" action="order_script.php">

							<h2>Pošiljatelj</h2>
							<p>Grad/Mjesto: <input type="text" name="city" size="25" maxlength="20" value=""/></p>
							<p>Kontakt broj: <input type="text" name="contact" size="25" maxlength="20" value=""/></p>
							<p>Adresa: <input type="text" name="adress" size="25" maxlength="100" value=""/></p>
							<!--select for box_size-->
							<p>
								Brzina dostave/Prioritet: 
								<select name="priority">
									<option value="Da">Da</option>
									<option value="Ne">Ne</option>
								</select>
							</p>

							<h2 class="mt40">Veličina kutije</h2>
							<p>
								<select name="box_size">
									<option value="sm">1*1*1</option>
									<option value="md">2*2*2</option>
									<option value="lg">3*3*3</option>
									<option value="xl">4*4*4</option>
								</select>
							</p>
			
							<h2 class="mt40">Primatelj</h2>
							<p>Ime: <input type="text" name="name" size="25" maxlength="20" value=""/></p>
							<p>Prezime: <input type="text" name="lname" size="25" maxlength="20" value=""/></p>
							<p>Adresa: <input type="text" name="del_adress" size="25" maxlength="40" value=""/></p>
							<p>Poštanski broj: <input type="text" name="pob" size="25" maxlength="20" value=""/></p>
				
							<!--Price of delivery hidden -->
							<p class="mt20 text-right">
								<input type="hidden" name="price" value="" size="25">
								<input class="btn btn-primary" type="submit" name="order" value="Naruči"/>
								<a href="index.html" class="btn btn-default">Odustani</a>
							</p>

						</form>
						<form method="POST" action="print.php">
							<input type="SUBMIT" class="style19" name="povijest" value="Povijest">
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