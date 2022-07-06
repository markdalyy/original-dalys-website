<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />
		<meta
			name="description"
			content="Daly's Limerick stock a wide range of hardware, DIY, home decor and lighting products. Call us on 061 416181 for availabilty or email dalyslimerick@gmail.com."
		/>
		<base href="https://www.dalyslimerick.com/in-demand" />
		<title>In Demand</title>
		<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png" />
		<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png" />
		<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png" />
		<link rel="manifest" href="/site.webmanifest" />
		<link rel="stylesheet" href="styles.css" />
		<style type="text/css">
			.is-cms figure {
				border: dashed 1.5px #9894a6;
			}
			
			nav li {
				float: left;
			}
			
			nav ul {
				padding-bottom: 1.95em;
			}
			
			main figure {
				display: flex;
				margin: 0 1.5em;
				height: 200px;
				width: 200px;
			}
			
			ul li p {
				margin-right: 1.5em;
			}
			
			main img {
				max-width: 200px;
				max-height: 200px;
				margin: auto;
			}

			main {
				padding: 0;
			}

			main > div {
				margin: 0;
				padding: .6em 2.5em 0;
			}

			main i, main strong {
				font-style: normal;
				font-size: 1.2em;
			}

			main ul li {
				width : 100%;
				border-bottom: solid 0.5px #9894a6;
				display: flex;
				align-items: center;
				padding: 1.5em 0;
			}
			
			main ul li {
				display: none;
			}

			main ul {
				padding: 0;
				display: flex;
				flex-wrap: wrap;
				border-top: solid 0.5px #9894a6;
				margin-bottom: 0;
			}
			
			main > nav {
				text-align: center;
				border: 0;
				padding: 1.8em;
				padding-bottom: 0;
			}
			
			ol {
				display: inline-block;
				padding: 0;
				margin-bottom: 0;
			}
			
			ol li {
				display: inline;
			}
			
			main > nav a {
				float: left;
				font-size: 1.6em;
				padding: .5em .77em;
			}
			
			<?php if (isset($_GET['page'])) {?>
				main > nav a[href="?page=<?php echo $_GET['page'];?>"] {
					font-weight: bold;
				}
			<?php
			} else {?>
				.P1 {
					font-weight: bold;
				}
			<?php
			}
			?>
			
			main > nav ~ nav {
				padding-top: .5em;
				padding-bottom: 1em;
			}

			@media screen and (min-width: 768px) {
				main ul {
					border-top: solid 1px #9894a6;
				}

				main ul li {
					flex-basis: 49.9%;
					border: solid 1px #9894a6;
					border-top: none;
				}

				main ul li:nth-child(even) {
					border-right: none;
					border-left: none;
				}
				
				main ul li:nth-child(odd) {
					border-left: none;
				}
				
				main > nav {
					text-align: right;
					padding-top: .8em;
				}
				
				ol {
					display: inline-block;
					padding: 0;
					border-top: solid 3px #9894a6;
					margin-bottom: .5em;
				}
				
				main > nav a {
					background-color: #484162;
					font-size: 1.3em;
					padding: .5em 1.3em;
				}
				<?php if (isset($_GET['page'])) {?>
					main > nav a[href="?page=<?php echo $_GET['page'];?>"] {
						background-color: #9894a6;
						font-weight: normal;
					}
				<?php
				} else {?>
					.P1 {
						background-color: #9894a6;
						font-weight: normal;
					}
				<?php
				}
				?>
				
				main > nav ~ nav {
					display: none;
				}
			}
		</style>
	</head>
	<body>
		<header>
			<div>
				<h1>LIMERICKS HARDWARE, DIY &amp; HOME DECORATING SPECIALISTS</h1>
			</div>
			<img src="images/logo-dalys-limerick.png" height="133" width="362" alt="Logo of Daly's Limerick" />
			<p>
				<img src="images/call-limerick-hardware-store.jpg" height="27" width="27" alt="call-limerick-hardware-store" />
				061 416181
			</p>
			<p>dalyslimerick@gmail.com</p>
		</header>
		<nav>
			<!--cms-ignore-->
			<select onchange="window.location.href = options[selectedIndex].value;">
				<option value="/">Home</option>
				<option value="diy-hardware">DIY / Hardware</option>
				<option value="home-decor">Home Decor</option>
				<option value="lighting">Lighting</option>
				<option value="" selected="selected">In Demand</option>
				<!--option value="xmas">Christmas</option-->
				<option value="contact">Contact</option>
				<option value="find-us">Find Us</option>
			</select>
			<ul>
				<li><a href="/">HOME</a></li>
				<li><a href="diy-hardware">DIY / HARDWARE</a></li>
				<li><a href="home-decor">HOME DECOR</a></li>
				<li><a href="lighting">LIGHTING</a></li>
				<li><a href="">IN DEMAND</a></li>
				<!--li><a href="xmas">XMAS</a></li-->
				<li><a href="contact">CONTACT</a></li>
				<li><a href="find-us">FIND US</a></li>
			</ul>
			<!--/cms-ignore-->
		</nav>
		<main>
			<div style="float:left;">
				<p>
					Please contact store for availabilty.<br />
					Orders and payment can be taken over phone or by email.
				</p>
				<p><strong>*</strong> prices start at</p>
			</div>
			<nav>
				<ol>
				</ol>
			</nav>
			<ul id="content" class="cms-editable" style="clear: left;">
				<li class="cms-repeatable">
					<figure><img data-src="products/salt-lamp-bulb.png" /></figure>
					<p>
						<i>Salt Lamp Bulbs<br />15W SES</i><br /><strong>€2.00</strong>
					</p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/led-bc-bulb.png" /></figure>
					<p><i>LED Bulbs ES/BC</i><br /><strong>€3.00*</strong></p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/command-strips.png" /></figure>
					<p><i>Command Strips</i><br /><strong>€4.95*</strong></p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/mmth-double-sided-tape.png" /></figure>
					<p>
						<i>Mammoth<br />double-sided tape</i><br /><strong>€6.95</strong>
					</p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/fire-grate.png" /></figure>
					<p><i>14-16&quot; Firegrates</i><br /><strong>€18.00*</strong></p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/coreglow-heater.png" /></figure>
					<p>
						<i>Core Glow 4.5kW<br />Portable Gas Heater</i><br /><strong>€89.95</strong>
					</p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/manhattan-heater.png" /></figure>
					<p>
						<i>Manhattan 3.5kW<br />Portable Gas Heater</i><br /><strong>€240.00</strong>
					</p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/sacred-heart-bracket.png"/></figure>
					<p><i>Sacred Heart Bracket</i><br /><strong>€19.95</strong></p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/tiffany-shade.png" /></figure>
					<p><i>Tiffany Shades available</i></p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/3-bar-halogen-heater.jpg" /></figure>
					<p>
						<i>1200W Warmlite<br />3 Bar Halogen Heater</i><br /><strong>€22.95</strong>
					</p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/800w-halogen-heater.jpg" /></figure>
					<p><i>800W Halogen Heater</i><br /><strong>€16.95</strong></p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/1500w-oil-heater.jpg" /></figure>
					<p>
						<i>1500KW<br />Oil filled Radiator</i><br /><strong>€42.95</strong>
					</p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/2000w-fan-heater.jpg" /></figure>
					<p>
						<i>2000W Fan Heater</i><br /><strong>€24.95</strong>
					</p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/radiant-2-bar-heater.jpg" /></figure>
					<p>
						<i>1200W Radiant<br />2 Bar Heater</i><br /><strong>€39.95</strong>
					</p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/2500w-oil-heater.jpg" /></figure>
					<p>
						<i>2500W<br />Oil Filled Radiator</i><br /><strong>€64.95</strong>
					</p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/plug-in-heater.jpg" /></figure>
					<p>
						<i>Warmlite<br />Portable PTC Heater</i><br /><strong>€22.95</strong>
					</p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/paul-neuhaus-ceiling-light.jpg" /></figure>
					<p>
						<i>25W LED Light<br /></i>350 x 350 mm<br /><strong>€175</strong>
					</p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/paul-neuhaus-sarina-pendelleuchte.jpg" /></figure>
					<p>
						<i>23W LED Dimmable<br /></i>1200 x 495 mm<br /><strong>€175</strong>
					</p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/paul-neuhaus-adali-ceiling-light.jpg" /></figure>
					<p>
						<i>42 W LED Dimmable<br /></i>355 x 600 mm<br /><strong>€265</strong>
					</p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/reality-natalia.jpg" /></figure>
					<p>
						<i>36 W LED<br /></i>1200 x 400 mm<br /><strong>€180</strong>
					</p>
				</li>
				<li class="cms-repeatable">
					<figure><img data-src="products/2x7w-ceiling-light.jpg" /></figure>
					<p>
						<i>2 x 7W/3000K LED<br />Ceiling light</i><br /><strong>€220</strong>
					</p>
				</li>
			</ul>
			<nav>
				<ol>
				</ol>
			</nav>
		</main>
		<!--cms-ignore-->
		<script>
			<?php
			if (isset($_GET["page"])) {  
			  $pn  = $_GET["page"];  
			}  
			else {  
			  $pn=1;  
			}
			$limit = 16;
			$item = ($pn-1)*$limit;
			?>
			
			var lists = document.getElementsByTagName("OL");
			
			function updateNavs(content) {
				lists[0].innerHTML += content;
				lists[1].innerHTML += content;
			}
			
			function displayNavs() {
				var product_count = document.getElementById("content").childElementCount;
				var total_pages = Math.ceil(product_count/<?php echo $limit;?>);
				var pagLink;
				if (total_pages > 7) {
					// calculate k (pn - k is the first page to be shown on pn's pagLink)
					// if pn is between 3pgs from the start and 3pgs from the end
					var pn = <?php echo $pn;?>;
					var k;
					var p;
					if (pn > 2 && pn < total_pages) {
						k = -2;
					} else if (pn-2 < 1) {
						k = -pn + 1;
					} else {
						//$k = $pn==$total_pages ? -4 : -3;
						k = -4;
					}
					if (pn > 3) { 
						updateNavs("<li><a href='?page=1'> &laquo; </a></li>"); 
					}
					if (pn > 1) {
						updateNavs("<li><a href='?page="+String(pn-1)+"'> &lsaquo; </a></li>"); 
					}
					pagLink = "";
					var j = pn > 1 && pn < total_pages ? 3 : 4 ;
					var i;
					for (i=k; i<=k+j; i++) { 
						p = String(pn+i);
						pagLink += "<li><a class='P"+p+"' href='?page="+p+"'>"+p+"</a></li>";
					};   
					updateNavs(pagLink);
					if(pn < total_pages){ 
						updateNavs("<li><a href='?page="+String(pn+1)+"'> &rsaquo; </a></li>");
						if (pn < total_pages - 2) {
							updateNavs("<li><a href='?page="+String(total_pages)+"'> &raquo; </a></li>");
						}
					}
				} else {
					pagLink = "";
					var i;
					for (i=1; i<=total_pages; i++) { 
						p = String(i);
						pagLink += "<li><a class='P"+p+"' href='?page="+p+"'>"+p+"</a></li>";
					};   
					updateNavs(pagLink);
				}				
			}
			
			function displayProducts() {
				var products = document.getElementsByClassName("cms-repeatable");
				<?php
				for ($i = $item; $i<$item+$limit; $i++) {
					?>
					li = products[<?php echo $i;?>];
					img = li.getElementsByTagName("IMG")[0];
					img.src = img.dataset.src;
					li.style.display = 'flex';
					<?php
				}
				?>
			}
			
			displayNavs();
			displayProducts();
		</script>
		<!--/cms-ignore-->
		<script>
			if (window.isCMS) {
				var products = document.getElementsByClassName("cms-repeatable");
				var i;
				for (i = 0; i < products.length; i++) {
					li = products[i];
					img = li.getElementsByTagName("IMG")[0];
					img.src = img.dataset.src;
					li.style.display = 'flex';
				}
			}
		</script>
		<footer>
			<section>
				<h3>Visit Our Store</h3>
				<p><strong>Daly&apos;s</strong></p>
				<p>50-51 William Street</p>
				<p>Limerick</p>
			</section>
			<section>
				<h3>Open Hours</h3>
				<table>
					<tbody>
						<tr>
							<td style="padding-right: 5px"><strong>Monday to Friday</strong></td>
							<td>9:00 - 17:30</td>
						</tr>
						<tr>
							<td><strong>Saturday</strong></td>
							<td>9:00 - 17:30</td>
						</tr>
						<tr>
							<td><strong>Sunday</strong></td>
							<td>Closed</td>
						</tr>
					</tbody>
				</table>
			</section>
			<section>
				<h3>Contact Us</h3>
				<p><strong>Tel:</strong> 061 416181</p>
				<p><strong>Tel 2:</strong> 061 412854</p>
				<p><strong>Email:</strong> dalyslimerick@gmail.com</p>
			</section>
		</footer>
	</body>
</html>
