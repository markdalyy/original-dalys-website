<!DOCTYPE HTML>
<html lang="en-gb" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />
		<base href="https://www.dalyslimerick.com/contact" />
		<meta name="rights" content="www.123web.ie" />
		<meta name="description" content="Daly's Hardware Limerick
		50-51 William Street
		Limerick

		Tel: 061 416181
		Tel 2: 061 412854
		Email:  dalyslimerick@gmail.com" />
		<title>Contact Dalys Limerick | Daly's 50-51 William Street Limerick  Tel: 061 416181 Fax: 061 412854 Email: dalyslimerick@gmail.com </title>
		<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="stylesheet" href="styles.css" />
		<style type="text/css">
			main h3 {
				font-size: 1em;
				font-weight: bold;
				text-indent: 3%;
			}
			
			article, article + section {
				margin: 2em 1em;
				margin-bottom: 0;
			}
			
			article + section {
				margin-left: 3em;
			}
			
			article > p {
				padding: .5em 0em;
			}
			
			address {
				font-style: normal;
			}
			
			fieldset {
				border: none;
			}
			
			form strong {
				color: #484162;
			}
			
			fieldset > strong {
				font-weight: normal;
			}
		
			label {
				font-size: 13px;
			}

			form textarea, 
			form input {
				width: 90%;
				border: 1px solid #ccc;
				background: #fff;
				padding: 4px;
				margin-bottom: 20px;
				line-height: 18px;
			}

			form textarea {
				resize: vertical;
				height: 80px;
				display: block;
			}

			form input[type="submit"] {
				color: #fff;
				margin-top: 5px;
				margin-bottom: 15px;
				line-height: 28px;
				background: #777579;
				border-radius: 3px;
				width: auto;
				border: none;
				padding: 2px 8px;
				padding-bottom: 3px;
				font-size: 13px;
			}

			form input[type="submit"]:hover {
				background: #333;
			}

			form textarea:focus, 
			form input:focus {
				border: 1px solid #F0F0F0;
			}
			
			@media screen and (min-width: 768px) {
				main {
					display: grid;
					grid-template-columns: 55% 45%;
					grid-template-rows: auto;
					grid-template-areas: 'left right'
										 'bottom bottom'
				}

				main > article {
					grid-area: left;
				}

				main > section {
					grid-area: right;
				}

				main > section + section {
					grid-area: bottom;
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
					<!--option value="xmas">Christmas</option-->
					<option value="" selected="selected">Contact</option>
					<option value="find-us">Find Us</option>
			</select>
			<ul>
				<li><a href="/">HOME</a></li><!--
				--><li><a href="diy-hardware">DIY / HARDWARE</a></li><!--
				--><li><a href="home-decor">HOME DECOR</a></li><!--
				--><li><a href="lighting">LIGHTING</a></li><!--
				--><li><a href="in-demand">IN DEMAND</a></li><!--
				<li><a href="xmas">XMAS</a></li>
				--><li><a href="">CONTACT</a></li><!--
				--><li><a href="find-us">FIND US</a></li>
			</ul>
		</nav>
		<main>
			<article>
				<address>
					<strong>Daly's Hardware Limerick</strong><br />50-51 William Street<br />Limerick<br /><br />
					<strong>Tel:</strong> 061 416181<br />
					<strong>Tel 2:</strong> 061 412854<br />
					<!--strong>Email: </strong><a href="mailto:dalyslimerick@gmail.com"></a><a>dalyslimerick@gmail.com</a-->
					<strong>Email: </strong><a href="mailto:dalyslimerick@gmail.com"></a><a>dalyslimerick@gmail.com</a>
				</address>
				<p>
					If you have an questions or queries regarding DIY or Home Decorating, we'd love to help. 
					If you need a certain item and we don't stock it, we'll source it for you. 
					Contact us by phone or email and we'll get straight back to you.
				</p>
			</article>
			<section>
				<h3>QUICK CONTACT FORM</h3>
				<?php
					$success = False;
					$nameErr = $phoneErr = $emailErr = $messageErr = $spamErr = "";
					$name = $phone = $email = $message = $spam = "";
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						if (empty($_POST["Name"])) {
							$nameErr = "Name is required";
						} else {
							$name = $_POST["Name"];
							if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
							  $nameErr = "Only letters and white space allowed";
							}
						}
						if (empty($_POST["Phone"])) {
							$phoneErr = "Contact Number is required";
						} else {
							$phone = $_POST["Phone"];
							if (!is_numeric(str_replace(' ', '', $phone))) {
								$phoneErr = "Invalid contact number";
							}
						}
						if (empty($_POST["EmailAddress"])) {
							$emailErr = "Email is required";
						} else {
							$email = $_POST["EmailAddress"];
							if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
							  $emailErr = "Invalid email format";
							}
						}
						if (empty($_POST["Message"])) {
							$messageErr = "Message is required";
						} else {
							$message = $_POST["Message"];
						}
						if (empty($_POST["Antispam"])) {
							$spamErr = "Answer required";
						} else {
							$spam = strtolower($_POST["Antispam"]);
							if ($spam != "green") {
								$spamErr = "Incorrect answer";
							}
						}
						$errors = array($nameErr, $phoneErr, $emailErr, $messageErr, $spamErr);
						if(count(array_unique($errors)) === 1) {
							$to = "contact@dalyslimerick.com";
							$subject ="Contact Form Message: ".$name;
							$txt = "The following information has been submitted from the contact form on your website.<br /><br />".
									"<b>Name: </b>".$name."<br /><br />".
									"<b>Contact Number: </b>".$phone."<br /><br />".
									"<b>Email: </b>".$email."<br /><br />".
									"<b>Message:</b><br />".$message;
							$headers = "MIME-Version: 1.0\r\n";
							$headers.= "From: ".$email . "\r\n";
							$headers.= "Content-Type: text/html; charset=UTF-8" . "\r\n";
							mail($to, $subject, $txt, $headers);
							$success = True;
							echo "Thank you. Your message has been sent successfully.";
						}
					}
					if (!$success) {
						?>
						<!--form method="post" action="http://www.dalyslimerick.com/contact"-->
						<form action="" method="post">
							<fieldset>
								<label for="Name">
									Contact Name&nbsp;<strong> *</strong>
								</label>
								<strong><?php echo $nameErr;?></strong>
								<input type="text" maxlength="50" name="Name" value="<?php echo $name;?>" id="Name" />
								
								<label for="Phone">
									Contact Number&nbsp;<strong> *</strong>
								</label>
								<strong><?php echo $phoneErr;?></strong>
								<input type="tel" maxlength="50" name="Phone" value="<?php echo $phone;?>" id="Phone" />
								
								<label for="EmailAddress">
									Email Address&nbsp;<strong> *</strong>
								</label>
								<strong><?php echo $emailErr;?></strong>
								<input type="email" maxlength="50" name="EmailAddress" value="<?php echo $email;?>" id="EmailAddress" />
								
								<label for="Message">
									Message&nbsp;<strong> *</strong>
								</label>
								<strong><?php echo $messageErr;?></strong>
								<textarea cols="20" rows="8" name="Message" id="Message" ><?php echo $message;?></textarea>
								
								<label for="Antispam">
									Spam Question - what is the colour of grass?&nbsp;<strong> *</strong>
								</label>
								<strong><?php echo $spamErr;?></strong>
								<input type="text" name="Antispam" value="<?php echo $spam;?>" id="Antispam" />
								
								<input type="submit" name="SendMessage" value="Send Message" />
							</fieldset>
						</form>
						<?php
					}
				?>
			</section>
			<section id="brands">
				<h1>STOCKIST OF ALL LEADING BRANDS IN HOME DECOR AND DIY & HARDWARE</h1>	
				<img src="images/logos.jpg" alt="Logos of leading brands"/>
			</section>
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
</html>