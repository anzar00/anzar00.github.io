<?php

    if(isset($_POST['email'])) {

    $mail_to = "peerzada.anzar@gmail.com";
    $mail_subject = "TEST";

// IF ERROR
    function died($error) {
    
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "Please go back and fix the following <br /><br />";
        echo $error."<br /><br />";
        die();
    }


// Validation 

    if(!isset($_POST['full_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }

        $full_name = $_POST['full_name']; // required
        $email = $_POST['email']; // required
        $message = $_POST['message']; // required


        $error_message = "";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
    if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }    

        $string_exp = "/^[A-Za-z .'-]+$/";
 
     
    if(!preg_match($string_exp,$full_name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
    }

    if(strlen($message) < 2) {
    $error_message .= 'Your Message is too short.<br />';
    }
 
    if(strlen($error_message) > 0) {
    died($error_message);
    }


    $mail_message = "Contact Form Response.\n\n";
 
     
      function clean_string($string) {
      $msg = array("content-type","bcc:","to:","cc:","href");
      return str_replace($msg,"",$string);
    
     }
 
     
 
    $mail_message .= "Name: ".clean_string($full_name)."\n";
    $mail_message .= "Email: ".clean_string($email)."\n";
    $mail_message .= "Message: ".clean_string($message)."\n";

        $headers = 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        @mail($mail_to, $mail_subject, $mail_message, $headers);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Message Sent | Amori Khariya </title>
    <link rel="icon" href="img/favicon.ico">

  <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="assets/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="assets/linericon/style.css">
  <link rel="stylesheet" href="assets/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/Magnific-Popup/magnific-popup.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--================ Header Top Area Start =================-->
  <section class="header-top d-none d-sm-block">
    <div class="container">
      <div class="d-sm-flex justify-content-between">
        <ul class="header-top__info mb-2 mb-sm-0">
          <li><a href="tel:+01432152323"><span class="align-middle"><i class="ti-mobile"></i></span>+1234567890</a></li>
          <li><a href="mailto:info@example.com"><span class="align-middle"><i class="ti-email"></i></span>abc@example.com</a></li>
        </ul>
        <ul class="header-top__social">
          <li><a href="#"><i class="ti-facebook"></i></a></li>
          <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
          <li><a href="#"><i class="ti-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--================ Header Top Area end =================-->

   <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index.php"><img src="img/logo1.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="about.php">About</a></li> 
              <li class="nav-item"><a class="nav-link" href="#">Gallery</a>
                <li class="nav-item"><a class="nav-link" href="#">Donate</a>
              <li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

   <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm">
    <div class="hero-banner__content text-center">
      <h1>Contact Us</h1>
      <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Contact Us</li>
          <li class="breadcrumb-item active" aria-current="page">Message Sent</li>
        </ol>
      </nav>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->

  <center>
        <br><br><br>
    <h3>Thank you for contacting us. We will be in touch with you very soon.</h3>

</center>
    

            <br><br><br>

<!-- ================ Start Footer Area ================= -->
  <footer class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <a href="about.php#wwa"><h6>About</h6></a>
            <p>
              Amori Khariya is a registered NGO which is a creation of group of six people from the field of law, journalism and engineering. It is an initiative for the welfare of people suffering in Kashmir.
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Navigation Links</h6>
            <div class="row">
              <div class="col">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Contact</a></li>
               </ul>
              </div>

              <div class="col">
                <ul>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
               </ul>
              </div>
            </div>              
          </div>
        </div>              
        
       
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row align-items-center">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left">
Copyright &copy; <script>document.write(new Date().getFullYear());</script>  Amori Khariya | All rights reserved |
          </p>

          <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ================ End Footer Area ================= -->

  <script src="assets/jquery/jquery-3.2.1.min.js"></script>
  <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="assets/owl-carousel/owl.carousel.min.js"></script>
  <script src="assets/Magnific-Popup/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>

<?php
 
}
?>             