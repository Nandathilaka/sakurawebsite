<?php include 'links.php';?>
<body>
<?php include 'loggedHeader.php';?>

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">About</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- about -->
	<div class="about">
		<div class="container">
			<h3 class="sakura_agile_header">About Us</h3>
			<div class="about-agileinfo w3layouts">
				<div class="col-md-8 about-wthree-grids grid-top">
					
					<p class="top">	Manjula Janaki commenced her business in 2007, with just Rs. 300/-. She bought 500 grams of gingelly, from which she made a few gingelly rolls and sold among the parents of the children at the montessori where she was then teaching. Located in the picturesque village of Pitakanda in the Ratnapura District, “Sakura Thala” has grown from humble beginnings to become a brand trusted by customers for its superior quality and taste.</br></br>
												Today, Manjula owns a fully mechanized production facility with 25 full-time female workers. She also has a 12-acre gingelly farm in Monaragala, with 50 farm workers. In addition to providing employment to rural women, Sakura Thala also provides a source of income to local gingelly farmers and kithul treacle tappers in the community.</br></br>
												Presently, Sakura Thala has gained a loyal customer base in several districts including Ratnapura, Kegalle, Matara, Hambantota and Colombo. By now, 35 employees are working in the company. Manjula is currently nearing completion of a new production facility which would further increase production capacity, uplift quality standards and offer improved facilities for her workers. Her vision is to become a well-recognized,
                        leading manufacturer of quality, nutritious gingelly products in Sri Lanka, with a workforce of 100 by the year 2020.</br></br> </p>

												<h1>Awards</h1>

												<div class="about-agileinfo w3layouts">
													<ul class="info">
														<li><i class="fa fa-arrow-right" aria-hidden="true"></i>මිණිපුර කිරුල හොදම විව්යසහයක රන් සම්මානය</br>
														Minipura Kirula Best Achiever Gold award</br></br></li>
														<li><i class="fa fa-arrow-right" aria-hidden="true"></i>කුඩ ව්යාපාර අංශයේ ශ්රී ලංකා වානිජ මණ්ඩලය මගින් 2016 වර්ශයේ පලාත් සිංහ සම්මානයේ ලෝකඩ පදක්කම</br>
														The Sri Lanka Chamber of Commerce's bronze medal was won by the Bronze Medal in the Provincial Lion of the year 2016.</br></br></li>
														<li><i class="fa fa-arrow-right" aria-hidden="true"></i>2015 වසරේ කාන්තා වානිජ මණ්ඩලයේ හොදම විව්යසායිකාව ජාතික මට්ටමේ රිදී සම්මානය</br>
														In the Women's Chamber of Commerce in the year 2015, the Best Dealer Award was won by the National Chamber of Commerce.</br></br></li>
														<li><i class="fa fa-arrow-right" aria-hidden="true"></i>සබරගමුව වණිජ මන්ඩලයේ කුඩා ව්යාපාර අංශයේ හොදම විව්යසායිකාව රිදී සම්මාන</br>
														Best Business Delegate of the Sabaragamuwa Chamber of Commerce Silver Awards.</br></li>
													</ul>
												</div>

											<!--banner-bottom-->


				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- about-slid -->
	<div class="about-slid agileits-sakura_layouts">
		<div class="container">
			<div class="about-slid-info">
				<h2>Lorem Ipsum is that it has a moreless normal</h2>
				<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks on the Internet tend as necessary, making this the first true generator on the Internet embarrassing hidden in the middle of text Lorem Ipsum generators on the Internet tend to repeat predefinedchunks as necessary, making this the first true generator on the.</p>
			</div>
		</div>
	</div>
	<!-- //about-slid -->
	<!-- about-team -->
	<div class="about-team">
		<div class="container">
            <div class="clearfix"> </div>
			</div>
	</div>
	<!-- //about-team -->

<!-- //footer -->
<?php include 'footer.php';?>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});

		});
</script>
<!-- //main slider-banner -->
</body>
</html>
