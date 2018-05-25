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
		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">

			<nav id="sidebar">
				<!-- Close Sidebar Button -->
				<div id="dismiss">
				<i class="glyphicon glyphicon-arrow-left"></i>
				</div>

				<!-- Sidebar Header -->
				<div class="sidebar-header">
					<h3>Collapsible Sidebar</div>
				</div>

				<!-- Sidebar Links -->
				<ul class="list-unstyled components">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><!-- Link with dropdown items -->
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
					<ul class="collapse list-unstyled" id="homeSubmenu">
					    <li><a href="#">Page</a></li>
					    <li><a href="#">Page</a></li>
					    <li><a href="#">Page</a></li>
					</ul>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>

			<div id="content">
				<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
					<i class="glyphicon glyphicon-align-left"></i>
					Toggle Sidebar
				</button>
			</div>

			<div class="overlay"><div>
		</div>
		<div class="container">
			<div class="row my-2">
				<div class="col-lg-4 offset-lg-4 col-md-12">
					<form>
						<div class="form-group">
							<div class="input-group">
								<input type="type" class="form-control" id="search" placeholder="Google">
								<div class="input-group-prepend">
									<div class="input-group-text btn-search">
										<i class="fas fa-search"></i>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- Row 1 -->
			<div class="row my-2 align-items-center">
				<div class="col-md-3 col-sm-6">
					<div class="card card-1">
						<div class="card-body mx-auto">
							<i class="fas fa-clipboard-list fa-5x"></i>
						</div>
						<p class="text-center">To Do List</p>
					</div>
				</div>
				<div class="my-2 col-sm-12 d-block d-sm-none"></div>
				<div class="col-md-3 col-sm-6">
					<div class="card card-2">
						<div class="card-body mx-auto">
							<i class="fas fa-sticky-note fa-5x"></i>
						</div>
						<p class="text-center">Notes</p>
					</div>
				</div>
				<div class="my-2 col-sm-12 d-block d-sm-none d-none d-sm-block d-md-none"></div>
				<div class="col-md-3 col-sm-6">
					<div class="card card-3">
						<div class="card-body mx-auto">
							<i class="fas fa-star fa-5x"></i>
						</div>
						<p class="text-center">Favorite</p>
					</div>
				</div>
				<div class="my-2 col-sm-12 d-block d-sm-none"></div>
				<div class="col-md-3 col-sm-6">
					<div class="card card-4">
						<div class="card-body mx-auto">
							<i class="fas fa-cog fa-5x"></i>
						</div>
						<p class="text-center">Settings</p>
					</div>
				</div>
			</div>
			<!-- Row 2 -->
			<div class="row my-4 align-items-center">
				<div class="col-md-3 col-sm-6">
					<div class="card card-5">
						<div class="card-body mx-auto">
							<i class="fas fa-envelope fa-5x"></i>
						</div>
						<p class="text-center">Gmail</p>
					</div>
				</div>
				<div class="my-2 col-sm-12 d-block d-sm-none"></div>
				<div class="col-md-3 col-sm-6">
					<div class="card card-6">
						<div class="card-body mx-auto">
							<i class="fas fa-briefcase fa-5x"></i>
						</div>
						<p class="text-center">SBI</p>
					</div>
				</div>
				<div class="my-2 col-sm-12 d-block d-sm-none d-none d-sm-block d-md-none"></div>
				<div class="col-md-3 col-sm-6">
					<div class="card card-7">
						<div class="card-body mx-auto">
							<i class="fas fa-lightbulb fa-5x"></i>
						</div>
						<p class="text-center">Learn</p>
					</div>
				</div>
				<div class="my-2 col-sm-12 d-block d-sm-none"></div>
				<div class="col-md-3 col-sm-6">
					<div class="card card-8">
						<div class="card-body mx-auto">
							<i class="fas fa-share-alt-square fa-5x"></i>
						</div>
						<p class="text-center">Social</p>
					</div>
				</div>
			</div>
		</div>
			
		<!-- Javascript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {

			    $("#sidebar").mCustomScrollbar({
			        theme: "minimal"
			    });

			    // when opening the sidebar
			    $('#sidebarCollapse').on('click', function () {
			        // open sidebar
			        $('#sidebar').addClass('active');
			        // fade in the overlay
			        $('.overlay').fadeIn();
			        $('.collapse.in').toggleClass('in');
			        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
			    });

			   
			    // if dismiss or overlay was clicked
			    $('#dismiss, .overlay').on('click', function () {
			      // hide the sidebar
			      $('#sidebar').removeClass('active');
			      // fade out the overlay
			      $('.overlay').fadeOut();
			    });
			});
		</script>
	</body>
</html>