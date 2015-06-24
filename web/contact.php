<!DOCTYPE HTML>

<!--

	Imagination by TEMPLATED

    templated.co @templatedco

    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)

-->

<html>

	<head>

		<title>Hot Yoga Dunedin</title>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<meta name="description" content="" />

		<meta name="keywords" content="" />

		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>

		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->

		<link href='inYoga.css' rel='stylesheet' type='text/css'>

		<link href='contactCSS.css' rel='stylesheet' type='text/css'>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

		<script src="js/skel.min.js"></script>

		<script src="js/skel-panels.min.js"></script>

		<script src="js/init.js"></script>

		<noscript>

			<link rel="stylesheet" href="css/skel-noscript.css" />

			<link rel="stylesheet" href="css/style.css" />

			<link rel="stylesheet" href="css/style-desktop.css" />

		</noscript>

	<script>

		(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>



	</head>

	<body>



	<div id="header-wrapper">



		<!-- Header -->

			<div id="header">

				<div class="container">

						

					<!-- Logo -->

						<div id="logo">

							<a href="/"><span><img src="BYD_logo.jpg" alt="BYD_logo" width="250px;" /></span></a>

						</div>

					

					<!-- Nav -->

						<nav id="nav">

							<ul>

								<li><a href="/">Home</a></li>

								<li ><a href="ourStudio">Our Studio</a></li>

								<li><a href="https://clients.mindbodyonline.com/classic/home?studioid=7268" target="_blank" style="target-new: tab;" >Live Timetable</a></li>

								<li ><a href="prices">Pricing</a></li>

								<li class="active"><a href="contact">Contact</a></li>

							</ul>

						</nav>

	

				</div>

			</div>

		<!-- Header -->



		<!-- Banner -->

			<div id="banner">

				<div class="container">

				</div>

			</div>

		<!-- /Banner -->



	</div>



	<!-- Main -->

		<div id="main">

		

			<div class="container">



				<div class="row">

					<section>

						<header>

							<h2>Contact Hot Yoga Dunedin</h2>

						</header>

						<div class="col-sm-6">

							<form class="form-horizontal" method="post">

								<input type="hidden" value="contact" name="action" ></input>

								<div class="form-group">

									<label class="col-sm-2">Name </label>

									<div class="col-sm-10">

										<input class="form-control" type="text" placeholder="Required" name="name" ></input>

									</div>									

								</div>

								<div class="form-group">

									<label class="col-sm-2">Email</label>

									<div class="col-sm-10">

										<input class="form-control" type="email" placeholder="Required" name="email" ></input>

									</div>									

								</div>

								<div class="form-group">

									<label class="col-sm-2">Message </label>

									<div class="col-sm-10">

										<textarea class="form-control" id="messageBox" rows="4" placeholder="Leave us a message...." name="message" ></textarea>

									</div>									

								</div>

								<div class="form-group">

									<div class="col-sm-10 col-sm-offset-2">

										<button class="btn btn-create" type="submit" name="submit"> Send </button>	

									</div>									

								</div>

							</form>	

								<?php

							if (isset($_POST['submit']))

							{

								$message = 'Name: ' . $_POST['name'] . "\n"

									.'Email: ' . $_POST['email'] . "\n"

									.'Message: '.$_POST['message'];

								@mail('donna@hotyogadunedin.com','Contact from hotyogadunedin.com',$message, "from: noreply@hotyogadunedin.com");

								print_r ('<dl class="dl-horizontal lead" style="width:450px !important; "><hr /> <dd> I am sorry, this service is under construction. Please email me at <a href="mailto:donna@bikramyogadunedin.com" target="_blank" style="target-new: tab;">donna@bikramyogadunedin.com</a> </dd> </dl><hr />');			

							}

						?>

							

							

						</div>

						<div class="col-sm-6">

							<dl class="dl-horizontal lead">

								<dt class="text-muted"> Call </dt>			

								<dd> (03) 477 2910 </dd> 

							</dl>

							<hr />

							<dl class="dl-horizontal lead">

								<dt class="text-muted"> Visit </dt>	

								<dd> Hot Yoga Dunedin

									<br />

									33 St Andrew St

									<br />

									Dunedin

									<br />

									New Zealand

								</dd> 

							</dl>

						</div>

						

						

						</section>

				</div>



			</div>

		</div>

	<!-- /Main -->

	

	

		

	<!-- /Featured -->



	<!-- Copyright -->

		<div id="copyright">

			<div class="container">

				Hot Yoga Dunedin

			</div>

		</div>





	</body>

</html>