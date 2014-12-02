<?php //header.php
include_once('functions.php');

?>
<!doctype>
<meta charset="utf-8">
<title>Addroid | Multiscreen video banners you can traffic anywhere</title>
<head>
	<link rel="stylesheet" type="text/css" href="css/style2.css" />
	<link rel="stylesheet" type="text/css" href="css/publisher.css" />
	<script src="js/EasePack.min.js"></script>
	<script src="js/CSSPlugin.min.js"></script>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/script.js" ></script>
	<link rel="stylesheet" type="text/css" href="http://static.adrd.co/public/fonts/mavenpro/mavenprolight300.css">
	<link rel="stylesheet" type="text/css" href="http://static.adrd.co/public/fonts/blanch/blanch.css">
	<!-- if[lt < IE9 ] do something -->

	<link rel="stylesheet" type="text/css" href="http://static.adrd.co/public/fonts/fonts.css" />
	<link rel="icon" type="image/png" href="imagery/favicon.ico">
	    
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<style>
	/* Responsive Theme */
	
	/* SHARED STYLES */
	
	#addroid-example-banner {
		margin: 0 auto;
	}
	
	@media screen and (max-width:568px) {
	
	/* MOBILE */
	
		#addroid-logo { display: none; }
		#addroid_logo { display: block; }
		
		#flash-example {
			float: left;
			width:100%;
			text-align: center;
		}
		#flash-example-banner{
			background: #000;
			margin: 0 auto;	
		}
				
		#addroid-example {
			float: left;
			width: 100%;
			text-align: center;
		}

			
		
	}
	@media screen and (min-width:569px) {
	/* DESKTOP */
	
		#addroid_logo { display: none; }
		#addroid-logo { display: block; }
		
		#flash-example {
			float: left;
			width:470px;
			text-align: center;
		}
				#flash-example-banner{
					background: #000;
					margin: 0 auto;	
				}
		#addroid-example {
			margin-left:40px;
			width:470px;
			float: left;
		}
		
	}
	
	
	</style>
</head>
<body>
<div id="top" class="top">
	<div class="wrapper">
	
		<nav>
			<div class="signup right"><button onclick="javascript:window.location ='http://app.addroid.com/signup';">SIGNUP</button> <button onclick="javascript:window.location ='http://app.addroid.com/';">LOGIN</button></div>
		</nav>


<div id="addroid-logo" class="logo left" >
			<a href="./"><img class="pages-logo" src="http://addroid.com/imagery/addroid_logo.png" /></a>
		</div>
			<div id="addroid_logo" class="logo clear left" >
			<a href="<?php MAIN; ?>"><img src="imagery/addroid_logo.png" /></a>
			<p id="copy">Multiscreen video banners you can traffic anywhere</p>
			</div>
<div class="right" style="text-align: right;">
			<h1 style="padding-top:13px;">Flash Conversion Example</h1>
			<h2 style="margin-top:-2px; padding-top:0px; font-weight: normal; font-size:18px;">Make your 40k standard banners mobile compatible.</h2>
		</div>
		<br class="clear" />
	</div><!-- .wrapper -->
</div><!-- .top -->
<div style="margin-top:20px; padding-bottom: 40px;" class="alt_bg">
	<div class="wrapper">
		<div id="flash-example">	
			<h1 style="margin:0; padding:0; border-bottom:1px solid #dedcda; padding-top:44px; padding-bottom:25px;">Original 40k Flash</h1>
                
                <div style="width:100px; height:40px"></div>
                
                 <div id="flash-example-banner" style="width:160px; height:600px;">               
				  <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="160" height="600">
				    <param name="movie" value="conversion/160x600_altima_12.swf">
				    <param name="quality" value="high">
				    <param name="wmode" value="opaque">
				    <param name="swfversion" value="6.0.65.0">
				    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
				    <param name="expressinstall" value="conversion/Scripts/expressInstall.swf">
				    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
				    <!--[if !IE]>-->
				    <object type="application/x-shockwave-flash" data="conversion/160x600_altima_12.swf" width="160" height="600">
				      <!--<![endif]-->
				      <param name="quality" value="high">
				      <param name="wmode" value="opaque">
				      <param name="swfversion" value="6.0.65.0">
				      <param name="expressinstall" value="conversion/Scripts/expressInstall.swf">
				      <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
				      <div>
				        <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
				        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
			          </div>
				      <!--[if !IE]>-->
			        </object>
				    <!--<![endif]-->
			      </object>
					
				  </div>
		</div>
		<div id="addroid-example">
			<h1 style="margin:0; padding:0; border-bottom:1px solid #dedcda; padding-top:44px; padding-bottom:25px;">Addroid Mobile Conversion</h1>
		                
                 <div style="width:100px; height:40px"></div>
                
                
                
				<div id="addroid-example-banner" style="width:160px; height:600px;">
                
                <script type="text/javascript">
var adrd_opts = {
	click_url: 'http%3A%2F%2Fwww.nissanusa.com',
	beacon_impression: '',
	beacon_click: '',
	spinner_url: '',
	//do not modify below this line
	r: Math.floor(Math.random()*10e12),
	publisherId: '',
	placementId: '528bd318473e365a0d000000',
	adrdid: '528bcedb000000e735000009',
	size: [160,600]	
};
document.write('<scri'+'pt src="http://cdn.adrd.co/tag/master/adrd.min.js?r='+adrd_opts.r+'" type="text/javascript"></scr'+'ipt><img '+'src="http://trak.adrd.co/px.gif?_id=528bcedb000000e735000009&_act=display&__r='+adrd_opts.r+'" border="0" width="0" height="0" />');
</script>
<noscript>
<img src="http://trak.adrd.co/px.gif?_id=528bcedb000000e735000009&_act=noscript&__r=123456" border="0" width="0" height="0" />
<a href="http://pop.adrd.co/click?_a=528bd318473e365a0d000000&_type=noscript&url=http%3A%2F%2Fwww.nissanusa.com" target="_blank"><img src="http://cdn1.adrd.co/528bce2f2d5fc/image/528bce422d5fd.jpg" width="160" height="600" border="0" /></a>
</noscript>      
                </div>
					
			
		</div>
		<br class="clear" />
	</div><!--.wrapper-->
</div><!-- alt_bg -->
<script src="conversion/Scripts/swfobject_modified.js" type="text/javascript"></script>

<?php include_once('footer.php'); ?>