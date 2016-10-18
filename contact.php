<?php


$to = 'amir58@live.nl';
$subject = 'mogelijk bericht stagebedrijf';

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];


$body = <<<EMAIL

Hallo mijn naam is $name.

$msg

From $name
Ons mail is $email

EMAIL;
 
$header = 'From: $email';

if($_POST){
	mail($to, $subject, $body, $header);
	$feedback = 'Thank you for contacting me';
}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Amir hanif Portfolio</title>
<link rel="shortcut icon" href="iconified/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="inc/MyReset.css">
<link rel="stylesheet" type="text/css" href="css/Responsivenes.css">
<link rel="stylesheet" type="text/css" href="css/base.css">
<link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css">
</head>

<body>
<?php
if (isset ($_GET['sent']) === true) {
	echo '<p class="error">Thanks for contacting us!</p>';
}


?>
<div id="container" class="img-container">
  <header class="moving">
            <span class="bars" onclick="openNav()"><i class="fa fa-bars fa-fw" aria-hidden="true"></i></span>
            <div class="amir">
                <a href="index.html">
                    <p>Amir Hanif</p>
                </a>
            </div>
            <div class="mail"><a href="contact.php"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></a></div>
            <nav class="showing">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                    <a href="work.html">Work</a>
                    <a href="about.html">About</a>
                    <a href="contact.php">Contact</a>
                </div>
            </nav>

        </header>
  <section id="contact" class="sec-800">
    <div class="inner-contact">
      <h2 class="font-h2-42">CONTACTEER MIJ VOOR MEER INFORMATIE OF VOOR MEER WERK</h2>
      <p>(Als u geinteresserd bent om mij in een stagebedrijf aan te nemen kunt u mij natuurlijk ook contacteren) </p>
      <div class="contact-form">
        <form  action="?" class="mail_data" method="post">
          <p id="feedback"><?php echo $feedback;?></p>
          <input type="text" name="name" placeholder="Your Name" id="name" required/>
          <input type="email" id="email" name="email" placeholder="Your E-mail"/>
          <p></p>
          <textarea id="msg" name="msg" placeholder="Your Message" required></textarea>
          <div id="loading"></div>
          <input type="submit" class="send_btn text_fff" id="send_mail_btn"/>
        </form>
      </div>
    </div>
    <div id="klik-text-contact">//voor een cv, <br>
      ook contacteren dan stuur <br>
      ik het zo snel mogelijk naar u toe.//</div>
  </section>
  <footer>
    <ul class="social">
      <li><a href="https://www.facebook.com/amir.hanif.7"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="https://www.instagram.com/yvngmowgli/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      <li><a href="https://nl.linkedin.com/in/amir-hanif-3663a611b"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
      <li>
        <p>Amir Hanif © 2016</p>
      </li>
    </ul>
  </footer>
</div>
   <!--<div class="preloader">
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>
    </div>-->
<style>

.error {
height:500px;
width:100%;
background-color:red;
font-size:2em;	
z-index:999;
}
form p {
	font-size:30px;
	text-align:center;
	color:green;
}
</style>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>
    <script src="../js/index.js"></script>
    <script src="../js/prefixfree.min.js"></script>
    <script src="../js/fadeInScroll.jQuery.js"></script>
    <script src="../js/fade.js"></script>

</body>
</html>