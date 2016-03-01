<?php 
session_start();
include("library/class_email_sender.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>THEGZIS'16</title>
  
    <link name="author" href="Faisal Russel(russel365)" />
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    
    <!-- Mobile -->
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    
  <!-- CSS start here -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css" />
  <!-- CSS end here -->
  <!-- Google fonts start here -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
  <!-- Google fonts end here -->
</head>
<body class="ux">
  <div class="bg-overlay"></div>
  <!-- Preloader start here -->
  <div id="preloader">
    <div id="status"></div>
  </div>
  <!-- Preloader end here -->
  <!-- Main container start here -->
  <section class="container main-wrapper">
    <!-- Logo start here -->
    <section id="logo" class="fade-down">
      <a href="#" title="UX - Coming Soon HTML Template">
              <!--img src="img/logo.png" alt="UX - Coming Soon HTML Template"-->
            </a>
    </section>
    <!-- Logo end here -->
    <!-- Slogan start here -->
    <section class="slogan fade-down">
      <h1><b>COUNTDOWN STARTED</b></h1>   
    </section>
    <!-- Slogan end here -->
    <!-- Count Down start here -->
    <section class="count-down-wrapper fade-down">
      <ul class="row count-down">                       
        <li class="col-md-3 col-sm-6">   
          <input class="knob days" data-readonly=true data-min="0" data-max="365" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#34aadc" data-bgColor="#e1e2e6" data-angleOffset="180">
          <span id="days-title">days</span>
        </li>    
        <li class="col-md-3 col-sm-6"> 
          <input class="knob hour" data-readonly=true data-min="0" data-max="24" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#4cd964" data-bgColor="#e1e2e6" data-angleOffset="180">
          <span id="hours-title">hours</span>
        </li>    
        <li class="col-md-3 col-sm-6"> 
          <input class="knob minute" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#ff9500" data-bgColor="#e1e2e6" data-angleOffset="180">
          <span id="mins-title">minutes</span>
        </li>    
        <li class="col-md-3 col-sm-6"> 
          <input class="knob second" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#ff3b30" data-bgColor="#e1e2e6" data-angleOffset="180">
          <span id="secs-title">seconds</span>
        </li>                
      </ul>              
    </section>
    <!-- Count Down end here -->
    <!-- Newsletter start here -->
    <ul class="connect-us row fade-down">
    <div class="container">
    <div class="row" style="padding-left: 3.5em;">
      <div class="col-lg-3">
        <img class="img-responsive" src="icons/b.png">
      </div>
      <div class="col-lg-3">
        <img class="img-responsive" src="icons/g.png"></img>
      </div>
      <div class="col-lg-3">
        <img class="img-responsive" src="icons/y.png"></img>
      </div>
      <div class="col-lg-3">
        <img class="img-responsive" src="icons/r.png"></img>
      </div>
    </div>
    </div>
    </ul>
    <!-- Social icons end here -->
    <!-- Footer start here -->
    <!-- Footer end here -->
  </section>
<!-- About start here -->
  <div class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true" data-keyboard="true" data-backdrop="static" tabindex="-1">
    <a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
    <div class="modal-dialog modal-lg clearfix">
      <div class="modal-content pop-up">
        <h3>About US</h3>
        <div class="clearfix">
        <div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a risus sapien. Aenean non purus dolor. In ante nisl, gravida nec feugiat a, congue vel quam. Vivamus nisl ante, feugiat at sapien et, molestie ornare neque. Quisque mattis leo at odio malesuada, sed ullamcorper quam condimentum. Curabitur suscipit purus ac urna vestibulum tristique. Aliquam at massa vitae diam rhoncus malesuada. Duis vitae lacus risus. Cras sit amet felis in felis imperdiet tincidunt vitae vel augue. Donec consectetur faucibus orci, et lacinia felis eleifend non. Integer risus turpis, pulvinar nec consectetur quis, lacinia sed urna. Phasellus a vehicula ante, a blandit libero.  </p>
          <p>Morbi et venenatis quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut ut tellus id nunc suscipit hendrerit vitae at ipsum. Nullam vel metus in ipsum rutrum rhoncus. Aliquam vel condimentum leo. Nulla ac tellus quis lacus condimentum tincidunt. Pellentesque ac vulputate felis. Suspendisse quis laoreet elit, et venenatis ex. Vivamus sit amet leo leo. Phasellus eu orci diam. Integer et lectus ipsum. Cras eget commodo eros. Proin eleifend eros ut justo vulputate, sed ultrices justo elementum. Nunc ac felis tristique, pretium neque quis, dignissim eros. </p>
        </div>
      </div>
<ul class="features">      
      <li>Animated Countdown Timer</li>
      <li>Twitter bootstrap Based</li>
      <li>Fully Responsive Design</li>
      <li>Ajax Email Signup form with validation</li>
      <li>Well structured and commented code</li>
      <li>Easily customizable</li>
      <li>Well Guided Documentation</li>
      <li>Google web fonts</li>
      <li>FontAwesome icons</li>
    </ul>         
      </div>
    </div>
  </div>
<!-- About end here -->
<!-- Contact start here -->
  <div class="modal fade bs-example-modal-lg2" role="dialog" aria-hidden="true" data-keyboard="true" data-backdrop="static" tabindex="-1">
    <a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
    <div class="modal-dialog modal-lg">
      <div class="modal-content pop-up pop-up-cnt">
        <h3>Contact us</h3>
        


        <!--Email Sending Script -->

        <?php 
      $name="";
      $from="";
      $message="";
        if(isset($_POST['submit'])){

          $name=mysql_real_escape_string($_POST['name']);
          $from=mysql_real_escape_string($_POST['email']);
          $message=mysql_real_escape_string($_POST['comments']);
          $code=$_SESSION['captcha'];
            $captcha=mysql_real_escape_string($_POST['captcha']);
          $to="hello@afrussel.com"; // Add your e-mail here
          if($code!=$captcha){
      echo '<script>alert("Invalid Captcha");</script>';
      }else{    
          include("library/send_email.php");
      }

        //Isset finishes here 
        }
        ?>


        <!-- Email Sending Script
/*
        <div class="clearfix cnt-wrap">
         <form id="contactform" name="contactform" action="" method="post">
          <div id="result"></div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
                <input type="text" id="name" placeholder="Name" name="name" value="<?php //echo $name;?>" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
                <input type="text"  id="email" placeholder="Email" name="email" value="<?php //echo $from;?>" required>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns">
                <textarea id="comments" name="comments" placeholder="Message" required><?php //echo $message;?></textarea>
              </div>
               
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns captcha text-center">
           <img src="captcha.php"><br>
                   <input type="text" name="captcha" placeholder="captcha"required>                
              </div>
              
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center columns">             
                <button name="submit" id="submit" class="contact-btn-submit" type="submit">Send</button>
              </div> 
            </form>        
        </div>
        */
        -->

        <div class="clearfix cnt-wrap">
          <div class="col-md-4 col-sm-4">
            <i class="fa fa-phone"></i>
            <h4>Phone</h4>
            <p>Phone: (000) 555 1212<br />Mobile: (000) 555 0100<br />Fax: (000) 555 0101</p>
          </div>

          <div class="col-md-4 col-sm-4">      
            <i class="fa fa-envelope-o"></i>
            <h4>Email</h4>
            <p>info@sitename.com<br />info@sitename.com</p>
          </div>
          <div class="col-md-4 col-sm-4">
            <i class="fa fa-map-marker"></i>
            <h4>Address</h4>
            <p>123 Some Street, <br>
              Sed varius nulla <br>
              Some City, AA 12345</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Contact end here --> 
    <!-- Main container start here -->
    <!-- Javascript framework and plugins start here -->
    <script type="text/javascript" src="js/jquery.js"></script> 
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/modernizr.js"></script> 
    <script type="text/javascript" src="js/appear.js"></script>     
    <script src="js/jquery.knob.js"></script>
    <script src="js/jquery.ccountdown.js"></script>
    <script src="js/init.js"></script>
    <script src="js/general.js"></script>
    
<!-- Javascript framework and plugins end here -->
</body>
</html>


