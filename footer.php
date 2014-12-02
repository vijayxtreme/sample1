<div class="bottom clear">
	<div class="wrapper ">
		<footer id="desktop">
			<div> 
				<div class="follow left clear">Follow Us On: &nbsp;
					<a target="_blank" href="https://www.facebook.com/addroid"><img src="imagery/fb_bt.png" />&nbsp;</a>
					<a target="_blank" href="https://www.twitter.com/addroid"><img src="imagery/tw_bt.png" />&nbsp;</a>
					<a target="_blank" href="http://www.linkedin.com/company/addroid"><img src="imagery/in_bt.png" />&nbsp;</a>
					<a target="_blank" href="http://www.vimeo.com/addroid"><img src="imagery/vi_bt.png" />&nbsp;</a>
				</div>
				
			<div id="footer_menu" class="clear">
				<div class="box left">
					<h4>Company</h4>
					<ul>
						<li><a href="about.php">About</a></li>
						<li><a href="http://blog.addroid.com">Blog</a></li>
						<li><a href="examples.php">Examples</a></li>
						<li><a href="publishers.php">Publishers</a></li>
						
					</ul>
				</div>
				<div class="box left">
					<h4>Product</h4>
					<ul>
						<li><a href="http://app.addroid.com/">Login</a></li>
						<li><a href="http://app.addroid.com/signup">Signup</a></li>
						<li><a href="http://help.addroid.com/">Help</a></li>
						<li><a href="/#top" class="jump">Demo Video</a></li>
					</ul>
				</div>
				<div class="box left contact">
					<h4>Contact</h4>
					Addroid
					<br />6363 Wilshire #550
					<br />Los Angeles, CA 90048
					<br />t. <a href="tel:3233701081">323.370.1081</a>
					<br />e. <a href="mailto:info@addroid.com">info@addroid.com</a>
				</div>
				<div class="box left">
					<h4>Newsletter</h4>
					<div id="newsletter-div">
					<form name="newsletter" method="post" action="functions/mailchimp.php" onsubmit="return validateForm(this);">
						<input name="email" class="email" type="text" placeholder="Enter email address" />
						<input name="submit" class="s" type="submit" value="">
					</form>
					<br />
					<p id="newsletter_error" class="red"></p>
					</div>
				</div>
		</footer>
		<footer id="mobile">
		<div style="margin: 0 auto; width: 280px;">
			<div class="left" style="padding-top: 50px; width: 140px; text-align: left;">
						Addroid
						<br />6363 Wilshire Blvd., Suite 550 
						<br />Los Angeles, CA 90048  
						<br />t. <a href="tel:3233701081">323.370.1081</a>
						<br />e. <a href="mailto:info@addroid.com">info@addroid.com</a>
			</div>
		
		<div class="left" >
			<img src="imagery/addroid-guy.png" width="140" />
		</div>
		</div>
		<div class="clear" id="map"><a target="_blank" href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=8455+Beverly+Blvd+%23309+West+Hollywood+CA+90048&amp;aq=&amp;sll=34.076159,-118.375132&amp;sspn=0.008025,0.007703&amp;gl=us&amp;ie=UTF8&amp;hq=&amp;hnear=8455+Beverly+Blvd+%23309,+Los+Angeles,+California+90048&amp;t=f&amp;ll=34.093897,-118.368244&amp;spn=0.049755,0.048065&amp;z=13&amp;ecpose=34.06953559,-118.36824417,2818.69,0,44.975,0&amp;iwloc=A"><img src="imagery/addroid-map.png" width="280" /></a>
		
</div>
		</footer>
		
		<div class="copyright clear">
		&copy; <?php echo date('Y'); ?> <a href="./">Addroid</a>, Inc. All Rights Reserved |     <a href="privacy.php">Privacy Policy</a>     |     <a href="privacy_ads.php">Advertising Privacy Policy</a>
		</div>
	</div><!-- .wrapper-->
</div><!-- .bottom-->
<script src="js/home.js"></script>
<div id="cover" style="opacity: 0; display: none;"></div>
	<div class="backdrop"><div class="close-backdrop"></div><div class="preview-frame"></div></div>
	<div class="vidbox"></div>
	<div class="close"></div>
</body>
</html>