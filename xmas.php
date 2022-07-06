<!DOCTYPE HTML>
<html lang="en-gb" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />
		<meta name="description" content="Daly's Limerick stock a wide range of hardware, DIY, home decor and lighting products.
		Check out the Christmas stock we have available this year.">
		<base href="https://www.dalyslimerick.com/xmas.php" />
		<title>Christmas</title>
		<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="stylesheet" href="styles.css" />
		<style type="text/css">
			main img {
				height: 200px;
				width: 200px;
			}
		
			main {
				padding-bottom: 0;
			}
			
			main > p {
				margin: 0;
				padding-top: 1.5em;
			}
			
			main i, main strong {	
				font-style: normal;
				font-size: 1.2em;
			}
			
			main ul li {
				display: flex;
				align-items: center;
				padding: 1.5em 0;
			}
			
			main ul {
				padding: 0;
				display: flex;
				flex-wrap: wrap;
				border-top: solid .5px #9894a6;
				border-bottom: solid .5px #9894a6;
				margin-bottom: 0;
			}
			
			main > nav {
				text-align: center;
				border: 0;
				padding: 0;
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
			
			main > nav a[href="?page=<?php if (isset($_GET['page'])) { echo $_GET['page']; } ?>"] {
				font-weight: bold;
			}
			
			main > nav ~ nav {
				padding-top: .5em;
				padding-bottom: 1em;
			}
			
			@media screen and (min-width: 768px) {
				main ul li {
					flex-basis: 49%;
					border-right: solid 1px #9894a6;
				}
				
				main ul li:nth-child(even) {
					border-right: none;
				}
				
				main ul {
					border-top: solid 1px #9894a6;
					border-bottom: 0;
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
				
				main > nav a[href="?page=<?php if (isset($_GET['page'])) { echo $_GET['page']; } ?>"] {
					background-color: #9894a6;
					font-weight: normal;
				}
				
				main > nav ~ nav {
					display: none;
				}
			}
		</style>
	</head>
	<script>
		var m = window.matchMedia("(min-width: 768px)");
		
		function cssP1() {
			<?php
			if (!isset($_GET['page'])) {
			?>
				var p = document.getElementsByClassName("P1");
				if (m.matches) { // If media query matches
					//document.getElementById("P1").style.background = '#9894a6';
					p[0].style.background = '#9894a6';
				} else {
					//document.getElementById("P1").style.fontWeight = 'bold';
					p[0].style.fontWeight = 'bold';
					p[1].style.fontWeight = 'bold';
				}
			<?php
			}
			?>
		}
	</script>
	<body>
		<header>
			<div>
				<h1>LIMERICKS HARDWARE, DIY &amp; HOME DECORATING SPECIALISTS</h1>
			</div>
			<img src="images/logo-dalys-limerick.png" height="133" width="362" alt="Logo of Daly's Limerick" />
			<p>
				<img src="images/call-limerick-hardware-store.jpg" height="27" width="27"
					alt="call-limerick-hardware-store" />
				061 416181
			</p>
			<p>dalyslimerick@gmail.com</p>
		</header>
		<nav>
			<select onchange="window.location.href = options[selectedIndex].value;">
				<option value="/">Home</option>
				<option value="diy-hardware">DIY / Hardware</option>
				<option value="home-decor">Home Decor</option>
				<option value="lighting">Lighting</option>
				<option value="in-demand">In Demand</option>
				<option value="" selected="selected">Christmas</option>
				<option value="contact">Contact</option>
				<option value="find-us">Find Us</option>
			</select>
			<ul>
				<li><a href="/">HOME</a></li><!--
				--><li><a href="diy-hardware">DIY / HARDWARE</a></li><!--
				--><li><a href="home-decor">HOME DECOR</a></li><!--
				--><li><a href="lighting">LIGHTING</a></li><!--
				--><li><a href="in-demand">IN DEMAND</a></li><!--
				--><li><a href="">XMAS</a></li><!--
				--><li><a href="contact">CONTACT</a></li><!--
				--><li><a href="find-us">FIND US</a></li>
			</ul>
		</nav>
		<main>
			<p style="float: left;">
				Click through pages to see more Christmas products.<br>
				Orders and payment can be taken over the phone or by email.
			</p>
			<nav>
				<ol>
					<?php
					$limit = 16;   
					if (isset($_GET["page"])) {  
					  $pn  = $_GET["page"];  
					}  
					else {  
					  $pn=1;  
					};
					//$start_from = ($pn-1) * $limit + 1;
					$dir    = 'XMAStxt';
					$array = scandir($dir);
					$total_records = count($array);
					$total_pages = ceil($total_records / $limit);
					if ($total_pages > 7) {
						// calculate k (pn - k is the first page to be shown on pn's pagLink)
						// if pn is between 3pgs from the start and 3pgs from the end
						if ($pn > 2 && $pn < $total_pages) {
							$k = -2;
						} else if ($pn-2 < 1) {
							$k = -$pn + 1;
						} else {
							//$k = $pn==$total_pages ? -4 : -3;
							$k = -4;
						}
						if ($pn > 3) { 
							echo "<li><a href='?page=1'> &laquo; </a></li>"; 
						}
						if ($pn > 1) {
							echo "<li><a href='?page=".($pn-1)."'> &lsaquo; </a></li>"; 
						}
						$pagLink = "";
						$j = $pn > 1 && $pn < $total_pages ? 3 : 4 ;
						for ($i=$k; $i<=$k+$j; $i++) { 
							$pagLink .= "<li><a class='P".($pn+$i)."' href='?page=".($pn+$i)."'>".($pn+$i)."</a></li>";
						};   
						echo $pagLink; 
						if($pn < $total_pages){ 
							echo "<li><a href='?page=".($pn+1)."'> &rsaquo; </a></li>";
							if ($pn < $total_pages - 2) {
								echo "<li><a href='?page=".$total_pages."'> &raquo; </a></li>";
							}
						}
					} else {
						$pagLink = "";
						for ($i=1; $i<=$total_pages; $i++) { 
							$pagLink .= "<li><a class='P".$i."' href='?page=".$i."'>".$i."</a></li>";
						};   
						echo $pagLink;
					}				
					?>
				</ol>
			</nav>
			<ul id="content" class="cms-editable">
				<?php
				if (isset($_GET['page'])) {
					//item = ((page-1)*16)+1
					//$item = (($_GET['page']-1)*16)+1;
					$pnum = (int)($_GET['page']);
					$item = ($pnum-1)*16+1;
				} else {
					$item = 1;
				}
				for ($i = $item; is_readable("XMASpng/".$i.".png") && is_readable("XMAStxt/".$i.".txt") && $i<$item+16; $i++) {
					$src = "XMASpng/".$i.".png";
					$txt = "XMAStxt/".$i.".txt";
				?>
					<li>
						<img src="<?php echo $src; ?>" />
						<?php include $txt; ?>
					</li>
				<?php
				}
				?>
			</ul>
			<nav>
				<ol>
					<?php
					$limit = 16;   
					if (isset($_GET["page"])) {  
					  $pn  = $_GET["page"];  
					}  
					else {  
					  $pn=1;  
					};
					$start_from = ($pn-1) * $limit + 1;
					$dir    = 'XMAStxt';
					$array = scandir($dir);
					$total_records = count($array);
					$total_pages = ceil($total_records / $limit);
					if ($total_pages > 7) {
						// calculate k (pn - k is the first page to be shown on pn's pagLink)
						// if pn is between 3pgs from the start and 3pgs from the end
						if ($pn > 2 && $pn < $total_pages) {
							$k = -2;
						} else if ($pn-2 < 1) {
							$k = -$pn + 1;
						} else {
							//$k = $pn==$total_pages ? -4 : -3;
							$k = -4;
						}
						if ($pn > 3) { 
							echo "<li><a href='?page=1'> &laquo; </a></li>"; 
						}
						if ($pn > 1) {
							echo "<li><a href='?page=".($pn-1)."'> &lsaquo; </a></li>"; 
						}
						$pagLink = "";
						$j = $pn > 1 && $pn < $total_pages ? 3 : 4 ;
						for ($i=$k; $i<=$k+$j; $i++) { 
							$pagLink .= "<li><a class='P".($pn+$i)."' href='?page=".($pn+$i)."'>".($pn+$i)."</a></li>";
						};   
						echo $pagLink; 
						if($pn < $total_pages){ 
							echo "<li><a href='?page=".($pn+1)."'> &rsaquo; </a></li>";
							if ($pn < $total_pages - 2) {
								echo "<li><a href='?page=".$total_pages."'> &raquo; </a></li>";
							}
						}
					} else {
						$pagLink = "";
						for ($i=1; $i<=$total_pages; $i++) { 
							$pagLink .= "<li><a class='P".$i."' href='?page=".$i."'>".$i."</a></li>";
						};   
						echo $pagLink;
					}				
					?>
				</ol>
			</nav>
		</main>
		<footer>
			<section>
				<h3>Visit Our Store</h3>
				<p><strong>Daly's</strong></p>
				<p>50-51 William Street</p>
				<p>Limerick</p>
			</section>
			<section>
				<h3>Open Hours</h3>	
				<table>
					<tbody>
						<tr>
							<td style="padding-right: 5px;"><strong>Monday to Friday</strong></td>
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
	<script>
		function reloadIt() {
			<?php
			if (isset($_GET['page'])) {
				$pnum = $_GET['page'];
			} else {
				$pnum = '1';
			}
			?>
			var refresh = window.sessionStorage.getItem( 'refresh'.concat(<?php echo $pnum;?>) );
			console.log(refresh);
			if (refresh===null){
				window.location.reload();
				window.sessionStorage.setItem('refresh'.concat(<?php echo $pnum;?>), "1");
			}
			cssP1();
		}
		if (!m.matches) {
			window.onload = function () {setTimeout('reloadIt()', 500)};
		} else {
			cssP1();
		}
	</script>
</html>
