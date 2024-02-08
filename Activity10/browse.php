<!DOCTYPE html>
<html>
<head>
	<title>Browse</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<?php
		include 'includes/modals.php';
		include 'includes/navbar.php';
	?>


	<style>
		.thumbnail img{
			width: 350px;
			height: 200px;
		}

		.thumbnail img:hover{
			opacity: .10;
		}

		.thumbnail{
			
			height: 500px;
		}
	</style>

</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="carousel slide" data-ride="carousel" id="c1"> 
					<ol class="carousel-indicators">
						<li data-target="#c1" data-slide-to="0" class="active"></li>
						<li data-target="#c1" data-slide-to="1"></li>
						<li data-target="#c1" data-slide-to="2"></li>
						<li data-target="#c1" data-slide-to="3"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="image/CoD.jpg">
							<div class="carousel-caption">
								<h1><b>NOW AVAILABLE</b></h1>
								<p></p>
							</div>
						</div>

						<div class="item">
							<img src="image/header2.jpg">
							<div class="carousel-caption">
								<h1><b>NOW AVAILABLE</b></h1>
							</div>
						</div>

						<div class="item">
							<img src="image/header3.jpg">
							<div class="carousel-caption">
								<h1><b>NOW AVAILABLE</b></h1>
							</div>
						</div>

						<div class="item">
							<img src="image/header1.jpg">
							<div class="carousel-caption">
								<h1><b>NOW AVAILABLE</b></h1>
							</div>
						</div>
					</div>

					<a href="#c1" data-slide="prev" class="left carousel-control">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>

					<a href="#c1" data-slide="next" class="right carousel-control">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>



		<div class="container">

			<div class="page-header"><h3 class="text-center"><b>Popular Release</b></h3></div>
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="image/header4.jpg" style="width: 100%;">
					<div class="caption">
						<h4 class="pull-right">&#8369 1,039.54</h4>
						<h4><a href="product.php">Tekken 8</a></h4>
						<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
						
					</div>
						<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
					
				</div>
			</div>

			<div class="col-md-4">
				<div class="thumbnail">
					<img src="image/TheLastOfUs.jpg" style="width: 100%;">
					<div class="caption">
						<h4 class="pull-right">&#8369 1,155.75</h4>
						<h4><a href="product.php">The Last of Us II</a></h4>
						<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

						
						
					</div>
					<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>

				</div>
			</div>

			<div class="col-md-4">
				<div class="thumbnail">
					<img src="image/GodOfWar.jpg" style="width: 100%;">
					<div class="caption">
						<h4 class="pull-right">&#8369 1,733.92</h4>
						<h4><a href="product.php">God Of War: Ragnarok</a></h4>
						<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
						
					</div>
					<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="thumbnail">
					<img src="image/DMC.png" style="width: 100%;">
					<div class="caption">
						<h4 class="pull-right">&#8369 2,311.96</h4>
						<h4><a href="product.php">Devil May Cry 5</a></h4>
						<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
						
					</div>
					<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="thumbnail">
					<img src="image/header1.jpg" style="width: 100%;">
					<div class="caption">
						<h4 class="pull-right">&#8369 5,784.72</h4>
						<h4><a href="product.php">Call Of Duty: MW2</a></h4>
						<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
						
					</div>
					<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="thumbnail">
					<img src="image/header2.jpg" style="width: 100%;">
					<div class="caption">
						<h4 class="pull-right">&#8369 6,695.00</h4>
						<h4><a href="product.php">Assassin's Creed Valhalla</a></h4>
						<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
						
					</div>
					<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
				</div>
			</div>
			<div class="text-center">
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item"><a class="page-link" href="#">6</a></li>
						<li class="page-item"><a class="page-link" href="#">7</a></li>
						<li class="page-item"><a class="page-link" href="#">8</a></li>
						<li class="page-item"><a class="page-link" href="#">9</a></li>
						<li class="page-item"><a class="page-link" href="#">10</a></li>
						<li class="page-item"><a class="page-link" href="#">11</a></li>
						<li class="page-item"><a class="page-link" href="#">12</a></li>
						<li class="page-item"><a class="page-link" href="#">...</a></li>
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<footer class="">
		<div class="container">
			<p class="text-center text-muted" style="padding: 10px;">Copyright © <script>document.write(new Date().getFullYear());</script>: Michael Jan Tangalin</p>
		</div>
	</footer>

</div>

</body>



</html>