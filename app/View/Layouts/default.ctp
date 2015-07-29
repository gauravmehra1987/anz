<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<?php echo $this->Html->charset(); ?>
	<title>ANZ</title>
        <?php echo $this->Html->css('style'); ?>
        <?php echo $this->Html->script(array('jquery','jquery.dd')); ?>
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
    <div class="anz-logo"><img src="/img/anz-logo.jpg" alt="AZN" /></div>
    <div class="anz-logo-right-col"></div>
    </div>
    </div>
    <div class="left-blue-bar"></div>
    
    <div class="right-blue-bar"></div>
    </div>
</header>

<div class="menu">
	<div class="navigation">
    <div class="hamburgar-icon" id="open-menu"><img src="/img/hamburgar-menu.png" alt="menu" /></div>
    <ul>
    	<li><a href="#" class="active" title="Home">Home</a></li>
        <li><a href="#" title="Make an Appointment">Make an Appointment</a></li>
        <li><a href="#" title="Cocktail Reception">Cocktail Reception</a></li>
        <li class="last"><a href="#" title="Delegates">Delegates</a></li>
    </ul>
    </div>
</div>



    <?php echo $this->fetch('content'); ?>



<footer>
<div class="footer-content">
<ul>
<li class="frst"><a href="#">anz.com</a></li>
<li><a href="#">Website Terms of Us</a></li>
<li><a href="#">Privacy &amp; Security</a></li>
<li class="lst"><a href="#">Our Guidelines</a></li>
</ul>
<p>&copy; Australia and New Zealand Banking Group Limited (ANZ) 2015 ABN 11 005 357 522.</p>
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
	$("select").msDropdown({roundedBorder:false});
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

