
<html>
<head>
<title>N.K. Worlds</title>
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!--css-->
<link href="css\bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css\style.css" rel="stylesheet" type="text/css" media="all">
<script src="https://use.fontawesome.com/0ec37dd1ee.js" defer></script>

<link rel="stylesheet" href="css/libs/animate.css">
  <link rel="stylesheet" href="css/site.css">
  <link rel="stylesheet" href="css/menu.css">
  
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js\jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<!--search jQuery-->
	<script src="js\main.js"></script>
<!--search jQuery-->
<script src="js\responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
 </script>
 <!--mycart-->
<script type="text/javascript" src="js\bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js\simpleCart.min.js"></script>
<!-- cart -->
  <!--start-rate-->
<script src="js\jstarbox.js"></script>
	<link rel="stylesheet" href="css\jstarbox.css" type="text/css" media="screen" charset="utf-8">
		<script>

(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 700;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);

</script>

<!--//End-rate-->
</head>
<body>
	<?php 
include "header.php";
?>                 	<!--header-->
                                  
		<!--banner slider
		<div class="banner-w3 wow fadeInDown">
			<div class="demo-1">            
				<div id="example1" class="core-slider core-slider__carousel example_1">
					<div class="core-slider_viewport">
						<div class="core-slider_list">
							<div class="core-slider_item">
								<img src="images\slide1.jpg" class="img-responsive" alt="">
							</div>
							 <div class="core-slider_item">
								 <img src="images\slide2.jpg" class="img-responsive" alt="">
							 </div>
							<div class="core-slider_item">
								  <img src="images\slide33.jpg" class="img-responsive" alt="">
							</div>
							<div class="core-slider_item">
								  <img src="images\slide4.jpg" class="img-responsive" alt="">
							</div>
                                                        <div class="core-slider_item">
								  <img src="images\slide5.jpg" class="img-responsive" alt="">
							</div>
                                                        <div class="core-slider_item">
								  <img src="images\slide6.jpg" class="img-responsive" alt="">
							</div>
                                                    <div class="core-slider_item">
								  <img src="images\slide7.jpg" class="img-responsive" alt="">
							</div>
                                                    <div class="core-slider_item">
								  <img src="images\slide8.jpg" class="img-responsive" alt="">
							</div>
                                                    
                                                </div>
					</div>
					<div class="core-slider_nav">
						<div class="core-slider_arrow core-slider_arrow__right"></div>
						<div class="core-slider_arrow core-slider_arrow__left"></div>
					</div>
					<div class="core-slider_control-nav"></div>
				</div>
			</div>
			<link href="css\coreSlider.css" rel="stylesheet" type="text/css">
			<script src="js\coreSlider.js"></script>
			<script>
			$('#example1').coreSlider({
			  pauseOnHover: false,
			  interval: 3000,
			  controlNavEnabled: true
			});

			</script>

		</div>	
		banner-->
			<!--content-->
		<div class="content">
			<!--banner-bottom-->
				<div class="ban-bottom-w3l">
					<div class="container">
						<div class="col-md-6 ban-bottom wow slideInRight">
							<div class="ban-top">
								<img src="images\p1.jpg" class="img-responsive" alt="">
								<div class="ban-text">
									<h4>-Bolts-</h4>
								</div>
								<!--<div class="ban-text2 hvr-sweep-to-top">
									<h4>50% <span>Off/-</span></h4>
								</div>-->
							</div>
						</div>
						<div class="col-md-6 ban-bottom3">
							<div class="ban-top wow slideInLeft">
								<img src="images\p2.jpg" class="img-responsive mng1" alt="">
								<div class="ban-text1">
									<h4>Fastners</h4>
								</div>
							</div>
							<div class="ban-img wow slideInDown ">
								<div class=" ban-bottom1">
									<div class="ban-top">
										<img src="images\p3.jpg" class="img-responsive mng1" alt="">
										<div class="ban-text1">
											<h4>Blind-Rivet</h4>
										</div>
									</div>
								</div>
								<div class="ban-bottom2">
									<div class="ban-top">
										<img src="images\p4.jpg" class="img-responsive mng3" alt="">
										<div class="ban-text1">
											<h4>Hex-Bolts</h4>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			<!--banner-bottom-->
			<!--new-arrivals-->
                        <div class="fastners_section wow fadeInUpBig">
                            		<div class="container">
                                        <h2 class="tittle">Fasteners</h2>
                                        <ul class="col-md-3">
                                            <li class="list-type l list-inline "><i class="fa fa-wrench"></i> Any Type</li>
                                            <li class="list-type l list-inline"><i class="fa fa-wrench"></i> Any Size</li> </ul>
                                        <ul class="col-md-3">
                                            
                                            <li class="list-type l list-inline"><i class="fa fa-wrench"></i>Any Head</li>
                                            <li class="list-type l list-inline"><i class="fa fa-wrench"></i>Any Thread</li>
                                        </ul>
                                        <ul class="col-md-3"> 
                                            <li class="list-type l list-inline"><i class="fa fa-wrench"></i>Any Length </li>
                                            <li class="list-type l list-inline"><i class="fa fa-wrench"></i>Any Diameter</li>
                                            

                                        </ul>
                                        <ul class="col-md-3">
                                        <li class="list-type l list-inline"><i class="fa fa-wrench"></i>Any Material </li>
                                        <li class="list-type l list-inline"><i class="fa fa-wrench"></i>Any Scope </li>
                                        </ul>
                                        </div>    
                            
                        </div>
				<div class="new-arrivals-w3agile wow slideInLeft">
					<div class="container">
						<h2 class="tittle">Best Of The Bolts</h2>
						<div class="arrivals-grids">
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div class="grid-arrival">
										<figure>		
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
												<div class="grid-img">
                                                                                                    <img src="images/bolts/b1.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img src="images/bolts/b2.jpg" class="img-responsive" alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									
									<div class="women">
										<h6><a href="single.htm">Anchor Bolt</a></h6>
										 
										 
										<a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div class="grid-arrival">
										<figure>		
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal2">
												<div class="grid-img">
                                                                                                    <img src="images/bolts/b3.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img src="images/bolts/b4.jpg" class="img-responsive" alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									
									<div class="women">
										<h6><a href="single.htm">Carrige Bolt</a></h6>
										 
										 
										<a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div class="grid-arrival">
										<figure>		
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal3">
												<div class="grid-img">
                                                                                                    <img src="images/bolts/b5.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img src="images/bolts/b6.jpg" class="img-responsive" alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									
									<div class="women">
										<h6><a href="single.htm">Hex bolts and Nuts</a></h6>
										 
										 
										<a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div class="grid-arrival">
										<figure>		
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal4">
												<div class="grid-img">
													<img src="images/bolts/b7.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img src="images/bolts/b8.jpg" class="img-responsive" alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									
									<div class="women">
										<h6><a href="single.htm">J Bolts</a></h6>
										 
										 
										<a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--new-arrivals-->
				<!--accessories-->
                             
                                <div class="site" style="padding: 30px;">
                                    <div class="container">
                                    <h2 class="tittle">Our Services</h2>
                                        <div class="sapator" style="text-align: center; margin: 25px auto;"></div>  
                                        <div class="col-md-4 o-services wow rotateInDownLeft">
                                            <a href="sourcing-services.php"><img src="images/services/1.png"></a>
                                        </div>
                                        <div class="col-md-4 o-services wow fadeInDown">
                                            <a href="consultancy.php"><img src="images/services/2.png"></a>
                                        </div>
                                        <div class="col-md-4 o-services wow rotateInDownRight">
                                            <a href="NKFasteners.php"> <img src="images/services/3.png"></a>
                                        </div>
                                        <div class="col-md-4 o-services wow slideInLeft">
                                            <a href="NKSpices.php"><img src="images/services/4.png"></a>
                                        </div>
                                        <div class="col-md-4 o-services o wow  pulse animated" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s">
                                            <a href="NKWorld.php"><img src="images/services/slogo.png"></a></a>
                                        </div>
                                        <div class="col-md-4 o-services wow slideInRight">
                                            <a href="NKphrma.php"><img src="images/services/6.png"></a>
                                        </div>
                                        <div class="col-md-4 o-services wow rollIn">
                                            <a href="NKRubber.php"><img src="images/services/7.png"></a>
                                        </div>
                                        <div class="col-md-4 o-services wow bounceInDown" data-wow-delay="500ms">
                                            <a href="NKanimation.php"><img src="images/services/8.png"></a>
                                        </div>
                                        <div class="col-md-4 o-services wow ">
                                            <a href="NKPaper.php"><img src="images/services/9.png"></a>
                                        </div>
                                    
                                    
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
			<div class="accessories-w3l wow bounceInLeft" data-wow-offset="300" style="visibility: visible; animation-name: bounceInLeft;">
				<div class="container">
                                    <h4 style="color:#FFF; font-size: 20px;text-transform: capitalize;" class="tittle">
                                        
                                        
                                        Build on a foundation of working with honesty and integrity we at N.K. Worlds introduce ourselves as quality cautious manufacturer &amp; service provider of world’s top line products.<br><br>

At N.K. Worlds we design, develop and craft business in a unique way which leads quality to the highest possible level Commitment to quality &amp; meeting delivery schedule with aggressive approach is our core identity.<br><br>

Creating customer satisfaction is our biggest achievement.<br><br>

To conclude, N.K. Worlds are in top line, renowned &amp; most trusted brand among in competitor through it’s core competencies.<br><br>

Our company’s well equipped with infrastructure caters to all client’s requirement. Material used in manufacturing of goods is top of line &amp; again there is no compromise in quality.
                                        
                                        
                                        
                                        
                                        
                                    </h4>
					<span>N.K. FASTENERS</span>
					<div class="button1">
						<a href="tel:90333 66852" class="button1"> Contact Us Now</a>
						
					</div>
				</div>
			</div>
			<!--accessories-->
			<!--Products-->
				<div class="product-agile wow slideInRight">
					<div class="container">
						<h3 class="tittle1"> New Products</h3>
						<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider">
									<li>	 
										<div class="caption">
											<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div class="grid-arrival">
										<figure>		
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
												<div class="grid-img">
                                                                                                    <img src="images/bolts/b1.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img src="images/bolts/b2.jpg" class="img-responsive" alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									
									<div class="women">
										<h6><a href="single.htm">Anchor Bolt</a></h6>
										 
										 
										<a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
									</div>
								</div>
							</div>
											<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div class="grid-arrival">
										<figure>		
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal2">
												<div class="grid-img">
                                                                                                    <img src="images/bolts/b3.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img src="images/bolts/b4.jpg" class="img-responsive" alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									
									<div class="women">
										<h6><a href="single.htm">Carrige Bolt</a></h6>
										 
										 
										<a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
									</div>
								</div>
							</div>
											<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div class="grid-arrival">
										<figure>		
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal3">
												<div class="grid-img">
                                                                                                    <img src="images/bolts/b5.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img src="images/bolts/b6.jpg" class="img-responsive" alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									
									<div class="women">
										<h6><a href="single.htm">Hex bolts and Nuts</a></h6>
										 
										 
										<a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
									</div>
								</div>
							</div>
											
                                                       <div class="col-md-3 arrival-grid simpleCart_shelfItem">
							<div class="grid-arr">
									<div class="grid-arrival">
										<figure>		
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal4">
												<div class="grid-img">
													<img src="images/bolts/b7.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img src="images/bolts/b8.jpg" class="img-responsive" alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									
									<div class="women">
										<h6><a href="single.htm">J Bolts</a></h6>
										 
										 
										<a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
									</div>
								</div>
							</div>
											<div class="clearfix"></div>
										</div>
									</li>
									<li>	 
										<div class="caption">
											<div class="col-md-3 arrival-grid simpleCart_shelfItem">
                                                                                            <div class="grid-arr">
                                                                                                            <div class="grid-arrival">
                                                                                                                    <figure>		
                                                                                                                            <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal4">
                                                                                                                                    <div class="grid-img">
                                                                                                                                          <img src="images/bolts/b9.jpg" class="img-responsive" alt="">
                                                                                                                                    </div>
                                                                                                                                    <div class="grid-img">
                                                                                                                                            <img src="images/bolts/b10.jpg" class="img-responsive" alt="">
                                                                                                                                    </div>			
                                                                                                                            </a>		
                                                                                                                    </figure>	
                                                                                                            </div>

                                                                                                            <div class="women">
                                                                                                                    <h6><a href="single.htm">Projection bolt</a></h6>
                                                                                                                     
                                                                                                                     
                                                                                                                    <a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
                                                                                                            </div>
                                                                                                    </div>
                                                                                           </div>
                                                                                            <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                                                                                             <div class="grid-arr">
                                                                                                             <div class="grid-arrival">
                                                                                                                     <figure>		
                                                                                                                             <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal4">
                                                                                                                                     <div class="grid-img">
                                                                                                                                             <img src="images/bolts/b11.jpg" class="img-responsive" alt="">
                                                                                                                                     </div>
                                                                                                                                     <div class="grid-img">
                                                                                                                                             <img src="images/bolts/b12.jpg" class="img-responsive" alt="">
                                                                                                                                     </div>			
                                                                                                                             </a>		
                                                                                                                     </figure>	
                                                                                                             </div>

                                                                                                             <div class="women">
                                                                                                                     <h6><a href="single.htm">Roofing bolts</a></h6>
                                                                                                                      
                                                                                                                      
                                                                                                                     <a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
                                                                                                             </div>
                                                                                                     </div>
                                                                                             </div>
                                                                                            <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                                                                                             <div class="grid-arr">
                                                                                                             <div class="grid-arrival">
                                                                                                                     <figure>		
                                                                                                                             <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal4">
                                                                                                                                     <div class="grid-img">
                                                                                                                                             <img src="images/bolts/b13.jpg" class="img-responsive" alt="">
                                                                                                                                     </div>
                                                                                                                                     <div class="grid-img">
                                                                                                                                             <img src="images/bolts/b14.jpg" class="img-responsive" alt="">
                                                                                                                                     </div>			
                                                                                                                             </a>		
                                                                                                                     </figure>	
                                                                                                             </div>

                                                                                                             <div class="women">
                                                                                                                     <h6><a href="single.htm">T Bolts</a></h6>
                                                                                                                      
                                                                                                                      
                                                                                                                     <a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
                                                                                                             </div>
                                                                                                     </div>
                                                                                             </div>
                                                                                            <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                                                                                             <div class="grid-arr">
                                                                                                             <div class="grid-arrival">
                                                                                                                     <figure>		
                                                                                                                             <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal4">
                                                                                                                                     <div class="grid-img">
                                                                                                                                             <img src="images/bolts/b15.jpg" class="img-responsive" alt="">
                                                                                                                                     </div>
                                                                                                                                     <div class="grid-img">
                                                                                                                                             <img src="images/bolts/b16.jpg" class="img-responsive" alt="">
                                                                                                                                     </div>			
                                                                                                                             </a>		
                                                                                                                     </figure>	
                                                                                                             </div>

                                                                                                             <div class="women">
                                                                                                                     <h6><a href="single.htm">U Bolts</a></h6>
                                                                                                                      
                                                                                                                      
                                                                                                                     <a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
                                                                                                             </div>
                                                                                                     </div>
                                                                                             </div>                
                                                       
											
											
											
											<div class="clearfix"></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<!--Products-->
			<div class="latest-w3 wow slideInLeft">
				<div class="container">
					<h3 class="tittle1">Our Varieties </h3>
					<div class="latest-grids">
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
                                                            <img src="images/varieties/Captive screw 1.jpg" class="img-responsive" alt="">
								<div class="latest-text">
									<h4>Captive screw</h4>
								</div>
								
							</div>
						</div>
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
                                                            <img src="images/varieties/Carbon-Steel-Different-Kinds-of-Confirmat-Screws.jpg" class="img-responsive" alt="">
								<div class="latest-text">
									<h4>Carbon Steel Confirmat Screws</h4>
								</div>
								
							</div>
						</div>
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
                                                            <img src="images/varieties/Studs 3.jpg" class="img-responsive" alt="">
								<div class="latest-text">
									<h4>Studs</h4>
								</div>
								
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="latest-grids">
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
                                                            <img src="images/varieties/drywall_screws.jpg" class="img-responsive" alt="">
								<div class="latest-text">
									<h4>Drywall Screws</h4>
								</div>
								
							</div>
						</div>
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
                                                            <img src="images/varieties/rivet-250x250.jpg" class="img-responsive" alt="">
								<div class="latest-text">
									<h4>Rivet</h4>
								</div>
								
							</div>
						</div>
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
                                                            <img src="images/varieties/socket set screw 2.jpg" class="img-responsive" alt="">
								<div class="latest-text">
									<h4>Socket Set Screw</h4>
								</div>
								
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<div class="new-arrivals-w3agile wow slideInRight">
					<div class="container">
						<h3 class="tittle1">Hot Deals</h3>
						<div class="arrivals-grids">
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div class="grid-arrival">
										<figure>		
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal3">
												<div class="grid-img">
                                                                                                    <img src="images/bolts/b5.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img src="images/bolts/b6.jpg" class="img-responsive" alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									
									<div class="women">
										<h6><a href="single.htm">Hex bolts and Nuts</a></h6>
										 
										 
										<a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div class="grid-arrival">
										<figure>		
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal3">
												<div class="grid-img">
                                                                                                    <img src="images/bolts/b5.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img src="images/bolts/b6.jpg" class="img-responsive" alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									
									<div class="women">
										<h6><a href="single.htm">Hex bolts and Nuts</a></h6>
										 
										 
										<a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div class="grid-arrival">
										<figure>		
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal3">
												<div class="grid-img">
                                                                                                    <img src="images/bolts/b5.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img src="images/bolts/b6.jpg" class="img-responsive" alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									
									<div class="women">
										<h6><a href="single.htm">Hex bolts and Nuts</a></h6>
										 
										 
										<a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div class="grid-arrival">
										<figure>		
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal3">
												<div class="grid-img">
                                                                                                    <img src="images/bolts/b5.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img src="images/bolts/b6.jpg" class="img-responsive" alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									
									<div class="women">
										<h6><a href="single.htm">Hex bolts and Nuts</a></h6>
										 
										 
										<a href="mailto:info@nkworlds.com" data-text="Add To Cart" class="my-cart-b item_add">Inquiry</a></font>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--new-arrivals-->
		</div>
		<!--content-->
		<!---footer--->
				<?php 
				include "footer.php";
				?>
				<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="news-gr">
								<div class="col-md-5 new-grid1">
								<img src="images/bolts/b1.jpg" class="img-responsive" alt="">
								</div>
									<div class="col-md-7 new-grid">
										<h5>Anchor Bolts</h5>
										<h6>Quick Overview</h6>
										<span>We are reckoned as prominent manufacturer, supplier and exporter of Anchor Bolts. Our Anchor Bolts are highly demanded among our customer for its robust on construction and long lasting Performance 
                                                                                    Our Anchor Bolts have wide application in automobile parts and in various Industrial Establishments 
                                                                                    Apart from that these Anchor bolts are available to you with the leading Industrial rates. 
                                                                                </span>
										<div class="color-quality">
											<div class="color-quality-left">
												<h6>Sizes  : </h6>
												<ul>
													<li><a href="#"><span></span>M3</a></li>
													<li><a href="#" class="brown"><span></span>M80</a></li>
													
												</ul>
											</div>
											<div class="color-quality-right">
												<h6>Quality :</h6>
												<div class="quantity"> 
													<div class="quantity-select">                           
														<div class="entry value-minus1">&nbsp;</div>
														<div class="entry value1"><span>1</span></div>
														<div class="entry value-plus1 active">&nbsp;</div>
													</div>
												</div>
												<!--quantity-->
														<script>
														$('.value-plus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
															divUpd.text(newVal);
														});

														$('.value-minus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
															if(newVal>=1) divUpd.text(newVal);
														});
														</script>
													<!--quantity-->
											</div>
											<div class="clearfix"> </div>
										</div>
									<div class="women">
										<span class="size">Standards :- DIN, ISO, IS, BS, ASTM </span>
										   
										<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png"><a href="mailto:info@nkworlds.com"><font color="white">Inquiry</a></font></button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="news-gr">
								<div class="col-md-5 new-grid1">
                                                                    <img src="images/bolts/b3.jpg" class="img-responsive" alt="">
								</div>
									<div class="col-md-7 new-grid">
										<h5>Carriage Bolts</h5>
										<h6>Quick Overview</h6>
										<span>We are engage in offering wide range of carriage bolts, which are available in various specifications. This carriage Bolts are manufactured by using the higher quality material as it needs to be highly durable and long lasting in Nature. 
                                                                                    We are manufacturing the carriage bolts with the special care of the thread and head of the carriage bolts. The sharp and very small head of it must have the strong bonding for the long sustainability and we are bounded to provide it with the best quality output.
                                                                                </span>
										<div class="color-quality">
											<div class="color-quality-left">
												<h6>Sizes  : </h6>
												<ul>
													<li><a href="#"><span></span>M3</a></li>
													<li><a href="#" class="brown"><span></span>M80</a></li>
													
												</ul>
											</div>
											<div class="color-quality-right">
												<h6>Quality :</h6>
												<div class="quantity"> 
													<div class="quantity-select">                           
														<div class="entry value-minus1">&nbsp;</div>
														<div class="entry value1"><span>1</span></div>
														<div class="entry value-plus1 active">&nbsp;</div>
													</div>
												</div>
												<!--quantity-->
														<script>
														$('.value-plus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
															divUpd.text(newVal);
														});

														$('.value-minus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
															if(newVal>=1) divUpd.text(newVal);
														});
														</script>
													<!--quantity-->
											</div>
											<div class="clearfix"> </div>
										</div>
									<div class="women">
										<span class="size">Standards :- DIN, ISO, IS, BS, ASTM </span>
										   
										<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png"><a href="mailto:info@nkworlds.com"><font color="white">Inquiry</a></font></button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="news-gr">
								<div class="col-md-5 new-grid1">
								<img src="images/bolts/b5.jpg" class="img-responsive" alt="">
								</div>
									<div class="col-md-7 new-grid">
										<h5>Hex bolts and Nuts</h5>
										<h6>Quick Overview</h6>
										<span>Hex bolt is our core competency in the market. As the Hex bolts can be used worldwide with many applications we specially care about the bolts. Our hex bolts are known for the sharp thread and strong head of the bolts  
Understanding the requirement of the chemical and automobile Industries we had designed and offered a high grade Hex Bolts in the market. 
We are manufacturing of Hex bolts with the quality raw material and modern machineries. We have the in house Cold forging and Hot forging Bolts manufacturing facilities 
With the raise in demand of our Hex bolts and to meet their specific requirement of our customers we provides the customization facilities as well and ensure the customers with higher level of satisfaction in the quality , size and durability of the bolts. We provide it with the customize requirement of size, Dimension and Design .</span>
										<div class="color-quality">
											<div class="color-quality-left">
												<h6>Sizes  : </h6>
												<ul>
													<li><a href="#"><span></span>M3</a></li>
													<li><a href="#" class="brown"><span></span>M80</a></li>
													
												</ul>
											</div>
											<div class="color-quality-right">
												<h6>Quality :</h6>
												<div class="quantity"> 
													<div class="quantity-select">                           
														<div class="entry value-minus1">&nbsp;</div>
														<div class="entry value1"><span>1</span></div>
														<div class="entry value-plus1 active">&nbsp;</div>
													</div>
												</div>
												<!--quantity-->
														<script>
														$('.value-plus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
															divUpd.text(newVal);
														});

														$('.value-minus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
															if(newVal>=1) divUpd.text(newVal);
														});
														</script>
													<!--quantity-->
											</div>
											<div class="clearfix"> </div>
										</div>
									<div class="women">
										<span class="size">Standards :- DIN, ISO, IS, BS, ASTM </span>
										   
										<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png"><a href="mailto:info@nkworlds.com"><font color="white">Inquiry</a></font></button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="news-gr">
								<div class="col-md-5 new-grid1">
								<img src="images/bolts/b7.jpg" class="img-responsive" alt="">
								</div>
									<div class="col-md-7 new-grid">
										<h5>J Bolts</h5>
										<h6>Quick Overview</h6>
										<span>Backed by profound experience of the varied Pros and Cons of the market, we have been enabled our self to offer range of J bolts in different Sizes, Material and Quality required by customer. 
We had developed our range of J bolts with by using superior quality of Raw material and latest technology to meet the requirement of our overseas customer where our J bolts are highly demanded in nature. 
The product range we are offering find their extensive usage in construction, engineering, Automobile and varied allied Industries for several purposes. 
</span>
										<div class="color-quality">
											<div class="color-quality-left">
												<h6>Sizes  : </h6>
												<ul>
													<li><a href="#"><span></span>M3</a></li>
													<li><a href="#" class="brown"><span></span>M80</a></li>
													
												</ul>
											</div>
											<div class="color-quality-right">
												<h6>Quality :</h6>
												<div class="quantity"> 
													<div class="quantity-select">                           
														<div class="entry value-minus1">&nbsp;</div>
														<div class="entry value1"><span>1</span></div>
														<div class="entry value-plus1 active">&nbsp;</div>
													</div>
												</div>
												<!--quantity-->
														<script>
														$('.value-plus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
															divUpd.text(newVal);
														});

														$('.value-minus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
															if(newVal>=1) divUpd.text(newVal);
														});
														</script>
													<!--quantity-->
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="women">
										<span class="size">Standards :- DIN, ISO, IS, BS, ASTM </span>
										   
										<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png"><a href="mailto:info@nkworlds.com"><font color="white">Inquiry</a></font></button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>

                                
 <script src="dist/wow.js"></script>
  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>                                
                                
</body>
</html>