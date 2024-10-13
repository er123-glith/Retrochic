<?php 
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Retrochic.katalog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

					<!-- Logo -->
						<h1><a href="index.php">Retrochic.</a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="<?php echo ($current_page == 'index.php') ? 'current' : ''; ?>">
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="#">About us</a>
									<ul>
										<li><a href="https://www.instagram.com/e.erhaes/">Admin 1</a></li>
										<li><a href="https://www.instagram.com/kevinnmarshall/">Admin 2</a></li>
										<li><a href="https://www.instagram.com/keziacarn/">Admin 3</a></li>
										<li><a href="https://www.instagram.com/bisdig23_b/">our group</a></li>
									</ul>
								</li>
								<li class="<?php echo ($current_page == 'leftside.php') ? 'current' : ''; ?>">
									<a href="leftside.php">Katalog</a>
								</li>
							</ul>
						</nav>
				