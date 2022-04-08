<?php
require('php-includes/connect.php');
include('php-includes/check-login.php');
$userid = $_SESSION['userid'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>cryptowave.cc</title>
  <link rel="shortcut icon" href="https://cryptowave.cc/favicon.ico" type="image/x-icon">
  <!-- Bootstrap Core CSS -->
  <link href="cryptowave.cc%20DDDDDDDDDDD_fichiers/bootstrap.css" rel="stylesheet">
  <!-- Owl Stylesheets -->
  <link rel="stylesheet" href="cryptowave.cc%20DDDDDDDDDDD_fichiers/owl_002.css">
  <link rel="stylesheet" href="cryptowave.cc%20DDDDDDDDDDD_fichiers/owl.css">
  <!-- Custom CSS -->
  <link href="cryptowave.cc%20DDDDDDDDDDD_fichiers/style.css" rel="stylesheet">
  <link href="cryptowave.cc%20DDDDDDDDDDD_fichiers/responsive.css" rel="stylesheet">
   <meta name="viewport" content="width=1170">
  <!-- animation CSS -->
  <link rel="stylesheet" type="text/css" href="cryptowave.cc%20DDDDDDDDDDD_fichiers/animate.css">
  <link href="cryptowave.cc%20DDDDDDDDDDD_fichiers/hover.css" rel="stylesheet" media="all">
  <link rel="stylesheet" type="text/css" href="cryptowave.cc%20DDDDDDDDDDD_fichiers/stylesheet.css">
  <!-- custom fonts -->
  <link href="cryptowave.cc%20DDDDDDDDDDD_fichiers/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="cryptowave.cc%20DDDDDDDDDDD_fichiers/css_002.css" rel="stylesheet">
  <link href="cryptowave.cc%20DDDDDDDDDDD_fichiers/css.css" rel="stylesheet">
</head>
<body>
<!-- Header -->
<header> 
  <!-- top bar -->
  <div class="top_bar">
    <div class="container">
      <div class="row">
        <div class="top_contact wow lightSpeedIn" data-wow-delay="0.5s" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: lightSpeedIn;"> <a><i class="fa fa-envelope"></i><span>info@cryptowave.cc</span></a> </div>
        <ul class="social  wow zoomInLeft" data-wow-delay="0.5s" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: zoomInLeft;">
        </ul>
      </div>
    </div>
  </div>
  <div class="mid_header">
    <div class="container">
      <div class="col-sm-4 col-md-5 col-lg-6 col-xs-12">
        <div class="row">
          <div data-wow-delay="1s" data-wow-duration="0.5s" class="logo wow zoomIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 1s; animation-name: zoomIn;">
              <a href="https://cryptowave.cc/?a=home" class="brand_image"><img src="cryptowave.cc%20DDDDDDDDDDD_fichiers/logo1.png"></a> </div>
        </div>
      </div>
      <div class="col-sm-8 col-md-7 col-lg-6 col-xs-12">
        <div class="row">
          <div class="mid_right">
             <div class="col-md-6 col-sm-7 col-xs-6"> <span class="contact_no">
              <h4><small></small></h4>
                  <h4><small></small></h4>
              </span> </div>
            <div class="col-md-6 col-sm-5 col-xs-6"> <span class="online_chat"> online chat <br>
              with us </span> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Navigation -->
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
      <div class="row">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
               <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">           <ul class="nav navbar-nav">
            <li> <a href="https://cryptowave.cc/?a=home">Home</a> </li>
            <li> <a href="https://cryptowave.cc/?a=cust&amp;page=about-us"> About Us </a> </li>
            <li> <a href="https://cryptowave.cc/?a=news"> News </a> </li>
            <li> <a href="https://cryptowave.cc/?a=paidout"> Paidout </a> </li>
            <li> <a href="https://cryptowave.cc/?a=support"> Contact </a> </li>
                       <li> <a href="https://cryptowave.cc/?a=logout"> Logout </a> </li>
            <li> <a href="https://cryptowave.cc/?a=account"> Account </a> </li>
                      </ul>
          </div>
      </div>
    </div>
  </nav>
</header>



<div class="page-container">
  <div class="container">

<div class="inner_page">

<div class="row">


<div class="col-md-3 col-sm-4 col-xs-12 dash_100">
          <div class="dash_menu">
            <div class="user_info"> <span class="username"> <i class="fa  fa-user"></i>
              <h4>elbarino <small>Accout Balance : $<b></b> </small></h4>
              </span>
              
              
              
            <ul id="dash_nav">
                <li> <span><i class="fa   fa-database"></i><a href="https://cryptowave.cc/?a=account">DASHBOARD</a></span></li>
                <li> <span><i class="fa   fa-align-justify"></i><a href="https://cryptowave.cc/?a=deposit">deposit</a></span></li>
                <li> <span><i class="fa   fa-align-justify"></i><a href="https://cryptowave.cc/?a=deposit_list">deposit list</a></span></li>
                <li> <span><i class="fa   fa-user"></i><a href="https://cryptowave.cc/?a=withdraw">withdraw</a></span></li>
                <li><span> <i class="fa    fa-pencil-square-o"></i><a href="https://cryptowave.cc/?a=earnings">earning</a></span></li>
                <li> <span><i class="fa    fa-lock"></i><a href="https://cryptowave.cc/?a=referals">referral</a></span></li>
                <li> <span><i class="fa   fa-user"></i><a href="https://cryptowave.cc/?a=referallinks">referral links</a></span></li>
                <li> <span><i class="fa    fa-lock"></i><a href="https://cryptowave.cc/?a=security">security</a></span></li>
                <li><span> <i class="fa    fa-pencil-square-o"></i><a href="https://cryptowave.cc/?a=edit_account">edit profile</a></span></li>
              </ul>
            
            
            

            </div>
          </div>
        </div>



<div class="col-md-9 col-sm-8 col-xs-12 dash_100">
   
   
   
   



<form method="post"><input type="hidden" name="form_id" value="16167989646240"><input type="hidden" name="form_token" value="a940dfe82867962fefd2d5f235d5558a">
<input type="hidden" name="a" value="withdraw">
<input type="hidden" name="action" value="withdraw">
<input type="hidden" name="amount" value="0.51">
<input type="hidden" name="ec" value="18">
<input type="hidden" name="comment" value="Your comment">

<table class="tab" cellspacing="0" cellpadding="2" border="0">
<tbody><tr>
 <td>Payment System:</td>
 <td>PerfectMoney</td>
</tr>
<tr>
 <td>Account:</td>
 <td>U29336286</td>
</tr>
<tr>
 <td>Debit Amount:</td>
 <td>$0.51</td>
</tr>

<tr>
 <td>Withdrawal Fee:</td>
 <td>
We have no fee for this operation.
</td>
</tr>

<tr>
 <td>Credit Amount:</td>
 <td>$0.51</td>
</tr>


<tr>
 <td>Note:</td>
 <td>Your comment</td>
</tr>
<tr>
 <td colspan="2"><input type="submit" value="Confirm" class="sbmt"></td>
</tr></tbody></table>
</form>



   
   
   
   
   
        </div>
        
        



</div></div></div></div>





<div class="footer">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-6  col-xs-6">
                <div class="address_info">
                  <div data-wow-delay="1s" data-wow-duration="0.5s" class="logo wow zoomIn" style="visibility: hidden; animation-duration: 0.5s; animation-delay: 1s; animation-name: none;"> <a href="#" class="brand_image">https://cryptowave.cc</a> </div>
                  <h2>Contacts</h2>
                  <ul>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 col-sm-6  col-xs-6">
                <div class="quick_links">
                  <h4>Quick Links</h4>
                  <ul>
                    <li><a href="https://cryptowave.cc/?a=home">Home</a> </li>
                    <li><a href="https://cryptowave.cc/?a=cust&amp;page=about-us">About us</a> </li>
                    <li><a href="https://cryptowave.cc/?a=rules">rules </a></li>
                    <li><a href="https://cryptowave.cc/?a=support">Contact us</a> </li>
                    <li><a href="https://cryptowave.cc/?a=faq">FAQ</a> </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-7" style="">
                <div class="last_block text-center">
                  <div style="align-items: flex-end;" class="copyright">Copyright @ 2021 cryptowave.cc. All rights reserved.</div>
                </div>
              </div>
            </div>
          </div>
        </div>






<!-- jQuery --> 
<script src="cryptowave.cc%20DDDDDDDDDDD_fichiers/jquery-2.js"></script> 
<script src="cryptowave.cc%20DDDDDDDDDDD_fichiers/bootstrap.js"></script> 
<script src="cryptowave.cc%20DDDDDDDDDDD_fichiers/owl.js"></script> 
 
<script>
 $(document).ready(function() {
      var owl = $(".testimonial");
      owl.owlCarousel({
        itemsCustom : [
          [0, 1],
          [360, 1],
		  [460, 1],
          [600, 1],
          [767, 1],
          [1000, 1],
          [1200, 1],
          [1400,1],
          [1600,1]
        ],
          navigation : false,
		loop: true,
        autoplay: true,
		dots:false,
		stagePadding: 50,
		    pagination : false,
			
			   //Basic Speeds
        slideSpeed : 200,
        paginationSpeed : 800,
        rewindSpeed : 1000,
			
      });
    });
	
	
	
	
	
	
	
</script> 
 
<script src="cryptowave.cc%20DDDDDDDDDDD_fichiers/slider.js"></script> 
<script>$('#bootstrap-touch-slider').bsTouchSlider();</script> 

<!-- Script to Activate the Carousel --> 
 
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script> 
 
<script src="cryptowave.cc%20DDDDDDDDDDD_fichiers/wow.js"></script> 
 
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
 
<script type="text/javascript" src="cryptowave.cc%20DDDDDDDDDDD_fichiers/jquery.js"></script> 
<script type="text/javascript" src="cryptowave.cc%20DDDDDDDDDDD_fichiers/calculator.js"></script> 
<script type="text/javascript" src="cryptowave.cc%20DDDDDDDDDDD_fichiers/scripts.js"></script>




</body></html>