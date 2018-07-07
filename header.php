<!DOCTYPE html>
<head <?php language_attributes();?>>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.6/animate.min.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<meta charset="<?php bloginfo('charset');?>">
<title><?php bloginfo('title');?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<link rel="shortcut icon" href="<?php $market_text_field = get_option('marketwp_gn_text_field3');echo $market_text_field;?>">
<script type="text/javascript">
   $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() -445;
			 if ($(window).scrollTop() > navHeight) {
				 $('#menuasli').addClass('fixed');
			 }
			 else {
				 $('#menuasli').removeClass('fixed');
			 }
		});
	});
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<div class="row" style="background:#5BA495;">
<div class="col-sm-10" style="direction:ltr;	background: #5BA495;">

<nav class="nav justify-content-end navbar navbar-expand-sm navbar-dark" style="padding:0px; height:auto">
  <ul class="navbar-nav" style="direction:rtl;">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <li class="nav-item active">
      <a class="nav-link" href="#">صفحه اصلی</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">درباره ما</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">درگاه پرداخت</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">ارتباط با ما</a>
    </li>
  </ul>
    </div>
</nav>
    
      <div id="col-sm-2">
          <div class="topbar">
  <div id="socialhead">
            	<a rel="tooltip" title="فیسبوک" href="<?php $market_text_field = get_option('marketwp_gn_text_field21');echo $market_text_field;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            	<a rel="tooltip" title="اینستاگرام" href="<?php $market_text_field = get_option('marketwp_gn_text_field20');echo $market_text_field;?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a rel="tooltip" title="کانال تلگرام" href="<?php $market_text_field = get_option('marketwp_gn_text_field19');echo $market_text_field;?>"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
            </div>
          </div>
    </div>
</div>
	</div>
	
   <div class="row" style="background:white;">
       <div class="col-xs-1 col-sm-4 col-md-2 col-lg-2" id="logo"> 
  <img src="<?php $market_text_field = get_option('marketwp_gn_text_field0');echo $market_text_field;?>" />
       </div>
       <div class="col-xs-1 col-sm-6 col-md-8 col-lg-3"> 
   <a href="<?php bloginfo('url')?>"> <h1 style="margin-top: 25px;font-size: 30px;font-weight: bold;
           margin-right:20px;"><?php $market_text_field = get_option('marketwp_gn_text_field1');echo $market_text_field;?></h1> </a>
   <h2 style="margin: 30px 2px 10px 50px;font-size: 25px;font-weight: normal;color: #5BA495;"><?php $market_text_field = get_option('marketwp_gn_text_field2');echo $market_text_field;?></h2>
         </div> 
       <div class="col-xs-1 col-md-7 col-lg-5"> 
       <a href="<?php $market_text_field = get_option('marketwp_gn_text_field8');echo $market_text_field;?>"  class="invisible-lg img-responsive"><img src="<?php $market_text_field = get_option('marketwp_gn_text_field7');echo $market_text_field;?>" class="hidden-lg img-responsive"/> </a>
           
       </div>
</div>
  
  
   <div id="sform">
					<form method="get" id="searchform" action="<?php bloginfo('url');?>">
                   
						<input type="text" value="جستجو کنید" name="s" id="s"
 							onblur="if (this.value == '') {this.value = 'جستجو کنید';}"
							 onfocus="if (this.value == 'جستجو کنید') {this.value = '';}" />
					<input type="submit" id="searchsubmit" value="بگرد">
                    
					</form>
				</div>
      

  