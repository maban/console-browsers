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
		
		<h3>device-pixel-ratio test</h3>
		
		<aside><p>Source: <a href="http://www.quirksmode.org/m/tests/dpr.html">Quirksmode</a></p></aside>
		
		<ul>
			<li>Media queries for device-pixel-ratio not supported.</li>
			<li>screen.width equals 320.</li>
			<li>Layout viewport width is 320.</li>
			<li>Expected DPR is 1.</li>
			<li>Reported DPR is 1.</li>
		</li>
		
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