<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 29/04/2016
 * Time: 10:18 AM
 */
?>

<html xmlns="http://www.w3.org/1999/html">
<head>
	<title>Practise - Biblical Studies Creative</title>
</head>

<body id="page-top" class="index">

<!-- Navigation -->
<? include("../header.php"); ?>

<!-- Header -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="intro-text">
					<span class="name">Biblical Studies Creative</span>
					<hr class="star-light">
					<span class="skills">Practice your memory verses' with style!</span>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Portfolio Grid Section -->
<section id="intro">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Practise your memory verse!</h2>
				<hr class="star-primary">
				<? if(!isset($_POST["verse"])) :?>
					<h2>Input your verse</h2>
                    <br>
					<form role="form" method="post">
						<div class="form-group text-center">
                            <div class="col-lg-6">
							    <textarea class="form-control" rows="8" name="verse" placeholder="Paste your verse here"></textarea>
                            </div>
                        </div>
						<button type="submit" class="btn btn-success">Start practicing!</button>
					</form>
				<? endif; ?>
			</div>
		</div>
</section>

<!-- Footer -->
<footer class="text-center">
	<div class="footer-above">
		<div class="container">
			<div class="row">
				<div class="footer-col col-md-4">
					<h3>Location</h3>
					<p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
				</div>
				<div class="footer-col col-md-4">
					<h3>Around the Web</h3>
					<ul class="list-inline">
						<li>
							<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
						</li>
						<li>
							<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
						</li>
						<li>
							<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
						</li>
						<li>
							<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
						</li>
						<li>
							<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
						</li>
					</ul>
				</div>
				<div class="footer-col col-md-4">
					<h3>About Freelancer</h3>
					<p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-below">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					Copyright &copy; Your Website 2014
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visible-sm">
	<a class="btn btn-primary" href="#page-top">
		<i class="fa fa-chevron-up"></i>
	</a>
</div>

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Project Title</h2>
						<hr class="star-primary">
						<img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
						<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
						<ul class="list-inline item-details">
							<li>Client:
								<strong><a href="http://startbootstrap.com">Start Bootstrap</a>
								</strong>
							</li>
							<li>Date:
								<strong><a href="http://startbootstrap.com">April 2014</a>
								</strong>
							</li>
							<li>Service:
								<strong><a href="http://startbootstrap.com">Web Development</a>
								</strong>
							</li>
						</ul>
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Project Title</h2>
						<hr class="star-primary">
						<img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
						<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
						<ul class="list-inline item-details">
							<li>Client:
								<strong><a href="http://startbootstrap.com">Start Bootstrap</a>
								</strong>
							</li>
							<li>Date:
								<strong><a href="http://startbootstrap.com">April 2014</a>
								</strong>
							</li>
							<li>Service:
								<strong><a href="http://startbootstrap.com">Web Development</a>
								</strong>
							</li>
						</ul>
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Project Title</h2>
						<hr class="star-primary">
						<img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
						<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
						<ul class="list-inline item-details">
							<li>Client:
								<strong><a href="http://startbootstrap.com">Start Bootstrap</a>
								</strong>
							</li>
							<li>Date:
								<strong><a href="http://startbootstrap.com">April 2014</a>
								</strong>
							</li>
							<li>Service:
								<strong><a href="http://startbootstrap.com">Web Development</a>
								</strong>
							</li>
						</ul>
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Project Title</h2>
						<hr class="star-primary">
						<img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
						<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
						<ul class="list-inline item-details">
							<li>Client:
								<strong><a href="http://startbootstrap.com">Start Bootstrap</a>
								</strong>
							</li>
							<li>Date:
								<strong><a href="http://startbootstrap.com">April 2014</a>
								</strong>
							</li>
							<li>Service:
								<strong><a href="http://startbootstrap.com">Web Development</a>
								</strong>
							</li>
						</ul>
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Project Title</h2>
						<hr class="star-primary">
						<img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
						<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
						<ul class="list-inline item-details">
							<li>Client:
								<strong><a href="http://startbootstrap.com">Start Bootstrap</a>
								</strong>
							</li>
							<li>Date:
								<strong><a href="http://startbootstrap.com">April 2014</a>
								</strong>
							</li>
							<li>Service:
								<strong><a href="http://startbootstrap.com">Web Development</a>
								</strong>
							</li>
						</ul>
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Project Title</h2>
						<hr class="star-primary">
						<img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
						<p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
						<ul class="list-inline item-details">
							<li>Client:
								<strong><a href="http://startbootstrap.com">Start Bootstrap</a>
								</strong>
							</li>
							<li>Date:
								<strong><a href="http://startbootstrap.com">April 2014</a>
								</strong>
							</li>
							<li>Service:
								<strong><a href="http://startbootstrap.com">Web Development</a>
								</strong>
							</li>
						</ul>
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- jQuery -->
<script src="../bootstrap/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="../bootstrap/js/classie.js"></script>
<script src="../bootstrap/js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="../bootstrap/js/jqBootstrapValidation.js"></script>
<script src="../bootstrap/js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../bootstrap/js/freelancer.js"></script>

</body>

</html>
