<?php include('../module/head.php');?>

<body class="section-device">

<?php include('../module/nav-primary.php');?>

<section class="container-fluid">
	
	<div class="row-fluid">
		
		<div class="span3">
			<?php include('../module/nav-secondary.php');?>
		</div>
		
		<div class="span9">
		
			<h1 class="page-header">Microsoft Xbox 360</h1>
			
			<p class="lead browser browser-ie">Runs IE9.</p>
			
			<div class="row-fluid">
			
				<div class="span6">
				
					<img src="../image/xbox360-controller.png" alt="Photo of the Xbox 360 controller." />
								
				</div>
				
				<div class="span6">
				
					<p>There's a cursor on the screen that glows green when it's hovered over a link. Scrolling is sluggish. You can scroll by going off the bottom edge of the screen (left analogue stick) or by panning down with the right analogue stick. On the screen, there's a little scrollbar that can't be manipulated. The screen can flicker quite a bit on scroll</p>
					
					<p>In the settings, you can select an option to "use whole TV screen to show web content", which is off by default. When it's off, gaps appear at the edge of the site. When it's on, the site fits the TV screen up to the edges.</p>
					
					<p>The settings also have an option to "use web pages formatted for mobile devices". This only works on sites using user agent string detection to serve up an <code>m.</code> version, not responsive sites.</p>
					
					<?php/* <img class="full" src="../image/xbox-photo-settings.jpeg" alt="photo of the Xbox browser's settings" />*/ ?>
					
					<p>The keyboard has big touch areas. This is good for gesture or for using a device like a Wii-mote, but when you're using the analogue stick on the Xbox controller, this means lots of traversing.</p>
					
					<p>The D-pad can't be used toggle through keys on the keyboard, only to move the position of the text cursor.</p>
					
					<!--<img class="full" src="../image/xbox-photo-keyboard.jpg" alt="photo of the Xbox browser's keyboard" />
					
					<p>You can zoom in using the shoulder buttons (LT and RT)</p>
					
					<p>The typography handling is better than other consoles, but not as good as desktop browsers.</p>
					
					<p>Flash doesn't work, so no Youtube. No file handling.</p>-->
					
					<aside><p><a href="http://en.wikipedia.org/wiki/Xbox_360">More about the Xbox 360 on Wikipedia</a></p></aside>
					
					<p>I'm still collecting notes on the Xbox 360 yet, so you should check out <a href="http://www.broken-links.com/2012/10/16/internet-explorer-on-xbox-360/">Peter Gasston</a>'s notes for more information and screenshots.</p>
				
				</div>
			
			</div>
			
			<div class="row-fluid">
			
				<div class="span4 well">
					<h3>HTML5 Test: 120/500</h3>
					<div class="progress progress-danger">
					  <div class="bar" style="width: 24%"></div>
					</div>
					<p>As of February 2013. Source: <a href="http://html5test.com">html5test.com</a></p>
				</div>
				
				<div class="span4 well">
					<h3>CSS3 Test: 33%</h3>
					<div class="progress progress-info">
					  <div class="bar" style="width: 33%"></div>
					</div>
					<p>As of February 2013. Source: <a href="http://css3test.com">css3test.com</a></p>
				</div>
				
				<div class="span4 well">
					<h3>Acid3 Test: 100%</h3>
					<div class="progress progress-success">
					  <div class="bar" style="width: 100%"></div>
					</div>
					<p>As of February 2013.</p>
					<p>Source: <a href="http://acid3.acidtests.org/">acid3.acidtests.org</a></p>
				</div>
			
			</div>
			
			<h2 class="page-header">Support Details</h2>
			
			<aside><p>Source: <a href="http://supportdetails.com/">Support Details by Imulus</a>, July 2012</p></aside>
			
			<table class="table table-striped">
				<tr>
					<th>Operating System</th>
					<td>Windows 7</td>
				</tr>
				<tr>
					<th>Screen Resolution</th>
					<td>1041 x 586</td>
				</tr>
				<tr>
					<th>Web Browser</th>
					<td>Internet Explorer 9.0</td>
				</tr>
				<tr>
					<th>Browser Size</th>
					<td>1041 x 586</td>
				</tr>
				<tr>
					<th>Color Depth</th>
					<td>24</td>
				</tr>
				<tr>
					<th>Javascript</th>
					<td>Enabled</td>
				</tr>
				<tr>
					<th>Flash Version</th>
					<td>Not Installed</td>
				</tr>
				<tr>
					<th>Cookies</th>
					<td>Enabled</td>
				</tr>
				<tr>
					<th>User Agent</th>
					<td><code>Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; Xbox)</code>, or <code>Mozilla/5.0 (compatible; MSIE 9.0; Windows Phone OS 7.5; Trident/5.0; IEMobile/9.0; Xbox)</code> in mobile view.</td>
				</tr>
			</table>
			
		
			<h3>Google TV jQuery UI library tests</h3>
		
			<aside><p>Source: <a href="https://developers.google.com/tv/web/lib/jquery/">Google TV jQuery UI Library (1.0)</a></p></aside>
		
			<ul>
				<li><a href="http://gtv-ui-lib.googlecode.com/svn/trunk/jquery/examples/row-control.html">RowControl</a>: Works as expected</li>
				<li><a href="http://gtv-ui-lib.googlecode.com/svn/trunk/jquery/examples/sidenav-control.html">SideNavControl</a>: <a href="http://www.flickr.com/photos/anna_debenham/8324581577">Buggy</a></li>
				<li><a href="http://gtv-ui-lib.googlecode.com/svn/trunk/jquery/examples/slider-control.html">SlidingControl</a>: Buggy (no content displays)</li>
				<li><a href="http://gtv-ui-lib.googlecode.com/svn/trunk/jquery/examples/slider-control.html">SlidingControl</a>: Buggy (no content displays)</li>
				<li><a href="http://gtv-ui-lib.googlecode.com/svn/trunk/jquery/examples/builderphoto-page.html">PhotoControl</a>: Buggy (no content displays)</li>
				<li><a href="http://gtv-ui-lib.googlecode.com/svn/trunk/jquery/examples/buildervideo-page.html">VideoControl</a>: <a href="http://www.flickr.com/photos/anna_debenham/8325637848">Buggy</a></li>
				<li><a href="http://gtv-ui-lib.googlecode.com/svn/trunk/jquery/examples/roller-control.html">RollerControl</a>: <a href="http://www.flickr.com/photos/anna_debenham/8325637282">Buggy</a></li>
				<li><a href="http://gtv-ui-lib.googlecode.com/svn/trunk/jquery/examples/rotator-control.html">RotatorControl</a>: <a href="http://www.flickr.com/photos/anna_debenham/8324579435">Buggy</a></li>
				<li><a href="http://gtv-ui-lib.googlecode.com/svn/trunk/jquery/examples/stack-control.html">StackControl</a>: <a href="http://www.flickr.com/photos/anna_debenham/8325635932">Buggy</a></li>
				<li><a href="http://gtv-ui-lib.googlecode.com/svn/trunk/jquery/examples/builderphoto-page.html">BuilderPhotoPage</a>: Buggy (no content displays)</li>
				<li><a href="http://gtv-ui-lib.googlecode.com/svn/trunk/jquery/examples/buildervideo-page.html">BuilderVideoPage</a>: <a href="http://www.flickr.com/photos/anna_debenham/8325637848">Buggy</a></li>
			</ul>
		
			<h3>Media query tests</h3>
			
			<aside><p>Source: <a href="http://www.jordanm.co.uk/palmreader">Palm Reader</a></p></aside>
			
			
			<div class="row-fluid">
				
				<div class="span4">
					<h4>What the device can read:</h4>
					
					<ul>
						<li><code>screen</code></li>
						<li><code>color</code></li>
						<li><code>(orientation : landscape)</code></li>
						<li><code>(min-width)</code></li>
						<li><code>(max-width)</code></li>
					</ul>
				</div>
				
				<div class="span4">
					<h4>What the device says it isn't:</h4>
					
					<ul>
						<li><code>print</code></li>
						<li><code>tv</code></li>
						<li><code>monochrome</code></li>
						<li><code>handheld</code></li>
						<li><code>projection</code></li>
					</ul>
				</div>
				
				<div class="span4">
					<h4>Device doesn't recognise:</h4>
					
					<ul>
						<li><code>(-webkit-min-device-pixel-ratio: 2)</code></li>
						<li><code>(pointer:coarse)</code></li>
						<li><code>(pointer:fine)</code></li>
						<li><code>(pointer:none)</code></li>
					</ul>
				</div>
			
			</div>
		
			<h2 class="page-header">Controls</h2>
			
			<h3>Primary Controller</h3>
			
			<figure>
				<a href="../image/diagram-xbox360-controller.png">
					<img src="../image/diagram-xbox360-controller.png" alt="Photo of the Xbox 360 controller." />
					<figcaption>
						<p><i class="icon icon-resize-full"></i> See big version</p>
					</figcaption>
				</a>
			</figure>
			
			<h3>Other input devices</h3>
			
			<ul>
				<li><a href="http://en.wikipedia.org/wiki/Kinect">Kinect</a>, motion sensing input device. Used for gestural interfaces and spoken commands.</li>
				<li><a href="http://en.wikipedia.org/wiki/Xbox_SmartGlass">SmartGlass</a></li>
				<li><a href="http://en.wikipedia.org/wiki/Xbox_360_accessories#Messenger_Kit">Chatpad</a> (keyboard that clips onto the controller)</li>
			</ul>
			
			<h2 class="page-header">Photos</h2>
			
			<div class="thumbnails flickr">
				<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?show_name=1&count=3&display=latest&size=m&layout=h&context=in%2Fpool-2101283%40N20%2F&source=group_tag&group=2101283%40N20&tag=xbox+360">
				</script>
			</div>
		
			<p class="quiet">See more on <a href="http://www.flickr.com" id="flickr_www">www.<strong style="color:#3993ff">flick<span style="color:#ff1c92">r</span></strong>.com</a> in the <a href="http://www.flickr.com/groups/2101283@N20/pool/tags/xbox 360">Game console browsers pool tagged with xbox 360</a></p>
			
		</div><!-- .span9 -->
	
	</div><!-- .row-fluid -->

</section>

<?php include('../module/foot.php');?>

</body>

</html>