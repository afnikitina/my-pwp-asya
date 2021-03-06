<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>My Personal Webpage</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<!--		<link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans" rel="stylesheet">-->
		<link href="https://fonts.googleapis.com/css?family=Acme|Handlee|Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<!-- jQuery Form, Validate, Additional Methods -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha256-2Pjr1OlpZMY6qesJM68t2v39t+lMLvxwpa8QlRjJroA=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js" integrity="sha256-F6h55Qw6sweK+t7SiOJX+2bpSAa3b/fnlrVCJvmEj1A=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js" integrity="sha256-0Yg/eibVdKyxkuVo1Qwh0DspoUCHvSbm/oOoYVz32BQ=" crossorigin="anonymous"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- form validate js -->
		<script src="js/jquery-validate.js" type="application/javascript"></script>
	</head>
	<body>

		<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#"><img src="images/this_is_me.png" width="80" height="80" alt="coffee maker"></a>
				</div><!--navbar-header-->
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item">
						<a href="#about-me" class="nav-link">About Me</a>
					</li>
					<li class="nav-item">
						<a href="#portfolio" class="nav-link">Portfolio</a>
					</li>
					<li class="nav-item">
						<a href="#contact-me" class="nav-link">Contact Me</a>
					</li>
				</ul><!--navbar-nav mr-auto-->
			</div><!--		container-->
		</nav><!--navbar navbar-expand-lg navbar-light bg-light-->
		<header class="jumbotron jumbotron-fluid">
			<div class="container">
				<div class="display-1 text-md-right text-light p-5 my-5">Welcome!</div>
				<div class="text-md-right pb-5 mb-5">
					<span class="mr-3"><a class="bootstrap-link my-jumbotron" href="files/Asya-Nikitina-Resume.pdf"><i class="fas fa-file-alt text-light"></i></a></span>
					<span class="mr-3"><a class="bootstrap-link my-jumbotron" href="https://github.com/afnikitina"><i class="fab fa-github-square text-light"></i></a></span>
					<span class="mr-3"><a class="bootstrap-link my-jumbotron" href="https://www.linkedin.com/in/asya-nikitina/"><i class="fab fa-linkedin text-light"></i></a></span>
					<span><a class="bootstrap-link my-jumbotron" href="#contact-me"><i class="fas fa-envelope text-light"></i></a></span>
				</div>
				<div class="row justify-content-end pt-5 mt-5">
					<img class="img-fluid rounded-circle float-md-right" src="images/asya.jpg" alt="asya">
				</div>
			</div><!--container-->
		</header>
		<main>
			<!--About Me Section -->
			<section id="about-me" class="container">
				<div class="row justify-content-md-center mb-4">
					<div class="col-md-12">
						<div class="card shadow rounded">
							<div class="card-body">
								<h3 class="card-title">About Me</h3>
								<p class="card-text text-justify">Hello, my name is Asya Nikitina. I am a former chemical scientist who fell in love with coding and software development and decided to change her life and career drastically and without looking back. I still love solving challenging problems, but this time instead of synthesizing new compounds and studying highly reactive organic molecules, I write computer programs and create awesome websites.</p>
							</div><!--card-body-->
						</div><!--card-->
					</div><!--col-md-12-->
				</div><!--row justify-content-md-center mb-4-->
				<div class="row justify-content-md-center mb-4">
					<div class="col-md-4">
						<div class="card h-100 shadow rounded">
							<div class="card-body p-3">
								<h3 class="card-title">Education</h3>
								<p class="card-text text-justify">I earned a master’s degree in computer science at <a href="https://www.unr.edu/cse" class="card-link text-info">the University of Nevada Reno</a> and currently I am finishing<a href="https://deepdivecoding.com/fullstack/" class="card-link text-dark">the deep dive full stack web development coding bootcamp</a> at<a href="https://www.cnm.edu/" class="card-link text-info">the Central New Mexico Community College</a>, Albuquerque, NM.</p>
							</div><!--card-body-->
						</div><!--card-->
					</div><!--col-md-4-->
					<div class="col-md-8">
						<div class="card h-100 shadow rounded">
							<div class="card-body p-3">
								<h3 class="card-title">Technical Skills</h3>
								<p class="card-text"><span class="text-success">Programming Languages:</span> JavaScript, PHP, Perl, C++, C++/CLI.NET, C#.NET</p>
								<p class="card-text"><span class="text-success">Web Development:</span> HTML, CSS, JavaScript, Angular, Bootstrap, PHP</p>
								<p class="card-text"><span class="text-success">Databases:</span> MySQL, MariaDB, Oracle</p>
								<p class="card-text"><span class="text-success">Subversion and Virtualization:</span> Git, VMWare</p>
								<p class="card-text"><span class="text-success">Functional Skills:</span> Object-oriented programming, functional programming, machine learning, pattern recognition, clustering, software development lifecycle, UML, test-driven development</p>
							</div><!--card-body-->
						</div><!--card h-100 shadow rounded-->
					</div><!--col-md-8-->
				</div><!--row justify-content-md-center mb-4-->
			</section><!--container-->
			<!--Portfolio Section-->
			<section id="portfolio" class="container">
				<div class="row justify-content-md-center mb-4">
					<div class="col-md-12">
						<div class="card shadow rounded">
							<div class="card-body">
								<h3 class="card-title">Portfolio</h3>
								<p class="card-text">These are two of my software development projects. See my most recent code on GitHub.<span class="float-right"><a class="bootstrap-link" href="https://github.com/afnikitina"><i class="fab fa-github-square"></i></a></span></p>
							</div><!--card-body-->
						</div><!--card-->
					</div><!--col-md-12-->
				</div><!--row justify-content-md-center mb-4-->
				<div class="row justify-content-md-center mb-4">
					<div class="col-md-6">
						<div class="card h-100 shadow rounded">
							<img class="card-img-top img-fluid" src="images/project1.jpg" alt="project1">
							<div class="card-body p-3">
								<h3 class="card-title text-center text-danger mt-3">Pattern Recognition Algorithms</h3>
								<h5 class="card-subtitle mt-3 text-center text-success">Design and Implementation of Pattern Recognition Algorithms for the Detection of Chemicals in the Air</h5>
								<p class="card-text text-justify mt-3">I collected real-life sensory data, established the strategy and procedure for feature selection, designed and implemented in C++ five different pattern recognition algorithms, and tested all my implementations using benchmark data sets and the collected experimental data. Four out of five algorithms, after being trained on the limited set of labeled data, were capable of performing recognition of unseen before samples with high classification accuracy.</p>
							</div><!--card-body p-3-->
						</div><!--card-->
					</div><!--col-md-6-->
					<div class="col-md-6">
						<div class="card h-100 shadow rounded">
							<img class="card-img-top img-fluid" src="images/puppy.jpg" alt="project2">
							<div class="card-body p-3">
								<h3 class="card-title text-center text-danger mt-3">Lost Paws</h3>
								<h5 class="card-subtitle mt-3 text-center text-success">Helping Reunite Lost Pets with Their Owners</h5>
								<p class="card-text text-justify mt-3">I am a part of a team of four web developers who have been working on this project. We are using Angular 6 for the front-end implementation and PHP 7 for implementing the server-side functionality of our application. This application has many useful features allowing people to report their lost pets, post information about found animals, search our database of lost and found animals using various options, exchange comments with other website visitors about lost, found, and recently seen pets, and more importantly, it helps reunite lost pets with their owners.</p>
								<p>Here is our project on GitHub&nbsp;&nbsp;<a class="bootstrap-link" href="https://github.com/jisbell347/lost-paws"><i class="fab fa-github-square"></i></a> and live online&nbsp;&nbsp;<a class="bootstrap-link" href="https://bootcamp-coders.cnm.edu/~jisbell1/lost-paws/public_html/"><i class="fas fa-desktop"></i> <i class="fas fa-mobile-alt"></i></a></p>
							</div><!--card-body p-3-->
						</div><!--card-->
					</div><!--col-md-6-->
				</div><!--row justify-content-md-center mb-4-->
			</section><!--container-->

			<!--Contact Me Form-->
			<div id="contact-me" class="container">
				<div class="card shadow rounded contact-card">
					<form id="contact-form" action="php/mailer.php" method="post">
						<div class="card-body">
							<div class="container">
								<div class="row justify-content-md-center my-4">
									<div class="col-md-6">
										<h3 class="card-title">Contact Me</h3>
										<div class="form-group">
											<label class="control-label" for="name">Name <span class="text-danger">*</span></label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-user text-primary"></i></span>
												</div><!--input-group-prepend-->
												<input type="text" class="form-control" id="name" name="name" placeholder="Please enter your first and last name." required />
											</div><!--input-group-->
										</div><!--form-group-->
										<div class="form-group">
											<label class="control-label" for="email">Email <span class="text-danger">*</span></label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-envelope text-primary"></i></span>
												</div><!--input-group-prepend-->
												<input type="text" class="form-control" id="email" name="email" placeholder="Please enter your email address." aria-describedby="emailHelp" required />
											</div><!--	input-group-->
											<small id="emailHelp" class="form-text text-muted">I'll never share your email address with anyone else.</small>
										</div><!--	form-group-->
										<div class="form-group">
											<label class="control-label" for="subject">Subject</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-tag text-primary"></i></span>
												</div>
												<input type="text" class="form-control" id="subject" name="subject" placeholder="You may enter a subject of your message (optional)."  />
											</div><!--input-group-->
										</div><!--form-group-->
										<div class="form-group">
											<label class="control-label" for="message">Message <span class="text-danger">*</span></label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-comment text-primary"></i></span>
												</div>
												<textarea class="form-control" rows="5" id="message" name="message" placeholder="Please enter your message here." required></textarea>
											</div><!--input-group-->
										</div><!--form-group-->
										<div class="form-group">
											<div class="g-recaptcha" data-sitekey="6Lekam0UAAAAAHZRc3RfTjQIa0XtezD-UUzyBegy"></div>
										</div><!--form-group-->
										<div class="form-group">
											<button type="submit" class="btn btn-primary text-light contact-btn mr-3"><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;Send</button>
											<button type="reset" class="btn btn-warning text-light contact-btn"><i class="fas fa-undo"></i>&nbsp;&nbsp;Reset</button>
										</div><!--form-group-->
									</div><!--	col-md-6-->
								</div><!--row justify-content-md-center mb-4-->
							</div><!--container-->
						</div><!--card-body-->
					</form>
					<div id="output-area"></div>
				</div><!--card shadow rounded contact-card	-->
			</div><!--container-->
		</main>
		<footer class="footer text-white-50 bg-dark py-2">
			<div class="container text-center">
				Connect with me on LinkedIn.&nbsp;&nbsp;<a class="bootstrap-link my-footer" href="https://www.linkedin.com/in/asya-nikitina-aa083216a/"><i class="fab fa-linkedin"></i></a>
			</div>
		</footer>
	</body>
</html>