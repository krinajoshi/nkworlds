
<html>
<head>
<title>About|N.K. Worlds</title>
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
<meta name="keywords" content="Best exporter of India, Top Exporter of India. Emerging group in India, Best consultant in India, Biggest group of Indian Industry, Top business strategy, Best Marketing techniques, Top Businessman of India, Export-Import in Ahmadabad, Export-import in India">
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




</style>
<!--//End-rate-->
</head>
<body>
<?php 
include "header.php";

?>                                     
                
                
                <div class="site" id="4">
                    
                    <div class="con_head">
                            <h2 class="title costom">About Us</h2>
                            
                            <div class="jumpbox">
                                <div class="col-md-4"><h3><a href="#1">Short Intro</a></h3></div>
                                <div class="col-md-4"><h3><a href="#2">Mission & Vision </a></div>
                                <div class="col-md-4"><h3><a href="#3">Our Clients</a></h3></div>
                                
                                <div class="clearfix"></div>
                               
                                
                            </div>
                     </div>
                    
                    <div class="container">
                        <div class="col-md-12 content_head c">
                            
                            <div id="1" class="col-md-6">
                                
                                <h2 style="padding-bottom: 20px;" class="tittle c"> Short Intro</h2>
                                
                                <ul class="unlist">
                                    <li>Build on a foundation of working with honesty and integrity we at N.K.Worlds introduce ourselves as quality cautious manufacturer &amp; service provider of world’s top line products.</li>
                                    <li>At N.K. Worlds we design, develop and craft business in a unique way which leads quality to the highest possible level</li>
                                    <li>- Commitment to quality &amp; meeting delivery schedule with aggressive approach is our core identity.
                                        <br>
- Creating customer satisfaction is our biggest achievement.
                                        
                                    </li>
                                    <li>
                                        To conclude, N.K. Worlds are in top line, renowned &amp; most trusted brand among in competitor through it’s core competencies.

                                    </li>
                                    
                                </ul>
                                
                                
                            </div>
                            <div class="col-md-6">
                                <br><br>
                                <img style="padding-top:50px;" class="img-responsive" src="images/setup_of_nkworlds.JPG"  />
                                
                            </div>








<ul  class="unlist">
<li>Our company’s well equipped with infrastructure caters to all client’s requirement. Material used in manufacturing of goods is top of line &amp; again there is no compromise in quality.</li>
                                    
 </ul>
 
	<h2 id="2" style="padding-bottom: 20px;text-align: left;" class="tittle c"> Mission</h2>
                            <div class="sapator"></div>
                            <h5 style="padding-bottom: 20px;text-align: left;font-size: 16px" class="tittle c"><b class="unlist">To provide great quality of Business in this corporate world.</b></h5>
                            
                            <br>
                            
                            <h2 style="padding-bottom: 20px;text-align: left;" class="tittle c">Vision</h2>
                            <div class="sapator"></div>
                            <h5 style="padding-bottom: 20px;text-align: left;font-size: 16px" class="tittle c"><b class="unlist">To be one of the Top line business class with diversified portfolio in the Economy of India.</b></h5>
                            
                            <br>
                            
                            <h2 style="padding-bottom: 20px;text-align: left;" class="tittle c">History</h2>
                            <div class="sapator"></div>
                            <h5 style="padding-bottom: 20px;text-align: left;font-size: 16px" class="tittle c"><b class="unlist">N.K. Worlds and has created a unique place in the Indian corporate world within a very short span of time.</b></h5>
                            
                            <h5 style="padding-bottom: 20px;text-align: left;font-size: 16px" class="tittle c"><b class="unlist">The N.K. Worlds is an emerging and developing group of companies from India with new creativities and Innovations.</b></h5>
                            
                            <h5 style="padding-bottom: 20px;text-align: left;font-size: 16px" class="tittle c"><b class="unlist">With a vision to be a largest group with diversified portfolio the N.K. group of Industries has been established by its’ Promoter &amp; Founder Mr. NITISH KARIYA in 2013.</b></h5>
                            
                            <h5 style="padding-bottom: 20px;text-align: left;font-size: 16px" class="tittle c"><b class="unlist">We are the Group of companies not bounded by any product range or Industry but bounded by the capabilities. We are committed to the customer for giving the best and qualitative product range and services they require.</b></h5>
                            
                            <h5 style="padding-bottom: 20px;text-align: left;font-size: 16px" class="tittle c"><b class="unlist">Our main motive is to have the mutual benefits where priority is to satisfy the customer with the Quality services.</b></h5>
                              
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                        
                                                 
                                                 
                                 <h2 id="3" style="padding-bottom: 20px;text-align: left;" class="tittle c">Our Clients</h2>
                            <div class="sapator"></div>
                            <h5 style="padding-bottom: 20px;text-align: left;font-size: 16px" class="tittle c"><b> N.K. Fasteners has created a unique place in the industry since its incorporation. It has the large customer group all over the world. </b></h5>
                            
                            <h4 style="padding-bottom: 20px;
    text-align: left;
    text-decoration: underline;" class="tittle c">N.K. Fasteners is supplying it’s qualitative products to the following Industries. </h4>
                                
                                
                            
                            <ul class="unlist">
                                    <li>Petrochemical Industry</li>
                                    <li>Electrical Industry</li>
                                    <li>Electronics </li>
                                    <li>Mobile communication Industry</li>
                                    <li>Instrumentation Industry</li>
                                    
                                    <li>Automobile Industry</li>
                                    <li>Automation Industry</li>
                                    <li>Construction Industry</li>
                                    <li>Heavy engineering Industry</li>
                                    <li>Solar companies</li>
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