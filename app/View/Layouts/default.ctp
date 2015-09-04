<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- Meta Tag -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta name="format-detection" content="telephone=no">
<!-- About -->
<link rel="icon" href="favicon.ico" type="image/x-icon" >
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" >
<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>css/ie8.css" />
<![endif]-->
<meta content="favicon.ico" itemprop="image">

<?php echo $this->Html->charset(); ?>
	<title><?php if(isset($title)) echo $title; else echo "ANZ"; ?></title>
        <?php echo $this->Html->css(array('style','main','jquery.mCustomScrollbar.min')); ?>
        <?php echo $this->Html->script(array('jquery','jquery.mCustomScrollbar.concat.min','twitter','main','jquery.dd','vendor/modernizr','vendor/html5')); ?>
       <?php
            echo $this->Html->meta('icon');
            echo $this->Html->css('style');
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
	?>
</head>

<body>

<div id="header">
    <header>
      <div class="container">
        <div class="row padboth">
          <ul class="nav hrz">
            <li class="logo"><a href="<?php echo $this->webroot; ?>"></a></li>
            <li class="title"><p>Conversations That Matter @ Sibos</p></li>
          </ul>
        </div>
      </div>
    </header>
    </div>

<div class="menu">
	<div class="navigation">
    <div class="hamburgar-icon" id="open-menu"><img src="<?php echo $this->webroot; ?>img/hamburgar-menu.png" alt="menu" /></div>
    <ul>
    	<li <?php if($this->request->url=='') echo "class='active'"; ?>>
            <a <?php if($this->request->url=='') echo "class='active'"; ?> href="<?php echo $this->webroot; ?>" title="Home">Home</a>
        </li>
        <li <?php if($this->request->url=='capturing-aseen-oportunity') echo "class='active'"; ?>>
            <a <?php if($this->request->url=='capturing-aseen-oportunity') echo "class='active'"; ?> href="<?php echo $this->webroot; ?>capturing-asean-opportunity" title="Capturing the ASEAN Opportunity">Capturing the ASEAN Opportunity</a>
        </li>

        <li <?php if($this->request->url=='anz-speakers') echo "class='active'"; ?>>
            <a <?php if($this->request->url=='anz-speakers') echo "class='active'"; ?> href="<?php echo $this->webroot; ?>anz-speakers" title="ANZ Speakers">ANZ Speakers</a>
        </li>

        <li <?php if($this->request->url=='make-an-appointment') echo "class='active'"; ?>>
            <a <?php if($this->request->url=='make-an-appointment') echo "class='active'"; ?> href="<?php echo $this->webroot; ?>make-an-appointment" title="Make an Appointment">Make an Appointment</a>
        </li>
        <?php /*<li <?php if($this->request->url=='cocktail-reception') echo "class='active'"; ?>>
            <a <?php if($this->request->url=='cocktail-reception') echo "class='active'"; ?> href="<?php echo $this->webroot; ?>cocktail-reception" title="Cocktail Reception">Cocktail Reception</a>
        </li> */ ?>
        <li class="last <?php if($this->request->url=='delegates') echo "active"; ?>">
            <a <?php if($this->request->url=='delegates') echo "class='active'"; ?> href="<?php echo $this->webroot; ?>delegates" title="Delegates">ANZ Delegates</a>
        </li>
    </ul>
    </div>
</div>



    <?php echo $this->fetch('content'); ?>



<footer>
    <div class="footer-content">
    <div class="footer-links">
    <ul>
    <li class="frst"><a href="http://www.anz.com/" target="_blank">anz.com</a></li>
    <li><a href="http://www.anz.com/auxiliary/help/help/website-terms-use/" target="_blank">Website Terms of Use</a></li>
    <li class="lst"><a href="http://www.anz.com/auxiliary/help/help/website-security-privacy/" target="_blank">Privacy &amp; Security</a></li>
    </ul>
    <p>&copy; Australia and New Zealand Banking Group Limited (ANZ) 2015 ABN 11 005 357 522.</p>
    </div>

    <div class="connect-with-us"><p>Connect with us</p>
    <div class="social-icon">
        <a target="_blank" href="https://www.facebook.com/ANZAustralia"><img src="<?php echo $this->webroot; ?>img/facebook.jpg" class="left" alt="facebook" /></a>
        <a target="_blank" href="http://twitter.com/ANZ_AU"><img src="<?php echo $this->webroot; ?>img/twitter.jpg" class="left" alt="twitter" /></a>
    </div>
    </div>

</div>
</footer>
<script type="text/javascript">



$(document).ready(function(e) {
    $('#action').click(function(e){ 
		var loc = $(".login-selector").val();
		location.href=loc;
	});
	
	$('#open-menu').click(function(e){
		$('.navigation ul').slideToggle('fast');
		
		});
});
$(document).ready(function(e) {		
	//no use
	try {
		var pages = $("#pages").msDropdown({on:{change:function(data, ui) {
												var val = data.value;
												if(val!="")
													window.location = val;
											}}}).data("dd");

		var pagename = document.location.pathname.toString();
		pagename = pagename.split("/");
		pages.setIndexByValue(pagename[pagename.length-1]);
		$("#ver").html(msBeautify.version.msDropdown);
	} catch(e) {
		//console.log(e);	
	}
	
	$("#ver").html(msBeautify.version.msDropdown);
		
	//convert
	
//	createByJson();
	$("#tech").data("dd");
});
function showValue(h) {
	console.log(h.name, h.value);
}
$("#tech").change(function() {
	console.log("by jquery: ", this.value);
});


//
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); 

  ga('create', 'UA-66287919-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>