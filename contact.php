<?php

require_once('inc/db.php');
$error = false;

if (isset($_POST['submitted']))
{
    
    $db = new Db();

    // Quote and escape form submitted values
    $name = $db -> quote($_POST['name']);
    $email = $db -> quote($_POST['email']);
    $message = $db->quote($_POST['message']);
    

    // Insert the values into the database
    $result = $db -> query("INSERT INTO `contact_us` (`name`, `email`, `message`) VALUES (" . $name . "," . $email . "," . $message . ")");
    if (!$result)
    {
        $error = true;
    } 
    else
    {
        $from = $email; //Site name
        $to = "oishigreenteamalaysia@gmail.com"; 
        $subject = "Oishi.com.my - Contact Us from " . $name . "";

        $body = "
Message from " . $name ." 
Email: " . $email . " 
Message:" . 
$message;

        mail($to,$subject,$body,$from);
        $error = false;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>OISHI</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <link href="css/mitoframework.css" rel="stylesheet">
    <link href="css/oishi.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="css/cmxformTemplate.css">
    <link rel="stylesheet" href="css/cmxform.css">
    


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php include_once("analytics.php"); ?>
  </head>
  <body>
      <nav class="navbar navbar-oishi" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar bar1"></span>
            <span class="icon-bar bar2"></span>
            <span class="icon-bar bar3"></span>
          </button>
            <a class="navbar-brand" href="http://oishi.com.my/"><img src="images/logo-oishi.png"></a>
          </div>
          <div id="main-nav" class="collapse navbar-collapse navbar-ex1-collapse">
              
            <ul class="nav navbar-nav navbar-right">
              <li id="home">
                <a href="index.php">Home</a>
              </li>
              <li id="galleries">
                <a href="index.php#gallery">Gallery</a>
              </li>
              <li id="products">
                <a href="products.php">Products</a>
              </li>
              <li id="events">
                <a href="events.php">EVENTS</a>
              </li>
              <li class="active" id="contact">
                <a href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="pagesection pagesection-nooverflow contact oishi-contact-page">
        <div class="container">
          <div class="row row-middle" style="display: inline;">
            <div class="col-md-6">
              <h3>Any questions? <br>LEAVE US A MESSAGE</h3>
              <p>F&amp;N Beverages Marketing Sdn. Bhd.</p>
              <p>1, Jalan Bukit Belimbing 26/38, </p>
              <p>Persiaran Kuala Selangor,</p>
              <p>Seksyen 26, 40400 Shah Alam,</p>
              <p>Selangor Darul Ehsan</p>
              <br>
              <p>Tel: (603) 5101 4288</p>
              <p>Fax: (603) 5101 3946</p>
            </div>
            <div class="col-md-6 contact-form">
              <div class="screen-reader-response"></div>

              <form class="cmxform" id="commentForm" method="post" action="contact.php">
                
                <p><input name="name" value="" size="40" minlength="3" placeholder="Name" type="text" required></p>
                <p><input name="email" value="" size="40" placeholder="Email" type="email" required></p>
                <p><textarea name="message" cols="40" rows="10" placeholder="Message" required></textarea></p>
                <p><input value="Send Message" type="submit" name="submitted"></p>
               
              </form>  
              <div class="thankyou"> Thank you! We will get back soon</div> 
            </div>
          </div>
        </div>
      </div>


      <div class="footer-section">
        <div class="container">
          <div class="row row-middle">
            <div class="col-md-6 col-sm-6 col-md-push-6 col-sm-push-6">
              <ul class="social-icon">
                <li><a href="https://www.facebook.com/OishiMalaysia?fref=ts" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                </li>
                <!-- <li><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                </li> -->
                <li><a href="https://www.youtube.com/channel/UCKwg6E98XOvijIQ-MffRcVw" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
                </li>
                <li><a href="https://instagram.com/oishimalaysia/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-md-pull-6 col-sm-pull-6">
              <div class="row">
                <div class="col-md-12">
                  <p>
                    <!-- <span class="plainfont">&copy;</span>  -->All trademarks, 
                    copyright and domain names are used or reproduced under licence from or 
                    with permission of Oishi Trading Co. Ltd.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script src="js/mitoframework.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script>
        $.validator.setDefaults({
            submitHandler: function(form) 
            {                
                form.submit();
            }
        });

        $().ready(function() {

            // validate the comment form when it is submitted
            $('#commentForm').validate();
            $('.thankyou').hide();
            <?php
            if (isset($_POST['submitted']))
            {    
                if ($error) 
                {
                    echo '$(\'.cmxform\').hide();';
                    echo '$(\'.cmxform\').prepend( "<h3>Error occured. Please try again</h3>" );';
                    echo '$(\'.cmxform\').show();';
                } 
                else
                {
                    echo '$(\'.cmxform\').hide();';
                    echo '$(\'.thankyou\').show();';
                }
            }
            ?>
        });
    </script>
  </body>
</html>