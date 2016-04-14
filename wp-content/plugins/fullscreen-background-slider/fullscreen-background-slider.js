/*
#	This fullscreen slideshow was fully created by usbecko from USBdesign
#	www.usbdesign.sk
#	usbecko@gmail.com
#	Version: 0.1
*/

$ = jQuery;

$(function(){

	var slideTime = parseInt( $('.background1').attr('slidetime') );	// milliseconds
	var timeOut = parseInt( $('.background1').attr('timeout') );		// milliseconds

	console.log(slideTime);
	console.log(timeOut);

	// counting slides
	var slides =  0;
	while( $('.background' + slides ).is('div') ){
		slides++;
	}

	// calling image rotator
	hiding();

	// functions
	function hiding(){		
		var ss =  timeOut+slideTime;
		for (var i=slides-1;i>0;i--){	
			$('.background'+i).delay(ss).fadeOut(slideTime);
			ss += timeOut+slideTime;
		}
		setTimeout(showing, ((slides)*slideTime)+((slides-1)*timeOut));
	}

	function showing(){
		var sa =  timeOut+slideTime;
		for(var y=1;y<slides;y++){
			$('.background'+y).delay(sa).fadeIn(slideTime);
			sa += timeOut+slideTime;
		}		
		setTimeout(hiding, ((slides)*slideTime)+((slides-1)*timeOut));
	}

})