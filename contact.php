<!--START HEAD & HEADER.
------------------------------------------------------------>
	<!-- ALL PAGES -  -->
	<?php include "templates/head-start.php"; ?>

	
	<!-- ALL PAGES -  -->
	<?php include "templates/head-customCSS1.php"; ?>
	<!-- CUSTOM CSS - INDEX -->
	<?php include "templates/head-customCSS2.php"; ?>
	<!-- CUSTOM CSS - GALLERY -->
	<?php include "templates/head-customCSS3.php"; ?>

	
	<!-- ALL PAGES -  -->
	<?php include "templates/head-end.php"; ?>


<!--END HEAD & HEADER.
------------------------------------------------------------>


<!--START BODY.
------------------------------------------------------------>
<body>
	<!--banner-->
	<div class="banner">
		<div class="container">

			<!--header-->
			<?php include "templates/banner-nav.php"; ?>
			<!--//header-->

			<!-- ALL PAGES -  -->
			<?php //include "templates/banner-text.php"; ?>
			<!-- CUSTOM BANNER TEXT - INDEX -->
			<?php include "templates/banner-text-custom1.php"; ?>

		</div>	
	</div>	
	<!--//banner--> 

<!--END BANNER.
-------------------------------->

<main>
	<!--contact-->
	<div class="contact">
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">How To Find Us</h3>
			<iframe class="wow zoomIn animated animated" data-wow-delay=".5s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57537.641430789925!2d-74.03215321337959!3d40.719122105634035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1456152197129" allowfullscreen=""></iframe>
		</div>	
	</div> 
	<div class="address"><!--address-->
		<div class="container">
			<div class="address-row">
				<div class="col-md-6 address-left wow agile fadeInLeft animated" data-wow-delay=".5s">
					<div class="address-grid">
						<h4 class="wow fadeIndown animated" data-wow-delay=".5s">DROP US A LINE </h4>
						<form>
							<input class="wow fadeIndown animated" data-wow-delay=".6s" type="text" placeholder="Name" required="">
							<input class="wow fadeIndown animated" data-wow-delay=".7s" type="text" placeholder="Email" required="">
							<input class="wow fadeIndown animated" data-wow-delay=".8s" type="text" placeholder="Subject" required="">
							<textarea class="wow fadeIndown animated" data-wow-delay=".8s" placeholder="Message" required=""></textarea>
							<input class="wow fadeIndown animated" data-wow-delay=".9s" type="submit" value="SEND">
						</form>
					</div>
				</div>
				<div class="col-md-6 address-right">
					<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
						<h4>ADDRESS</h4>
						<p>123 San Sebastian, CG 09-123 Ba,Block(#456),Hill Towers 4567 New York City USA.</p>
					</div>
					<div class="address-info address-mdl wow fadeInRight animated" data-wow-delay=".7s">
						<h4>PHONE </h4>
						<p>+222 111 333 4444</p>
						<p>+222 111 333 5555</p>
					</div>
					<div class="address-info agileits-info wow fadeInRight animated" data-wow-delay=".6s">
						<h4>MAIL</h4>
						<p><a href="mailto:example@mail.com"> mail@example.com</a></p>
						<p><a href="mailto:example@mail.com"> mail2@example.com</a></p>
					</div>
				</div>
			</div>	
		</div>	
	</div>
	<!--//contact--> 

</main>

<!--END BODY.
------------------------------------------------------------>

<!--START FOOTER.
------------------------------------------------------------>
	<!-- ALL PAGES - footer -->
	<?php include "templates/footer.php"; ?>


<!--END FOOTER.
------------------------------------------------------------>

<!--START FOOTER.
------------------------------------------------------------>
	<!-- gallery extra scrolling shit -->
	<?php //include("templates/startSmoothScrolling.php"); ?>

	<!-- ALL PAGES - scrolling shit -->
	<?php include("templates/smoothScrollingOfMoveUp.php"); ?>

<!--END FOOTER.
------------------------------------------------------------>
