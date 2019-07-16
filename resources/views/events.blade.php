<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Newsbit</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">

	<!-- Stylesheets -->

	<link href="{{ ('assets/frontend/plugin-frameworks/bootstrap.css')}}" rel="stylesheet">

	<link href="{{ ('assets/frontend/fonts/ionicons.css')}}" rel="stylesheet">

	<link href="{{ ('assets/frontend/common/styles.css')}}" rel="stylesheet">


</head>
<body>

	<header>
		<div class="bg-191">
			<div class="container">
				<div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">

					<ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
						<li><a class="pl-0 pl-sm-10" href="#">About</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">Submit Press Release</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
						<li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="ion-social-google"></i></a></li>
						<li><a href="#"><i class="ion-social-instagram"></i></a></li>
						<li><a href="#"><i class="ion-social-bitcoin"></i></a></li>
					</ul>

				</div><!-- top-menu -->
			</div><!-- container -->
		</div><!-- bg-191 -->

		<div class="container">
			<a class="logo" href="index.html"><img src="{{ ('assets/frontend/images/logo-black.png')}}" alt="Logo"></a>

			<a class="right-area src-btn" href="#" >
				<i class="active src-icn ion-search"></i>
				<i class="close-icn ion-close"></i>
			</a>
			<div class="src-form">
				<form>
					<input type="text" placeholder="Search here">
					<button type="submit"><i class="ion-search"></i></a></button>
				</form>
			</div><!-- src-form -->


			<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

			<ul class="main-menu" id="main-menu">
				<li><a href="/news">NEWS</a></li>
				<li class="drop-down"><a href="/guides">GUIDES & ANALYTICS<i class="ion-arrow-down-b"></i></a>
					<ul class="drop-down-menu drop-down-inner">
						<li><a href="#">PAGE 1</a></li>
						<li><a href="#">PAGE 2</a></li>
					</ul>
				</li>
				<li><a href="/events">EVENTS</a></li>
				<li><a href="/explained">EXPLAINED</a></li>
				<li><a href="/icon">ICON CLAENDER</a></li>
			</ul>
			<div class="clearfix"></div>
		</div><!-- container -->
	</header>


	<section class="ptb-0">
		<div class="mb-30 brdr-ash-1 opacty-5"></div>
		<div class="container">
			<a class="mt-10" href="index.html"><i class="mr-5 ion-ios-home"></i>Home<i class="mlr-10 ion-chevron-right"></i></a>
			<a class="mt-10 color-ash" href="04_FAQs.html">FAQs</a>
		</div><!-- container -->
	</section>


	<section class="pb-20">
		<div class="container">
			<h2 class="mb-50"><b>FAQs</b></h2>
			<a class="btn-fill-primary btn-b-md plr-30 mb-10 mr-5" href="#"><b>GENERAL</b></a>
			<a class="btn-fill-grey btn-b-md plr-25 mb-10 mr-5" href="#"><b>BCC LENDING</b></a>
			<a class="btn-fill-grey btn-b-md plr-25 mb-10 mr-5" href="#"><b>BCC Exchange</b></a>
			<a class="btn-fill-grey btn-b-md plr-25 mb-10 " href="#"><b>BCC Staking</b></a>
		</div><!-- container -->
	</section>

	<section class="pt-0">
		<div class="container">

			<div class="accordian">
				<h5><a data-accordian="#accordian-1" class="a-title" href="#">
					<b>What is Bitcoin?</b><i class="ion-plus"></i></a></h5>

				<div class="a-body" id="accordian-1">
					<div class="a-body-inner">
						<p>You can read our safety and security guide which explains how to best secure your account.
							But for the sake of convenience, here are a few tips that will protect you against the majority of
							phishing and hacking attempts: </p>
						<a class="mt-15 link-brdr-btm-primary color-primary" href="#"><b>Read more</b></a>
					</div><!-- a-body-inner -->
				</div><!-- a-body -->
			</div><!-- accordian -->

			<div class="accordian">
				<h5><a data-accordian="#accordian-2" class="a-title" href="#">
					<b>How can I increase the security of my account?</b><i class="ion-minus"></i></a></h5>

				<div class="a-body active" id="accordian-2">
					<div class="a-body-inner">
						<p>You can read our safety and security guide which explains how to best secure your account.
							But for the sake of convenience, here are a few tips that will protect you against the majority of
							phishing and hacking attempts: </p>
						<a class="mt-15 link-brdr-btm-primary color-primary" href="#"><b>Read more</b></a>
					</div><!-- a-body-inner -->
				</div><!-- a-body -->
			</div><!-- accordian -->

			<div class="accordian">
				<h5><a data-accordian="#accordian-3" class="a-title" href="#">
					<b>What Can You Buy with Bitcoin?</b><i class="ion-plus"></i></a></h5>

				<div class="a-body" id="accordian-3">
					<div class="a-body-inner">
						<p>You can read our safety and security guide which explains how to best secure your account.
							But for the sake of convenience, here are a few tips that will protect you against the majority of
							phishing and hacking attempts: </p>
						<a class="mt-15 link-brdr-btm-primary color-primary" href="#"><b>Read more</b></a>
					</div><!-- a-body-inner -->
				</div><!-- a-body -->
			</div><!-- accordian -->

			<div class="accordian">
				<h5><a data-accordian="#accordian-4" class="a-title" href="#">
					<b>How do Bitcoin Transactions Work?</b><i class="ion-plus"></i></a></h5>

				<div class="a-body" id="accordian-4">
					<div class="a-body-inner">
						<p>You can read our safety and security guide which explains how to best secure your account.
							But for the sake of convenience, here are a few tips that will protect you against the majority of
							phishing and hacking attempts: </p>
						<a class="mt-15 link-brdr-btm-primary color-primary" href="#"><b>Read more</b></a>
					</div><!-- a-body-inner -->
				</div><!-- a-body -->
			</div><!-- accordian -->

			<div class="accordian">
				<h5><a data-accordian="#accordian-5" class="a-title" href="#">
					<b>Who is Satoshi Nakamoto?</b><i class="ion-plus"></i></a></h5>

				<div class="a-body" id="accordian-5">
					<div class="a-body-inner">
						<p>You can read our safety and security guide which explains how to best secure your account.
							But for the sake of convenience, here are a few tips that will protect you against the majority of
							phishing and hacking attempts: </p>
						<a class="mt-15 link-brdr-btm-primary color-primary" href="#"><b>Read more</b></a>
					</div><!-- a-body-inner -->
				</div><!-- a-body -->
			</div><!-- accordian -->

			<div class="accordian">
				<h5><a data-accordian="#accordian-6" class="a-title" href="#">
					<b>What are Bitcoin Mining Pools?</b><i class="ion-plus"></i></a></h5>

				<div class="a-body" id="accordian-6">
					<div class="a-body-inner">
						<p>You can read our safety and security guide which explains how to best secure your account.
							But for the sake of convenience, here are a few tips that will protect you against the majority of
							phishing and hacking attempts: </p>
						<a class="mt-15 link-brdr-btm-primary color-primary" href="#"><b>Read more</b></a>
					</div><!-- a-body-inner -->
				</div><!-- a-body -->
			</div><!-- accordian -->

			<div class="accordian">
				<h5><a data-accordian="#accordian-7" class="a-title" href="#">
					<b>How Does Cloud Mining Bitcoin Work?</b><i class="ion-plus"></i></a></h5>

				<div class="a-body" id="accordian-7">
					<div class="a-body-inner">
						<p>You can read our safety and security guide which explains how to best secure your account.
							But for the sake of convenience, here are a few tips that will protect you against the majority of
							phishing and hacking attempts: </p>
						<a class="mt-15 link-brdr-btm-primary color-primary" href="#"><b>Read more</b></a>
					</div><!-- a-body-inner -->
				</div><!-- a-body -->
			</div><!-- accordian -->

			<div class="accordian">
				<h5><a data-accordian="#accordian-8" class="a-title" href="#">
					<b>What are pools how and how to join them?</b><i class="ion-plus"></i></a></h5>

				<div class="a-body" id="accordian-8">
					<div class="a-body-inner">
						<p>You can read our safety and security guide which explains how to best secure your account.
							But for the sake of convenience, here are a few tips that will protect you against the majority of
							phishing and hacking attempts: </p>
						<a class="mt-15 link-brdr-btm-primary color-primary" href="#"><b>Read more</b></a>
					</div><!-- a-body-inner -->
				</div><!-- a-body -->
			</div><!-- accordian -->

			<div class="accordian">
				<h5><a data-accordian="#accordian-9" class="a-title" href="#">
					<b>What is the Difference Between Litecoin and Bitcoin?</b><i class="ion-plus"></i></a></h5>

				<div class="a-body" id="accordian-9">
					<div class="a-body-inner">
						<p>You can read our safety and security guide which explains how to best secure your account.
							But for the sake of convenience, here are a few tips that will protect you against the majority of
							phishing and hacking attempts: </p>
						<a class="mt-15 link-brdr-btm-primary color-primary" href="#"><b>Read more</b></a>
					</div><!-- a-body-inner -->
				</div><!-- a-body -->
			</div><!-- accordian -->

			<div class="accordian">
				<h5><a data-accordian="#accordian-10" class="a-title" href="#">
					<b>How Does Blockchain Technology Work?</b><i class="ion-plus"></i></a></h5>

				<div class="a-body" id="accordian-10">
					<div class="a-body-inner">
						<p>You can read our safety and security guide which explains how to best secure your account.
							But for the sake of convenience, here are a few tips that will protect you against the majority of
							phishing and hacking attempts: </p>
						<a class="mt-15 link-brdr-btm-primary color-primary" href="#"><b>Read more</b></a>
					</div><!-- a-body-inner -->
				</div><!-- a-body -->
			</div><!-- accordian -->

		</div><!-- container -->
	</section>


	<footer class="bg-191 color-ccc">

		<div class="container">
			<div class="pt-50 pb-20 pos-relative">
				<div class="abs-tblr pt-50 z--1 text-center">
					<div class="h-80 pos-relative"><img class="opacty-1 h-100 w-auto" src="{{ ('assets/frontend/images/map.png')}}" alt=""></div>
				</div>
				<div class="row">

					<div class="col-sm-4">
						<div class="mb-30">
							<a href="#"><img src="{{ ('assets/frontend/images/logo-white.png')}}"></a>
							<p class="mtb-20 color-ccc">Bit coin is an open-source, peer-to-peer, digital decentralized cryptocurrency.
							Powered by blockchain technology, its defining characteristic is</p>
							<p class="color-ash"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
						</div><!-- mb-30 -->
					</div><!-- col-md-4 -->

					<div class="col-sm-4">
						<div class="mb-30">
							<h5 class="color-primary mb-20"><b>MOST POPULAR</b></h5>
							<div class="mb-20">
								<a class="color-white" href="#"><b>Its Make or Break Time for Bitcoin</b></a>
								<h6 class="mt-10">Jan 25, 2018</h6>
							</div>
							<div class="brdr-ash-1 opacty-2 mr-30"></div>
							<div class="mt-20">
								<a class="color-white" href="#"><b>Bitcoin's roller coster ride is not over</b></a>
								<h6 class="mt-10">Jan 25, 2018</h6>
							</div>
						</div><!-- mb-30 -->
					</div><!-- col-md-4 -->

					<div class="col-sm-4">
						<div class="mb-30">
							<h5 class="color-primary mb-20"><b>MOST POPULAR</b></h5>
							<div class="mb-20">
								<a class="color-white" href="#"><b>Its Make or Break Time for Bitcoin</b></a>
								<h6 class="mt-10">Jan 25, 2018</h6>
							</div>
							<div class="brdr-ash-1 opacty-2 mr-30"></div>
							<div class="mt-20">
								<a class="color-white" href="#"><b>Bitcoin's roller coster ride is not over</b></a>
								<h6 class="mt-10">Jan 25, 2018</h6>
							</div>
						</div><!-- mb-30 -->
					</div><!-- col-md-4 -->

				</div><!-- row -->
			</div><!-- ptb-50 -->

			<div class="brdr-ash-1 opacty-2"></div>

			<div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">

				<ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
					<li><a class="pl-0 pl-sm-10" href="#">Terms & Conditions</a></li>
					<li><a href="#">Privacy policy</a></li>
					<li><a href="#">Jobs advertising</a></li>
					<li><a href="#">Contact us</a></li>
				</ul>
				<ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
					<li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
					<li><a href="#"><i class="ion-social-twitter"></i></a></li>
					<li><a href="#"><i class="ion-social-google"></i></a></li>
					<li><a href="#"><i class="ion-social-instagram"></i></a></li>
					<li><a href="#"><i class="ion-social-bitcoin"></i></a></li>
				</ul>

			</div><!-- oflow-hidden -->
		</div><!-- container -->
	</footer>

	<!-- SCIPTS -->

	<script src="{{ ('assets/frontend/plugin-frameworks/jquery-3.2.1.min.js')}}"></script>

	<script src="{{ ('assets/frontend/plugin-frameworks/tether.min.js')}}"></script>

	<script src="{{ ('assets/frontend/plugin-frameworks/bootstrap.js')}}"></script>

	<script src="{{ ('assets/frontend/common/scripts.js')}}"></script>

</body>
</html>
