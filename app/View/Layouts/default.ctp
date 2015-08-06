<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- Meta Tag -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<!-- About -->
<link rel="icon" href="favicon.ico" type="image/x-icon" >
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" >
<meta content="favicon.ico" itemprop="image">

<?php echo $this->Html->charset(); ?>
	<title><?php if(isset($title)) echo $title; else echo "ANZ"; ?></title>
        <?php echo $this->Html->css('style'); ?>
        <?php echo $this->Html->script(array('jquery','jquery.dd','vendor/modernizr','vendor/html5')); ?>
       <?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('style');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<body>

<header>
	<div class="header">
    
    <div class="header-logo-bar">
    <div class="header-logo">
    <div class="anz-logo"><a href="<?php echo $this->webroot; ?>"><img src="<?php echo $this->webroot; ?>img/anz-logo.jpg" alt="AZN" /></a></div>
    <div class="anz-logo-right-col"><p>Conversations that matter @ Sibos</p></div>
    </div>
    </div>
    <div class="left-blue-bar"></div>
    
    <div class="right-blue-bar"></div>
    </div>
</header>

<div class="menu">
	<div class="navigation">
    <div class="hamburgar-icon" id="open-menu"><img src="<?php echo $this->webroot; ?>img/hamburgar-menu.png" alt="menu" /></div>
    <ul>
    	<li><a <?php if($this->request->url=='') echo "class='active'"; ?> href="<?php echo $this->webroot; ?>" title="Home">Home</a></li>
        <li><a <?php if($this->request->url=='make-an-appointment') echo "class='active'"; ?> href="<?php echo $this->webroot; ?>make-an-appointment" title="Make an Appointment">Make an Appointment</a></li>
        <li><a <?php if($this->request->url=='cocktail-reception') echo "class='active'"; ?> href="<?php echo $this->webroot; ?>cocktail-reception" title="Cocktail Reception">Cocktail Reception</a></li>
        <li class="last"><a <?php if($this->request->url=='delegates') echo "class='active'"; ?> href="<?php echo $this->webroot; ?>delegates" title="Delegates">ANZ Delegates</a></li>
    </ul>
    </div>
</div>



    <?php echo $this->fetch('content'); ?>



<footer>
    <div class="footer-content">
    <div class="footer-links">
    <ul>
    <li class="frst"><a href="http://www.anz.com/personal/" target="_blank">anz.com</a></li>
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

</body>
</html>