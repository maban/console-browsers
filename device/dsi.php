<?php include('../module/head.php');?>
<body class="section-device">
<header id="top">
	<?php include('../module/nav.php');?>
	<h1 class="heading">Nintendo DSi</h1>
</header>

<section class="content">
	
<article>

	<div class="entry-content">
		
		<h2>About the Nintendo DSi</h2>
		
		<aside><p><a href="http://en.wikipedia.org/wiki/Nintendo_DSi">More about the Nintendo DSi on Wikipedia</a></p></aside>
		
		<p>Features 2 screens. Bottom is a resistive touchscreen to be used with a stylus provided that can be slotted into the back of the device when not in use.</p>
		
		<p>Text can be entered using an on-screen keyboard…</p>
		
		<img class="full" src="../image/dsi-photo-keyboard.jpeg" alt="photo of the DSi's keyboard" />
		
		<p>…or by writing individual letters using the stylus.</p>
		
		<aside><p>I got this device second-hand and it was missing a stylus, so I'm using a pencil's eraser.</p></aside>
		
		<img class="full" src="../image/dsi-photo-handwriting.jpeg" alt="photo of the DSi's handwriting recognition feature" />
		
		<p>On a site optimised for small screen, both screens will be used to display the site in a single column. On non-optimised sites, 2 versions of the site are displayed. One is a zoomed-in view and the other a zoomed out view.</p>
		
		<aside><p><a href="http://maban.co.uk/73">More about the Nintendo DSi's browser on my blog</a></p></aside>
		
		<img class="full" src="../image/dsi-photo-zoom.jpeg" alt="photo of the DSi's keyboard" />
		
		<h2>Controls</h2>
		
		<figure>
			<a href="../image/diagram-dsi-controller.png">
				<img src="../image/diagram-dsi-controller.png" alt="diagram of the controls on the DSi" />
				<figcaption>
					<p>See big version</p>
				</figcaption>
			</a>
		</figure>
		
		<h2>Tests</h2>
		
		<h3>Media query tests</h3>
		
		<aside><p>Source: <a href="http://www.jordanm.co.uk/palmreader">Palm Reader</a></p></aside>
		
		<h4>What the device can read:</h4>
		
		<ul>
			<li><code>screen</code></li>
		</ul>
		
		<h4>What the device says it isn't:</h4>
		
		<ul>
			<li><code>print</code></li>
			<li><code>tv</code></li>
			<li><code>handheld</code></li>
			<li><code>projection</code></li>
			
		</ul>
		
		<h4>Device doesn't recognise:</h4>
		
		<ul>
			<li><code>color</code></li>
			<li><code>monochrome</code></li>
			<li><code>(orientation : portrait)</code></li>
			<li><code>(orientation : landscape)</code></li>
			<li><code>(-webkit-min-device-pixel-ratio: 2)</code></li>
			<li><code>(min-width)</code></li>
			<li><code>(max-width)</code></li>
			<li><code>(pointer:coarse)</code></li>
			<li><code>(pointer:fine)</code></li>
			<li><code>(pointer:none)</code></li>
		</ul>
		
		<p><code>position:fixed</code> works strangely on the DSi's 2 screens.</p>
		
		<iframe class="full" src="http://player.vimeo.com/video/45241540" width="100%" height="350px" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		
	</div><!-- .entry-content -->
	
	<div class="supplementary">
		
		<img src="../image/dsi-controller.png" alt="Diagram of the DSi" />
		
		<p class="browser browser-opera">Runs an Opera browser.</p>
		
		<h2>Support Details</h2>
		
		<aside><p>Source: <a href="http://supportdetails.com/">Support Details by Imulus</a>, August 2012</p></aside>
		
		<table>
			<tr>
				<th>Operating System</th>
				<td>unknown</td>
			</tr>
			<tr>
				<th>Screen Resolution</th>
				<td>768 x 528</td>
			</tr>
			<tr>
				<th>Web Browser</th>
				<td>Opera 507</td>
			</tr>
			<tr>
				<th>Browser Size</th>
				<td>768 x 528</td>
			</tr>
			<tr>
				<th>Color Depth</th>
				<td>32</td>
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
				<td><code>Opera/9.50 (Nintendo DSi; Opera/507; U; en-GB)</code></td>
			</tr>
		</table>
		
		<div class="highlight highlight-html">
			<h3>HTML5 Support</h3>
			<strong>89/500</strong>
			<p>as of July 2012</p>
			<aside><p>Source: <a href="http://html5test.com">html5test.com</a></p></aside>
		</div>
		
		<div class="highlight highlight-css">
			<h3>CSS3 Support</h3>
			<p>Failed to run</p>
			<p>as of July 2012</p>
			<aside><p>Source: <a href="http://css3test.com">css3test.com</a></p></aside>
		</div>
		
	</div><!-- .supplementary -->

</article>
	
</section>

<?php include('../module/foot.php');?>
</body>
</html>