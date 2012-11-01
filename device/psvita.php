<?php include('../module/head.php');?>
<body class="section-device">
<header id="top">
	<?php include('../module/nav.php');?>
	<h1 class="heading">PS Vita</h1>
</header>

<section class="content">

<article>
	
	<div class="entry-content">
		
		<h2>About the PlayStation Vita</h2>
		
		<aside><p><a href="http://en.wikipedia.org/wiki/Ps_vita">More about the PlayStation Vita on Wikipedia</a></p></aside>
		
		<p>First of the PS line to include a 3G option.</p>
		
		<p>Browser relies heavily on the touchscreen–doesn't seem to take advantage of the game controls on the device.</p>
		
		<p>Youtube website doesn't work (Flash out of date) but there's an app for it.</p>
		
		<p>Up to 8 browser windows can be opened at once.</p>
		
		<h2>Controls</h2>
		
		<figure>
			<a href="../image/diagram-psvita-controller.png">
				<img src="../image/diagram-psvita-controller.png" alt="diagram of the PS Vita" />
				<figcaption>
					<p>See big version</p>
				</figcaption>
			</a>
		</figure>
		
		<p>Touchpad on the back to keep thumbs out of the way of the screen. Browser doesn't make use of this.</p>
		
		<h2>Tests</h2>
		
		<h3>Media query tests</h3>
		
		<aside><p>Source: <a href="http://www.jordanm.co.uk/palmreader">Palm Reader</a></p></aside>
		
		<h4>What the device can read:</h4>
		
		<ul>
			<li><code>screen</code></li>
			<li><code>color</code></li>
			<li><code>(orientation : landscape)</code></li>
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
		
		<h2>Photos</h2>
		
		<div class="photos">
			<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?show_name=1&count=10&display=latest&size=m&layout=h&context=in%2Fpool-2101283%40N20%2F&source=group_tag&group=2101283%40N20&tag=psvita">
			</script>
			<p class="quiet">See more on <a href="http://www.flickr.com" id="flickr_www">www.<strong style="color:#3993ff">flick<span style="color:#ff1c92">r</span></strong>.com</a> in the <a href="http://www.flickr.com/groups/2101283@N20/pool/tags/psvita">Game console browsers pool tagged with psvita</a></p>
		</div>
		
	</div><!-- .entry-content -->
		
		<div class="supplementary">
		
		<img src="../image/psvita-controller.png" alt="diagram of the controls on the PS Vita" />		
		
		<p class="browser browser-webkit">browser identifies itself as Silk, which is the Amazon's Kindle Fire browser, but it's actually a Webkit-based version of NetFront.</p>
		
		<h2>Support Details</h2>
		<aside><p>Source: <a href="http://supportdetails.com/">Support Details by Imulus</a></p></aside>
		
		<table>
			<tr>
				<th>Operating System</th>
				<td>unknown</td>
			</tr>
			<tr>
				<th>Screen Resolution</th>
				<td>960 x 544</td>
			</tr>
			<tr>
				<th>Web Browser</th>
				<td>Safari -- <span class="note">Actually NetFront</span></td>
			</tr>
			<tr>
				<th>Browser Size</th>
				<td>1024 x 585</td>
			</tr>
			<tr>
				<th>Color Depth</th>
				<td>32</td>
			</tr>
			<tr>
				<th>Javascript</th>
				<td>Yes</td>
			</tr>
			<tr>
				<th>Flash Version</th>
				<td>Not Installed</td>
			</tr>
			<tr>
				<th>Cookies</th>
				<td>Yes</td>
			</tr>
			<tr>
				<th>User Agent</th>
				<td><code>Mozilla/5.0 (PlayStation Vita 1.69) AppleWebKit/531.22.8 (KHTML, like
				Gecko) Silk/3.2</code> <span class="note">Silk is the browser for the Kindle Fire</span></td>
			</tr>
		</table>
		
		<div class="highlight highlight-html">
			<h3>HTML5 Support</h3>
			<strong>58/500</strong>
			<p>as of July 2012</p>
			<aside><p>Source: <a href="http://html5test.com">html5test.com</a></p></aside>
		</div>
		
		<div class="highlight highlight-css">
			<h3>CSS3 Support</h3>
			<strong>32%</strong>
			<p>as of July 2012</p>
			<aside><p>Source: <a href="http://css3test.com">css3test.com</a></p></aside>
		</div>
		
	</div><!-- .supplementary -->
		
</article>

</section>
<?php include('../module/foot.php');?>
</body>
</html>