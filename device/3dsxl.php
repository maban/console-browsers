<?php include('../module/head.php');?>
<body class="section-device">
<header id="top">
	<?php include('../module/nav.php');?>
	<h1 class="heading">Nintendo 3DS XL</h1>
</header>

<section class="content">
	
<article>
	
	<div class="entry-content">
		
		<h2>About the Nintendo 3DS XL</h2>
		
		<aside><p><a href="http://en.wikipedia.org/wiki/Nintendo_3DS">More about the 3DS on Wikipedia</a></p></aside>
		
		<p>Features three cameras: two on the back for taking 3D photos and video and one forward-facing one on the front.</p>
		
		<p>3D images cannot be viewed within the browser: they need to be downloaded first. They are saved in MPO format which is 2 JPEGs layered on top of each other, which falls back to a single JPEG where 3D images aren't supported.</p>
		
		<h2>Controls</h2>
		
		<figure>
			<a href="../image/diagram-3dsxl-controller.png">
				<img src="../image/diagram-3dsxl-controller.png" alt="diagram of the controls on the 3DS XL" />
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
			<li><code>color</code></li>
			<li><code>(orientation : portrait)</code></li>
			<li><code>(min-width)</code></li>
			<li><code>(max-width)</code></li>
		</ul>
		
		<h4>What the device says it isn't:</h4>
		
		<ul>
			<li><code>print</code></li>
			<li><code>tv</code></li>
			<li><code>monochrome</code></li>
			<li><code>handheld</code></li>
			<li><code>projection</code></li>
			<li><code>(-webkit-min-device-pixel-ratio: 2)</code></li>
		</ul>
		
		<h4>Device doesn't recognise:</h4>
		
		<ul>
			<li><code>(pointer:coarse)</code></li>
			<li><code>(pointer:fine)</code></li>
			<li><code>(pointer:none)</code></li>
		</ul>
		
		<h3>device-pixel-ratio test</h3>
		
		<aside><p>Source: <a href="http://www.quirksmode.org/m/tests/dpr.html">Quirksmode</a></p></aside>
		
		<ul>
			<li>Media queries for device-pixel-ratio not supported.</li>
			<li>screen.width equals 320.</li>
			<li>Layout viewport width is 320.</li>
			<li>Expected DPR is 1.</li>
			<li>Reported DPR is 1.</li>
		</li>
		
		<h2>Photos</h2>
		
		<div class="photos">
			<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?show_name=1&count=10&display=latest&size=m&layout=h&context=in%2Fpool-2101283%40N20%2F&source=group_tag&group=2101283%40N20&tag=3ds+xl">
			</script>
			<p class="quiet">See more on <a href="http://www.flickr.com" id="flickr_www">www.<strong style="color:#3993ff">flick<span style="color:#ff1c92">r</span></strong>.com</a> in the <a href="http://www.flickr.com/groups/2101283@N20/pool/tags/3ds xl">Game console browsers pool tagged with 3ds xl</a></p>
		</div>
		
	</div><!-- .entry-content -->
	
	<div class="supplementary">
		
		<img src="../image/3dsxl-controller.png" alt="diagram of the 3DS XL controller" />
		
		<p class="browser browser-webkit">Identifies itself as Mozilla 5.0, but is actually a Webkit version of NetFront.</p>
		
		<h2>Support Details</h2>
		
		<aside><p>Source: <a href="http://supportdetails.com/">Support Details by Imulus</a>, July 2012</p></aside>
		
		<table>
			<tr>
				<th>Operating System</th>
				<td>unknown</td>
			</tr>
			<tr>
				<th>Screen Resolution</th>
				<td>320 x 240</td>
			</tr>
			<tr>
				<th>Web Browser</th>
				<td>unknown <span class="note">Actually NetFront</span></td>
			</tr>
			<tr>
				<th>Browser Size</th>
				<td>554 x 640</td>
			</tr>
			<tr>
				<th>Color Depth</th>
				<td>16</td>
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
				<td><code>Mozilla/5.0 (Nintendo 3DS; U; ; en) Version/1.7455.EU</code></td>
			</tr>
		</table>
		
		<div class="highlight highlight-html">
			<h3>HTML5 Support</h3>
			<strong>98/500</strong>
			<p>as of July 2012</p>
			<aside><p>Source: <a href="http://html5test.com">html5test.com</a></p></aside>
		</div>
		
		<div class="highlight highlight-css">
			<h3>CSS3 Support</h3>
			<strong>42%</strong>
			<p>as of July 2012</p>
			<aside><p>Source: <a href="http://css3test.com">css3test.com</a></p></aside>
		</div>
		
	</div><!-- .supplementary -->
	
</article>

</section>

<?php include('../module/foot.php');?>
</body>
</html>