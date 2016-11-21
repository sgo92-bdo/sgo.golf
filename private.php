<?php
    require("./cnx/config.php");
    if(empty($_SESSION['user'])) 
    {
       header("Location: ./index.php");
       die("Redirecting to ./index.php"); 
   }
?>

<!doctype html>
<html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./favicon.ico">

    <title>Espace Adhérent</title>

    <!-- Bootstrap core CSS -->
    <link href="./docs/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./docs/assets/js/ie-emulation-modes-warning.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="./private.css" rel="stylesheet">
  </head>



<body>



<!-- Header -->
    <div class="header" id="agilehome">
		<img src="./bgPrivate2.jpg" alt="Opulent">

		<h1>Bi<a href="./jeu.html" style="color:white;text-decoration:none;">e</a>nvenue Robin</h1>

		<h2> - <span>MEMBRE</span>- </h2>

		<!-- Navigation -->
		<div class="navigation">

			<div class="nav-grids">
				<div class="ch-grid">
				<div class="row">
					<div class="col-md-2 nav-grid nav-grid1">
						<div class="ch-item ch-img-1">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"><i class="fa fa-newspaper-o" aria-hidden="true"></i></div>
									<div class="ch-info-back">
										<h3><a class="scroll" href="http://www.sectiongolfouest.org">ACTU</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 nav-grid nav-grid2">
						<div class="ch-item ch-img-2">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"><i class="fa fa-calendar" aria-hidden="true"></i></div>
									<div class="ch-info-back">
										<h3><a class="scroll" href="./sumEvents.html">EVENEMENTS</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 nav-grid nav-grid3">
						<div class="ch-item ch-img-3">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></div>
									<div class="ch-info-back">
										<h3><a class="scroll" href="http://www.sectiongolfouest.org">PLANNING</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 nav-grid nav-grid4">
						<div class="ch-item ch-img-4">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"><i class="fa fa-eur" aria-hidden="true"></i></div>
									<div class="ch-info-back">
										<h3><a class="scroll" href="http://www.sectiongolfouest.org">TARIFS</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 nav-grid nav-grid5">
						<div class="ch-item ch-img-5">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
									<div class="ch-info-back">
										<h3><a class="scroll" href="http://www.sectiongolfouest.org">DOSSIER</br>INSCRIPTION</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 nav-grid nav-grid6">
						<div class="ch-item ch-img-6">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"><i class="fa fa-users" aria-hidden="true"></i></div>
									<div class="ch-info-back">
										<h3><a class="scroll cont" href="./trombiBur.html">BUREAU</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				</div>
			</div>

		</div>
		<!-- //Navigation -->

 		<li><a href="./cnx/logout.php">Log Out</a></li>
	</div>

	

</body>
	<!-- //Header -->
