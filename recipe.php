<!--START HEAD & HEADER.
------------------------------------------------------------>
	<!-- ALL PAGES -  -->
	<?php //include "templates/head-start.php"; ?>

	
	<!-- ALL PAGES -  -->
	<?php include "templates/head-customCSS1.php"; ?>
	<!-- CUSTOM CSS - INDEX -->
	<?php //include "templates/head-customCSS2.php"; ?>
	<!-- CUSTOM CSS - GALLERY -->
	<?php //include "templates/head-customCSS3.php"; ?>

	
	<!-- ALL PAGES -  -->
	<?php //include "templates/head-end.php"; ?>

<body>
<!--END HEAD & HEADER.
------------------------------------------------------------>


<!--START BODY.
------------------------------------------------------------>
<!--_______ START BANNER.________ -->
	<div class="banner">
		<div class="container">

			<!--header-->
			<?php //include "templates/banner-nav.php"; ?>
			<!--//header-->

			<!-- ALL PAGES -  -->
			<?php //include "templates/banner-text.php"; ?>
			<!-- CUSTOM BANNER TEXT - INDEX -->
			<?php //include "templates/banner-text-custom1.php"; ?>

		</div>	
	</div>	

<!--_______ END BANNER.________ -->
<!--_______ START MAIN.________ -->
<main>
    <!--gallery-->
<!-- 	<div class="gallery">
		<div class="container">
			<h3 class="title">Gallery</h3> 
			<div class="gallery-info">
				<div class="col-md-6 gallery-grids gallery-two wthree">
					<a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also remaining essentially unchanged. ">
						<img src="images/g3.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="b-wrapper">
							<h5>Our Specials</h5>
						</div>
					</a>
				</div>
				<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>	
		</div>	
	</div>	 -->
	<!--//gallery--> 

	<!--search field-->
	<form action="recipe.php" method="POST">
		<input type="search_string" name="search_string"/>
		<input type="submit" value="search"/>
	</form>
	<!--//search field-->
	
	<!-- search output -->
	<div class="container-card">
		<?php include('apiData.php'); ?>
	</div>
	<!-- //search output -->

</main>
<!--_______ END MAIN.________ -->

<!--END BODY.
------------------------------------------------------------>



<!--START FOOTER.
------------------------------------------------------------>
	<!-- ALL PAGES - footer -->
	<?php //include "templates/footer.php"; ?>

<!--END FOOTER.
------------------------------------------------------------>

<!--START FOOTER.
------------------------------------------------------------>
	<!-- CUSTOM - ADDITIONAL scrolling shit for gallery -->
	<?php //include("templates/startSmoothScrolling.php"); ?>

	<!-- ALL PAGES - scrolling shit -->
	<?php //include("templates/smoothScrollingOfMoveUp.php"); ?>

<!--END FOOTER.
------------------------------------------------------------>
