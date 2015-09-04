
/* Scroll */
(function($){
    $(window).load(function(){
        
        $("#content-1").mCustomScrollbar({
            theme:"minimal"
        });
        
    });
})(jQuery);

var ww = $(window).width();
$(document).ready(function(){
	abc();

});

function abc () {
	if (ww <= 992) {
		var config1 = {
		  "id": '638973533339553792',
		  "domId": 'tw-widget1',
		  "maxTweets": 5,
		  "enableLinks": true
		};
		
	} 
	else if (ww >= 1024) {
		var config1 = {
		  "id": '638973533339553792',
		  "domId": 'tw-widget1',
		  "maxTweets": 30,
		  "enableLinks": true
		};
		
	}else{

	}
	twitterFetcher.fetch(config1);
}



/* Twitter */
function dateFormatter(date) {
  return date.toTimeString();
}
twitterFetcher.fetch(config4);

