<!DOCTYPE HTML>

<html lang="pt">
	<head>
		<title>Bodyboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">Bodyboard</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="elements.html">Elements</a></li>
                    <li><a href="generic.html">Generic</a></li>
                    <li><a href="#">Galeria</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>Galeria</h1>
			</div>
            <section id="main" class="wrapper">
				<div class="inner">
					<div class="content">

					<!-- Elements -->
						<div class="row">
							<div class="col-6 col-12-medium">
								<div class="table-wrapper">
										
								</div>
                            </div>
			<section id="main" class="wrapper">
				<div class="inner">
					<div id="grid">
                        <img alt="" src="images/04.jpg">
                        <img alt="" src="images/7.jpg">
                        <img alt="" class="span-2" src="images/8.jpg">
                        <img alt="" src="images/9.jpg">
                        <img alt="" src="images/10.jpg">
                        <img alt="" src="images/11.jpg">
                        <img alt="" src="images/12.jpg">
                        <img alt="" class="span-2" src="images/13.jpg">
                        <img alt="" src="images/14.jpg">
                        <img alt="" class="span-2" src="images/15.jpg">
                        <img alt="" src="images/16.jpg">
                        <img alt="" src="images/17.jpg">
                        <img alt="" src="images/18.jpg">
                        <img alt="" class="span-2" src="images/19.jpg">
                        <img alt="" src="images/20.jpg">
                        <img alt="" src="images/21.jpg">    
                        <img alt="" src="images/22.jpg">
                        <img alt="" class="span-2" src="images/23.jpg">
                        <img alt="" src="images/24.jpg">
                        <img alt="" class="span-2" src="images/25.jpg">
                        <img alt="" src="images/26.jpg">
                        <img alt="" src="images/27.jpg">
                        <img alt="" class="span-2" src="images/28.jpg">
                        <img alt="" src="images/29.jpg">
                        <img alt="" class="span-2" src="images/30.jpg">
                        <img alt="" src="images/31.jpg">
                        <img alt="" src="images/32.jpg">
                        <img alt="" class="span-2" src="images/33.jpg">
						<img alt="" src="images/34.jpg">
						<img alt="" src="images/35.jpg">
						
                    </div>
                </div>
            </section>
									<h3>Form</h3>
									<form method="post" action="#">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="name" id="name" value="" placeholder="Name" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="email" name="email" id="email" value="" placeholder="Email" />
											</div>
											<!-- Break -->
											
											<!-- Break -->
										
											<!-- Break -->
											<div class="col-12">
												<textarea name="textarea" id="textarea" value=”Enviar” placeholder="Mensagem" rows="6"></textarea>
											</div>
											<!-- Break -->
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Submit" class="primary" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
                                    </form>
                                    
					</div>
					</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<div class="content">
					<section>
						<h4>rede sociais</h4>
						<ul class="plain">
							<li><a href="https://github.com/TIWM"><i class="icon fa-github">&nbsp;</i>Github</a></li>
						</ul>
					</section>
				</div>
				<div class="copyright">
					&copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
				</div>
			</div>
		</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/galeria1.js"></script>
	</body>
</html>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer;
use PHPMailer\SMTP;
use PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'bodyboard.ismai@gmail.com';                     // SMTP username
    $mail->Password   = 'Admin123=';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('bodyboard.ismai@gmail.com');
    $mail->addAddress('bodyboard.ismai@gmail.com');     // Add a recipient
    $mail->addAddress('bodyboard.ismai@gmail.com');               // Name is optional

    // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	$mensagem = $_POST['mensagem'];
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'mensagem';
    $mail->Body    = $_POST['textarea'];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}