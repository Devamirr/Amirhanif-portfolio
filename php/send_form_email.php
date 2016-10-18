<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "amir58@live.nl";
 
    $email_subject = "Stagecontact";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "<h1>Helaas</h1><h2>er blijkt iets mis te zijn met uw ingevulde formulier.</h2>";
 
        echo "<strong><p>De volgende punten waren niet correct opgegeven.</p></strong><br />";
 
        echo $error."<br /><br />";
 
        echo "<p>Keer terug naar het formulier en probeer het opnieuw.</p><br />";
		echo "<p><a href='../contact.html'>keer terug naar de homepagina</a></p>";
        die();
		
 
    }
  
 
    $naam = $_POST['naam']; // required
 
    $email = $_POST['email']; // required
 
    $msg = $_POST['msg']; // required
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= '<li><p>Het ingevulde e-mail adres blijkt niet te kloppen<p></li>';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= '<li><p>De ingevulde voornaam blijkt niet te kloppen</p></li>';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= '<li><p>De ingevulde achternaam blijkt niet te kloppen</p></li>';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= '<li><p>Het ingevulde bericht blijkt niet te kloppen</p></li>';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Formulier details volgen hieronder.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "naam: ".clean_string($naam)."\n";
 
    $email_message .= "email: ".clean_string($email)."\n";
 
    $email_message .= "message: ".clean_string($msg)."\n";
 
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>