<?php include('../module/head.php');?>

<body class="section-device">

<?php include('../module/nav-primary.php');?>

<section class="container-fluid">

	<div class="row-fluid">

		<div class="span3">
			<?php include('../module/nav-secondary.php');?>
		</div>

		<div class="span9">

			<h1 class="page-header">Sony PSP-3000</h1>

			<p class="lead browser browser-unknown">Identifies itself as Netscape 4.0, but is actually a version of NetFront.</p>

			<div class="row-fluid">

				<div class="span6">

					<img src="../image/psp-3000-controller.png" alt="Photo of the PSP 3000 controller." />

				</div>

				<div class="span6">

					<p>The screen is not a touch screen. There is a small cursor that can be moved around using the left thumbstick. The d-pad cycles through links on the page and scrolls.</p>

					<p>The left and right shoulder pads move back and forward through the browser history. Holding down the square button and tapping the right shoulder pad opens up a new tab. There can be up to 3 tabs open at once.</p>

					<p>The browser standard is very low. A lot of sites don't load, or content doesn't appear. Typing is very fiddly, keyboard is SMS style and the select and cancel keys are mapped differently to modern PlayStation controls (select and cancel are swapped round)</p>

					<p>Text size can be adjusted in the settings.</p>

					<aside><p><a href="http://en.wikipedia.org/wiki/PlayStation_Portable#PSP-3000">More about the PSP-3000 on Wikipedia</a></p></aside>

				</div>

			</div>

			<div class="row-fluid">

				<div class="span6 well">
					<h3>HTML5 Test: Test wouldn't run</h3>
					<div class="progress progress-success">
					  <div class="bar"></div>
					</div>
					<p>As of February 2013. Source: <a href="http://html5test.com">html5test.com</a></p>
				</div>

				<div class="span6 well">
					<h3>CSS3 Test: Test wouldn't run</h3>
					<div class="progress progress-success">
					  <div class="bar"></div>
					</div>
					<p>As of February 2013. Source: <a href="http://css3test.com">css3test.com</a></p>
				</div>

			</div>

			<h2 class="page-header">Support Details</h2>

			<table class="table table-striped">
				<tr>
					<th>Operating System</th>
					<td>Unknown OS</td>
				</tr>
				<tr>
					<th>Screen Resolution</th>
					<td>480 x 272</td>
				</tr>
				<tr>
					<th>Web Browser</th>
					<td>Netscape 4 <span class="muted">Actually NetFront</span></td>
				</tr>
				<tr>
					<th>Browser Size</th>
					<td>480 x 272</td>
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
					<td><code>Mozilla/4.0 (PlayStation Portable); 2.00)</code></td>
				</tr>
			</table>

			<h2 class="page-header">Controls</h2>
			<figure>
				<a href="../image/diagram-psp-3000-controller.png">
					<img src="../image/diagram-psp-3000-controller.png" alt="diagram of the PS Vita" />
					<figcaption>
						<p><i class="icon icon-resize-full"></i> See big version</p>
					</figcaption>
				</a>
			</figure>

			<h2 class="page-header">Tests</h2>
			<h3>Media query tests</h3>

			<aside><p>Source: <a href="http://www.jordanm.co.uk/palmreader">Palm Reader</a></p></aside>


			<div class="row-fluid">

				<div class="span4">
					<h4>What the device can read:</h4>

					<ul>
						<li><code>screen</code></li>

					</ul>
				</div>

				<div class="span4">

					<h4>What the device says it isn't:</h4>

					<ul>
						<li><code>print</code></li>
						<li><code>tv</code></li>
						<li><code>color</code></li>
						<li><code>(color-index)</code></li>
						<li><code>monochrome</code></li>
						<li><code>handheld</code></li>
						<li><code>projection</code></li>
						<li><code>(orientation : portrait)</code></li>
						<li><code>(orientation : landscape)</code></li>
						<li><code>(-webkit-min-device-pixel-ratio: 2)</code></li>
						<li><code>(scan:progressive)</code></li>
						<li><code>(scan:interlace)</code></li>
						<li><code>(grid)</code></li>
						<li><code>(min-device-width)</code></li>
						<li><code>(max-device-width)</code></li>
						<li><code>(min-device-height)</code></li>
						<li><code>(max-device-height)</code></li>
						<li><code>(min-width)</code></li>
						<li><code>(max-width)</code></li>
						<li><code>(min-height)</code></li>
						<li><code>(max-height)</code></li>
						<li><code>(min-resolution)</code></li>
						<li><code>(max-resolution)</code></li>
						<li><code>(pointer:coarse)</code></li>
						<li><code>(pointer:fine)</code></li>
						<li><code>(pointer:none)</code></li>
						<li><code>(luminosity:normal)</code></li>
						<li><code>(luminosity:dim)</code></li>
						<li><code>(luminosity:washed)</code></li>
						<li><code>(hover)</code></li>
						<li><code>(script)</code></li>
					</ul>

				</div>

			</div>

			<h3>device-pixel-ratio test</h3>
			<aside><p>Source: <a href="http://www.quirksmode.org/m/tests/dpr.html">Quirksmode</a></p></aside>
			<ul>
				<li>Media queries for device-pixel-ratio: not supported.</li>
				<li>screen.width equals 480.</li>
				<li>Layout viewport width is undefined.</li>
				<li>Expected DPR is NaN.</li>
				<li>Reported DPR is undefined.</li>
			</ul>


			<h2 class="page-header">Photos</h2>
			<p class="quiet">Coming Soon...</p>

		</div><!-- .span9 -->

	</div><!-- .row-fluid -->

</section>

<?php include('../module/foot.php');?>

</body>

</html>