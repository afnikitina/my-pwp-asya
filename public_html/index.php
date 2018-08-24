<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>My Personal Webpage</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto+Slab:300,400,700" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>

		<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#"><img src="images/this_is_me.png" width="60" height="60" alt="coffee maker"></a>
				</div><!--navbar-header-->
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item">
						<a href="#" class="nav-link">About Me</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Project 1</a>
							<a class="dropdown-item" href="#">Project 2</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Contact Me</a>
					</li>
				</ul><!--navbar-nav mr-auto-->
			</div><!--		container-->
		</nav><!--navbar navbar-expand-lg navbar-light bg-light-->


		<header class="jumbotron jumbotron-fluid">
			<div class="container">
				<div class="display-1 mb-4">Welcome!</div>

			</div>
		</header>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="text-center">Contact Me</h2>
				</div><!--		col-md-6-->
			</div><!--		row-->
			<div class="row">
				<div class="col-md-6">
					<label class="control-label" for="name">Name <span class="red-star">*</span></label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span>
						</div>
						<input type="text" class="form-control" placeholder="" aria-label="Name" name="name" aria-describedby="nameHelp" />
					</div><!--		input-group mb-3-->
<!--					<small id="nameHelp" class="form-text text-muted">Enter your your name.</small>-->
				</div><!--		col-md-6-->
			</div><!--		row-->
			<div class="row">
				<div class="col-md-6">
					<label class="control-label" for="email">Email <span class="red-star">*</span></label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>
						</div>
						<input type="text" class="form-control" placeholder="" aria-label="Email" name="email" aria-describedby="emailHelp" />
					</div><!--		input-group mb-3-->
<!--					<small id="emailHelp" class="form-text text-muted">Enter your email address.</small>-->
				</div><!--		col-md-6-->
			</div><!--		row-->
			<div class="row">
				<div class="col-md-6">
					<label class="control-label" for="subject">Subject</label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-tag" aria-hidden="true"></i>
							</span>
						</div>
						<input type="text" class="form-control" placeholder="" aria-label="Subject" name="subject" aria-describedby="subjectHelp" />
					</div><!--		input-group mb-3-->
<!--					<small id="subjectHelp" class="form-text text-muted">You may enter a subject of your message (optional).</small>-->
				</div><!--		col-md-6-->
			</div><!--		row-->
			<div class="row">
				<div class="col-md-6">
					<label class="control-label" for="subject">Message <span class="red-star">*</span></label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-comment" aria-hidden="true"></i>
							</span>
						</div>
						<textarea class="form-control" rows="5" placeholder="" aria-label="Message" name="message" aria-describedby="messageHelp"></textarea>
					</div><!--		input-group mb-3-->
<!--					<small id="subjectHelp" class="form-text text-muted">Please type your message in the box above.</small>-->
				</div><!--		col-md-6-->
			</div><!--		row-->
			<div class="g-recaptcha" data-sitekey="6Lcxg2sUAAAAAJZdNwYeK8eHm4XygGXoF6eO62kt"></div>
			<button type="button" class="btn btn-primary" onclick="submitMessage()"><div class="my-btn" style="text-align:left;"><i class="fa fa-paper-plane" style="color:white;" aria-hidden="true"></i>&nbsp;&nbsp;Send</div></button>
			<button type="button" class="btn btn-warning" onclick="resetAll()"><div class="my-btn" style="text-align:left;"><i class="fa fa-undo" style="color:white;" aria-hidden="true"></i>&nbsp;&nbsp;Reset</div></button>
		</div><!--		container-->




<!--		<footer>-->
<!--		<p class="text-center text-white-50 bg-dark py-5"></p>-->
<!--	</footer>-->

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="js/script.js" type="application/javascript"></script>
	</body>
</html>