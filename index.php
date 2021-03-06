<!doctype html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Custom Homepage</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- Icons -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<!-- Angular JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<link rel="shortcut icon" href="img/homepage_logo.svg">

	</head>
	<body>
		<div id="sidebar" class="bg-dark sbar-o">
			<div id="sidebar-header" class="row px-2 py-2 bg-1">
				<div class="col-8">
					<p id="sidebar-title" class="h2 text-white"></p>
				</div>
				<div class="col-4 text-right">
					<button id="close" class="btn text-white metro-border">
						<i class="fa fa-times fa-1x"></i>
					</button>
				</div>
			</div>
			<?php include'todo.php'; ?>
		</div>
		<div class="container" ng-app="">
			<div class="row my-2">
				<div class="col-lg-4 offset-lg-4 col-md-12">
					<form>
						<div class="form-group">
							<div class="input-group">
								<input type="type" class="form-control" id="search" placeholder="Google">
								<div class="input-group-prepend">
									<a href="index-1.0.php" class="input-group-text btn-search">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- Row 1 -->
			<div class="row my-2 align-items-center">
				<div class="col-md-3 col-sm-6">
					<div id="todo" href="" class="card bg-1">
						<div class="card-body mx-auto">
							<i class="fas fa-clipboard-list fa-5x"></i>
						</div>
						<p class="text-center" id="todo-caption">To Do List</p>
					</div>
				</div>
				<div class="my-2 col-sm-12 d-block d-sm-none"></div>
				<div class="col-md-3 col-sm-6">
					<div id="notes" href="" class="card bg-2">
						<div class="card-body mx-auto">
							<i class="fas fa-sticky-note fa-5x"></i>
						</div>
						<p class="text-center" id="notes-caption">Notes</p>
					</div>
				</div>
				<div class="my-2 col-sm-12 d-block d-sm-none d-none d-sm-block d-md-none"></div>
				<div class="col-md-3 col-sm-6">
					<div id="favorite" href="" class="card bg-3">
						<div class="card-body mx-auto">
							<i class="fas fa-star fa-5x"></i>
						</div>
						<p class="text-center" id="favorite-caption">Favorite</p>
					</div>
				</div>
				<div class="my-2 col-sm-12 d-block d-sm-none"></div>
				<div class="col-md-3 col-sm-6">
					<div id="settings" href="" class="card bg-4">
						<div class="card-body mx-auto">
							<i class="fas fa-cog fa-5x"></i>
						</div>
						<p class="text-center" id="settings-caption">Settings</p>
					</div>
				</div>
			</div>
			<!-- Row 2 -->
			<div class="row my-4 align-items-center">
				<div class="col-md-3 col-sm-6">
					<div id="gmail" class="card bg-5">
						<div class="card-body mx-auto">
							<i class="fas fa-envelope fa-5x"></i>
						</div>
						<p class="text-center" id="gmail-caption">Gmail</p>
					</div>
				</div>
				<div class="my-2 col-sm-12 d-block d-sm-none"></div>
				<div class="col-md-3 col-sm-6">
					<div id="sbi" class="card bg-6">
						<div class="card-body mx-auto">
							<i class="fas fa-briefcase fa-5x"></i>
						</div>
						<p class="text-center" id="sbi-caption">SBI</p>
					</div>
				</div>
				<div class="my-2 col-sm-12 d-block d-sm-none d-none d-sm-block d-md-none"></div>
				<div class="col-md-3 col-sm-6">
					<div id="learn" class="card bg-7">
						<div class="card-body mx-auto">
							<i class="fas fa-lightbulb fa-5x"></i>
						</div>
						<p class="text-center" id="learn-caption">Learn</p>
					</div>
				</div>
				<div class="my-2 col-sm-12 d-block d-sm-none"></div>
				<div class="col-md-3 col-sm-6">
					<div id="social" class="card bg-8">
						<div class="card-body mx-auto">
							<i class="fas fa-share-alt-square fa-5x"></i>
						</div>
						<p class="text-center" id="social-caption">Social</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Javascript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
		<!-- Custom Script -->
		<script type="text/javascript" src="js/custom.js"></script>
	</body>
</html>