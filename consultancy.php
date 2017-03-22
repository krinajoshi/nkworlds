
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
<meta name="keywords" content="Export-Import, Best Export Import consultant, Best export Import Consultancy in Ahmadabad.
 Export Consultancy, Import Consultancy, Export Import Consultancy, Top Export Consultant in India, 
Export Import License,
Export Consultancy in Ahmadabad, Import Consultancy in Ahmadabad, Export Import Consultancy in Ahmadabad, Export Import License in India,  Export consultant, Export consultant in Gujarat, Export consultant in India,  Import consultant, Import consultant in Gujarat, Import consultant in india,
Export Consultancy in Ahmadabad, Import Consultancy in Ahmadabad, Export Import Consultancy in Ahmadabad,
Export Consultancy in Gujarat, Import Consultancy in Gujarat, Export Import Consultancy in Gujarat,
Best Management consultant, Management consultant in Ahmadabad, Management consultant in Gujarat,
Management consultant in India, Best Management consultancy in India,
Business intelligence, Business intelligence consultant, Business intelligence consultant in Ahmadabad, Business intelligence consultant in Gujarat, Business intelligence consultant in India,
Documentation consultancy,
Export Documentation consultancy ,
Documentation consultancy  in Ahmedabad,
Export Documentation consultancy  in Ahmedabad,
Import Documentation consultancy  in Ahmedabad,
Documentation consultancy in Ahmadabad,
Export Documentation consultancy in Ahmadabad,
Import Documentation consultancy in Ahmadabad,
Documentation consultancy in Gujarat,
Export Documentation consultancy in Gujarat,
Import Documentation consultancy in Gujarat,
Export Consultant in Gujarat,
Import Consultant in Gujarat,
Export Import Consultant in Gujarat,
Export Consultant in Ahmedabad,
Import Consultant in Ahmedabad,
Export Import Consultant in Ahmedabad,
Export Consultant in Ahmadabad,
Import Consultant in Ahmadabad,
Export Import Consultant in Ahmadabad,
Export Consultant in Rajkot,
Import Consultant in Rajkot,
Export Import Consultant in Rajkot,
Export Consultant in Junagadh,
Import Consultant in Junagadh,
Export Import Consultant in Junagadh,
Export Consultant in Surat,
Import Consultant in Surat,
Export Import Consultant in Surat,
Export Consultant in Vadodara,
Import Consultant in Vadodara,
Export Import Consultant in Vadodara
">
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
<script>


$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

</script>

<script>


// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>

<style>
#return-to-top {
    position: fixed;
    bottom: 50px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color: #fff;
    top: 5px;
}


li {
    list-style-type: none;
}

</style>
<!--//End-rate-->
</head>
<body>
<?php 
include "header.php";

?>                                     
                
                
                <div class="site" id="4">
                    
                    <div class="con_head">
                            <h2 class="title costom">Consultancy</h2>
                            
                            <div class="jumpbox">
                                <div class="col-md-4"><h3><a href="#1">Export Business Consultancy</a></h3></div>
                                <div class="col-md-4"><h3><a href="#2">Management Consultancy </a></div>
                                <div class="col-md-4"><h3><a href="#3">Business Intelligence services</a></h3></div>
                                
                                <div class="clearfix"></div>
                               
                                
                            </div>
                     </div>
                    
                    <div class="container">
                        <div class="col-md-12 content_head">
                            
                            









<ul class="unlist">
<li>N.K. Business management is the prominent & vital wing of the N.K. World which has unique identity with the better technology and achievements. </li>
<li>We at N.K. Business Management believe in Excellence and hence we come up with the marvelous range of services and ideas which makes a difference in your business world. </li>
<li>We at N.K. Business management have the team of top class young entrepreneurs who are always ready to take a lead and make business profitable in the critical situations as well. </li>
<li>We are committed towards the Excellence and Exceptional growth of the business as we believe that “Quality is not a onetime Practice but It’s a Habit”			</li>				
 </ul>
 <center>
 <h2>N.K. Business Management offers…</h2>
 <img src="images/nk_business_mgmt.png" width="50%">
 </center>                                
                                
                               <p id="1"  class="title">Export Business Consultancy</p>
                                                 <div style="text-align: center; margin: 25px auto;" class="sapator"></div> 
                                
                               <ul class="unlist">
                                    <li>We had designed some unique way in the development of business of exports which will help an entrepreneur to develop business in more better way. </li>
                                    <li> International Marketing consultancy</li>
									<li>International Market Research</li>
									<li>International Market Development</li>
									<li>New Market Penetration </li>
									<li>Existing Market Expansion.</li>
								</ul>

<ul class="unlist"><li>	 <b>Documentation services</b> </li></ul>
<li>&emsp;&emsp;&emsp;&bull;		IEC code Generation ( Export Import License )</li>
<li>&emsp;&emsp;&emsp;&bull;	Pre shipment Documentation </li>
<li>&emsp;&emsp;&emsp;&bull;	Post shipment Documentation </li>
<li>&emsp;&emsp;&emsp;&bull;	DGFT related document </li>
<li>&emsp;&emsp;&emsp;&bull;	CENVET and other government benefit related documents </li>
<li>&emsp;&emsp;&emsp;&bull;	RCMC registration with different govt. bodies like., EEPC, APEDA, Spice board.</li>

                                        
                                    
                                   <ul class="unlist"> <li><b>	Freight forwarding services</b> </li></ul>
<li>&emsp;&emsp;&emsp;&bull;	Cargo Management (Services related to clearance & freight forwarding)</li>
<li>&emsp;&emsp;&emsp;&bull;	Container booking & stuffing </li>
<li>&emsp;&emsp;&emsp;&bull;	Custom Clearance </li>
<li>&emsp;&emsp;&emsp;&bull;	Freight forwarding services. </li>

                                        
                                    </li>
                                  
								  
 <ul class="unlist"> 	
<li>For any export related queries, you can be in touch with our experts and you can put your efforts aside. </li>
<li>We at N.K. Export business consultancy have a team of young entrepreneurs who can take a lead in your business world and who are committed towards remarkable growth of the business in the industry.</li>						  
								  
	</ul>							  
                                
                              
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 <p id="2" class="title" style="padding-top: 30px;">Business development & allied services </p>
                                                 <div style="text-align: center; margin: 25px auto;" class="sapator"></div> 
                                
                                <ul class="unlist">
                                   <li>We at N.K. Worlds understand business development is one of the prime focuses of the business as based on which only the growth and the development of the business can be identified. </li>
<li>Business and profit generation is a core of the business which drives all the factors in the business & hence we offer a series of the market development business tools which helps you to expand the horizon of your business in better way. </li>

<li>We provide above all services which will increase and expand your business to new heights. </li>
<li> We are committed towards making your business better than your expectations and imaginations and hence we appointed some generous and crazy people in our team who believe in the excellence and results. </li>
<li>Something which you always looking for putting your business to new Heights…!!! </li>
                                  
                                </ul>
                                              
                                                 
                                                 
                                 <p id="3"  class="title" style="padding-top: 30px;">Business Intelligence </p>
                                                 <div style="text-align: center; margin: 25px auto;" class="sapator"></div> 
                                
                              <ul class="unlist">
	<li>Business Intelligence is always a unique strategy of the business. These are one of the strategy management techniques which help the business to grow in faster manner with the unbeatable expansion. </li>
<li>It is nothing but the simple classification of techniques and other stuff which simplifies the business in better possible way with available scare resources. </li>
<li>So.. If you are looking for the Excellence in the results & unbeatable growth then doors of N.K. World is for you….</li>
<li>N.K. Business Intelligence has that set of skills and insights of business with young blood of the business with mixture of experience. We have a team which has marvelous set of skills and knowledge which leads your business towards excellence in the Industry </li>



                                  
                                </ul>                
                                                 
                                
                           
                                
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    
                    
                    
                    
                    <a  id="return-to-top" href="#4"><i class="fa fa-arrow-up"></i></a>
                    
                     </div>
                    
                    
                
               
               

<!---footer--->
<?php 
include "feedback1.php";
include "footer.php";
?>