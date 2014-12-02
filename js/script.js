window.onload = init;

var inc = -1;
var inc2 = -1;
var j = -1;

function init() {
	//setInterval(function(){fadeImages();}, 3000);
	//setInterval(alternateLogos, 1000)
	//setInterval(rotateQuotes, 4000);	
}
function validateForm(form)
{
	var x=document.forms["newsletter"]["email"].value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
	  $("#newsletter_error").html("<br /><br />Invalid email please try again");
	  return false;
	}
	$.post("functions/mailchimp.php", {email:x}, function(response){
		console.log(response);
		if(response.error==true){
			$("#newsletter_error").html("<br /><br />"+ response.error_msg);
		}else{
			$("#newsletter-div").html("<br /><br />Subscribed! =)");
		}
		
	});
	
	return false;
}

function fadeImages(){
	var images = $('.highlight');
	var num_images = images.length;
	var position = $('.position');
	
	if(inc < num_images){
		inc++;
	}else {
		inc=0;
	}
	
	var randno = randNumber(500, 4000);
	
	var cur = images[inc];	
	var next = images[inc+1];
	var prev = images[inc-1];

	if(inc == 0 || inc == 4){
		$(cur).removeClass('position').fadeTo(2000, 0).addClass('background');
		$(next).removeClass('background').fadeTo(2000, 1).addClass('position');
	}else if(inc == 1 || inc == 5){
		$(cur).removeClass('position').fadeTo(2000, 0).addClass('background');
		$(prev).removeClass('background').fadeTo(2000, 1).addClass('position');
	}else{
		$(cur).fadeTo(randno,0.2);
		$(cur).fadeTo(randno,1);	
		wait(10000);
	}
	
}

function alternateLogos(){
	var rotate = $('.rotate');
	var num_rt = rotate.length;
	
	if(j < num_rt) {
		j++;
	}else {
		j=0;
	}
	
	var rotCP = rotate[j];
	var rotCN = rotate[j+1];
	
	$(rotCP).removeClass('highlight');
	$(rotCP).addClass('off');
	$(rotCN).removeClass('off');
	$(rotCN).addClass('highlight');
	
}

function rotateQuotes() {
	var offDivs = $('.off');
	var textDiv = $('.text');
	var num_text = offDivs.length;
	
	if(inc2 < num_text && inc2<13){
		inc2++;
	}else {
		inc2=0;
	}
	var curDiv = offDivs[inc2].innerHTML;
	textDiv.html(curDiv);
}


function randNumber(min, max){
	return Math.random() * (max - min) + min;
}

function showVideo(ele){
	$(ele).html('Loading Video');
	var video = $("#mvideo").get(0);
	video.load();
	video.play();
	video.addEventListener('webkitbeginfullscreen', function(){
		$("#mobilvideo").html('Watch the Video');	
	}, false);
	video.addEventListener('webkitendfullscreen', function(){
		$("#mobilvideo").html('Watch the Video');	
	}, false);

}



var ads = [
	{id:'515f0f800000003129000002', size:[320,100], title:"Oblivion"},
	{id:'51b6459e0e7fd02430000001', size:[320,100], title:"Fast 6"},
	{id:'5140f7c91771a8a25b000000', size:[320,50], title:"Turbo Tax"},
	{id:'51e9c522000000a319000003', size:[300,250], title:"Hulu"}	
];

$(function(){

		$(".lightbox2").click(function(e){
			e.preventDefault();
			
/*
			$(".backdrop, .close").animate({'opacity':'0.0'}, 300, 'linear');
			$(".backdrop, .close").animate({'opacity':'1.00'}, 300, 'linear');
			$(".backdrop, .close").css('display', 'block');
*/
			

			var lidx =	$(this).index(".lightbox2");
			var thisad = ads[lidx];
			
			var newtop = ($(".backdrop").height()/2)-(thisad.size[1]/2);
			
			
			var r = Number(r) || Math.floor(Math.random()*10e12);
			var frame = '<iframe src="http://cdn.adrd.co/tag/sandbox/frame.html#_adid='+thisad.id+'&_ct0=&_live=0&_frcdt=0&r='+r+'" width="'+thisad.size[0]+'" height="'+thisad.size[1]+'" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>';
			
			$(".preview-frame").css('width', thisad.size[0]+'px').css('top', newtop+'px').html("<h1 style=\"text-align: center;\">"+thisad.title+" "+thisad.size[0]+"x"+thisad.size[1]+"</h1>"+frame);
			
			$(".backdrop").stop(true,true).fadeIn();
			$(".close-backdrop, .backdrop").click(function(){
				/* close_box(); */
				$(".backdrop").stop(true,true).fadeOut();
			});
			
		});


 		$('.lightbox').click(function(){
			$('.backdrop, .vidbox, .close').animate({'opacity':'0.0'}, 300, 'linear');
			$('.vidbox, .close').animate({'opacity':'1.00'}, 300, 'linear');
			$('.backdrop, .vidbox, .close').css('display', 'block');
			$('.vidbox').html('<iframe src="http://player.vimeo.com/video/63011095?autoplay=1"  frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
		});

		$('.close').click(function(){
			close_box();
		});
		

		// $('.backdrop').click(function(){
		// 		close_box();
		// 	});
		//  
});
 
function close_box()
{
	$('.backdrop, .vidbox, .close').animate({'opacity':'0'}, 300, 'linear', function(){
		$('.backdrop, .vidbox, .close').css('display', 'none');
	});
	$('.vidbox').html('');
}


$(function(){
	objectEaseIn(0);

	var counters = $("#counter a");

	$("#counter .nav-click").click(function(e){
		var idx = $(this).index('#counter .nav-click');
		$("#counter .nav-click").removeClass('hl');
		$(this).addClass('hl');
		
		switch(idx){
			case 1:
			case 2: 
			case 3:
				objectEaseIn(idx);
				break;
			default: 
				objectEaseIn(0);
				break;
		}
		
	});

});
function objectEaseIn(idx){
		clearTweens();
		
		var properties = {
			css: {opacity:1.0, display: "block", marginLeft: "-520px"},
			ease:Expo.easeOut,
			delay: 1,
	
		};
		var ph = $("#about-img img").get(idx);
		
		var properties2 = {
			css: {opacity:1.0, display: "block", marginLeft: "-45px"},
			ease:Expo.easeOut,
			delay: 1,
		
		};
		var action = $(".bg-text").get(idx);
		
		var properties3 = {
			css: {opacity:1.0, display: "block", marginLeft: "-15px"},
			ease:Expo.easeOut,
			delay: 1,

		};
		var text = $(".fg-text").get(idx);
		
		var properties4 = {
			css: {opacity:1.0, display: "block", marginLeft: "25px"},
			ease:Expo.easeOut,
			delay: 1,

		};
		var notecard = $(".notecard").get(idx);

		// var properties5 = {
		// 		css: {opacity:1.0, display: "block", marginLeft: "30px"},
		// 		ease:Expo.easeOut,
		// 		delay: 1,
		// 
		// 	};
		// 	var notecardtx = $(".ntfg-text").get(idx);
	

		TweenLite.to(ph, 0.7, properties);
		TweenLite.to(action, 0.7,properties2);
		TweenLite.to(text, 0.9, properties3);
		TweenLite.to(notecard, 1.2, properties4);
		// TweenLite.to(notecardtx, 1.5, properties5);
			
}


function clearTweens(){
	var properties = {
		css: {marginLeft: "-2000px", opacity:0.0, display: "none"},
		ease:Expo.easeIn,
		overwrite:true,
	};
	var ph = $("#about-img img");
	
	var properties2 = {
		css: {marginLeft: "2000px", opacity:0.0, display: "none",},
		ease:Expo.easeIn,
		overwrite:true,
	};
	var about = $(".bg-text");
	
	var properties3 = {
		css: {marginLeft: "2000px", opacity:0.0, display: "none"},
		ease:Expo.easeIn,
		overwrite:true,
	};
	var text = $(".fg-text");
	
	var properties4 = {
		css: {marginLeft: "2000px", opacity:0.0, display: "none"},
		ease:Expo.easeIn,
		overwrite:true,
	};
	var notecard = $(".notecard");
	// 
	// var properties5 = {
	// 	css: {marginLeft: "2000px", opacity:0.0, display: "none"},
	// 	ease:Expo.easeIn,
	// 	overwrite:true,
	// };
	// var notecardtx = $(".ntfg-text");


	TweenLite.to(ph, 1.5, properties);
	TweenLite.to(about, 1.2, properties2);
	TweenLite.to(text, 0.9, properties3);
	TweenLite.to(notecard, 0.7, properties4);
	// TweenLite.to(notecardtx, 0.7, properties5);

}
function wait(num){
	setTimeout(function(){

	}, num);
}


