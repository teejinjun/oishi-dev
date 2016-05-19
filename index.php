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
    
    <link href="css/css.css" rel="stylesheet" type="text/css">
    <link href="css/mitoframework.css" rel="stylesheet">
    <link href="css/oishi.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel='stylesheet' href='css/grid.css' media='screen' />
    <link href="css/baguetteBox.css" rel="stylesheet">
    
    <script src="js/mitoframework.js"></script>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/blocksit.min.js"></script>
    
    <?php include_once("analytics.php"); ?>
    <script>
    $(document).ready(function() {

      //blocksit define
      $(window).load( function() {
        $('.containergallery').BlocksIt({
          numOfCol: 3,
          offsetX: 8,
          offsetY: 8
        });
      });
      
      //window resize
      var currentWidth = 1100;
      $(window).resize(function() {
        var winWidth = $(window).width();
        var conWidth;
        if(winWidth < 660) {
          conWidth = 320;
          col = 2
        }else if(winWidth < 880) {
          conWidth = 660;
          col = 3
        } else if(winWidth < 1100) {
          conWidth = 880;
          col = 3;
        } else {
          conWidth = 1100;
          col = 3;
        }
        
        if(conWidth != currentWidth) {
          currentWidth = conWidth;
          $('.containergallery').width(conWidth);
          $('.containergallery').BlocksIt({
            numOfCol: col,
            offsetX: 8,
            offsetY: 8
          });
        }
      });
    });
    </script>
  </head>
  <body class="home">
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
              <li class="active" id="home">
                <a href="index.php">Home</a>
              </li>
              <li id="galleries">
                <a href="#gallery">Gallery</a>
              </li>
              <li id="products">
                <a href="products.php">Products</a>
              </li>
              <li id="events">
                <a href="events.php">EVENTS</a>
              </li>
              <li id="contact">
                <a href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="pagesection landing">
        <div class="container">
          <div class="row row-middle">
            
            <div class="col-md-6 col-md-push-6 col-sm-8 col-sm-push-4">
              <div>
                <div class="layeredcontent">
                  <ul>
                    <li><img style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeIn;" class="wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="1s" src="images/home/teapot.png"></li>
                    <li><img style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInDown;" class="wow fadeInDown animated" data-wow-delay="0.4s" data-wow-duration="1s" src="images/home/bottle.png"></li>
                    <li><img style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeInDown;" class="wow fadeInDown animated" data-wow-delay="0.6s" data-wow-duration="1s" src="images/home/sakura.png"></li>
                    <li><img style="visibility: visible; animation-duration: 1s; animation-delay: 0.75s; animation-name: fadeInDown;" class="wow fadeInDown animated" data-wow-delay="0.75s" data-wow-duration="1s" src="images/home/Leafes.png"></li>
                  </ul>
                </div>
              </div>
  
            </div>
            
            <div class="col-md-6 col-md-pull-6 col-sm-4 col-sm-pull-8">
              <div>
                <h3 style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.3s; animation-name: fadeInLeft;" class="wow fadeInLeft animated" data-wow-delay="0.3s" data-wow-duration="1.3s">
                  OISHI is Japanese for Delicious!
                </h3>
                <p style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.5s; animation-name: fadeInLeft;" class="wow fadeInLeft animated" data-wow-delay="0.5s" data-wow-duration="1.3s">
                  OISHI Green Tea is brewed from 100% organic tea 
                  leaves, grown on certified organic plantations. We 
                  carefully select only the three best and youngest 
                  green tea leaves at the tip of each branch before 
                  masterfully brewing them according to our signature 
                  tea recipes. Using only natural ingredients, we at 
                  OISHI preserves the authentic Japanese feel and 
                  flavour while maintaining the key benefits of green 
                  tea. Discover our flavours now!
                </p>
                <a href="products.php" class="btn btn-oishi wow fadeInLeft animated" data-wow-delay="0.5s" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.5s; animation-name: fadeInLeft;"><div>Pick Your Flavour</div></a>
              </div>
            </div>
            
          </div>
        </div>
      </div>


      <!-- Content -->
      <div id="wrapper">
        <div class="baguetteBoxOne gallery containergallery" id="gallery">
          <div class="grid">
            <div class="contentlist-item-content">
              <div class="title-box">
                 <h2>2016 Gallery</h2>
              </div>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img024.jpg"><img src="images/gallery/2016/img024.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img023.jpg"><img src="images/gallery/2016/img023.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img022.jpg"><img src="images/gallery/2016/img022.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img021.jpg"><img src="images/gallery/2016/img021.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img020.jpg"><img src="images/gallery/2016/img020.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img019.jpg"><img src="images/gallery/2016/img019.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img018.jpg"><img src="images/gallery/2016/img018.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img017.jpg"><img src="images/gallery/2016/img017.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img016.jpg"><img src="images/gallery/2016/img016.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img015.jpg"><img src="images/gallery/2016/img015.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img014.jpg"><img src="images/gallery/2016/img014.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img013.jpg"><img src="images/gallery/2016/img013.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img012.jpg"><img src="images/gallery/2016/img012.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img011.jpg"><img src="images/gallery/2016/img011.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img010.jpg"><img src="images/gallery/2016/img010.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img009.jpg"><img src="images/gallery/2016/img009.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img008.jpg"><img src="images/gallery/2016/img008.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img007.jpg"><img src="images/gallery/2016/img007.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img001.jpg"><img src="images/gallery/2016/img001.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img002.jpg"><img src="images/gallery/2016/img002.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img003.jpg"><img src="images/gallery/2016/img003.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img004.jpg"><img src="images/gallery/2016/img004.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img005.jpg"><img src="images/gallery/2016/img005.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2016/img006.jpg"><img src="images/gallery/2016/img006.jpg"/></a>
            </div>
          </div>
          
          <div class="grid">
            <div class="contentlist-item-content">
              <div class="title-box">
                 <h2>2015 Gallery</h2>
              </div>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img001.jpg"><img src="images/gallery/2015/img001.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img002.jpg"><img src="images/gallery/2015/img002.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img003.jpg"><img src="images/gallery/2015/img003.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img004.jpg"><img src="images/gallery/2015/img004.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img005.jpg"><img src="images/gallery/2015/img005.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img006.jpg"><img src="images/gallery/2015/img006.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img007.jpg"><img src="images/gallery/2015/img007.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img008.jpg"><img src="images/gallery/2015/img008.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img009.jpg"><img src="images/gallery/2015/img009.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img010.jpg"><img src="images/gallery/2015/img010.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img011.jpg"><img src="images/gallery/2015/img011.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img012.jpg"><img src="images/gallery/2015/img012.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img013.jpg"><img src="images/gallery/2015/img013.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img014.jpg"><img src="images/gallery/2015/img014.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img015.jpg"><img src="images/gallery/2015/img015.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img016.jpg"><img src="images/gallery/2015/img016.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img017.jpg"><img src="images/gallery/2015/img017.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img018.jpg"><img src="images/gallery/2015/img018.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img019.jpg"><img src="images/gallery/2015/img019.jpg"/></a>
            </div>
          </div>
          <div class="grid">
            <div class="imgholder">
              <a href="images/gallery/2015/img020.jpg"><img src="images/gallery/2015/img020.jpg"/></a>
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

    
    
    
<!--     // <script src="js/jquery.js"></script> -->
    <script src="js/baguetteBox.js" async></script>
    <script src="js/main.js"></script>


    <script src="js/plugins.js" async></script>

    <!--[if lt IE 9]>
    <script>
    var oldIE = true;
    </script>
    <![endif]-->

    <script>
    window.onload = function() {
        if(typeof oldIE === 'undefined' && Object.keys)
            hljs.initHighlighting();
        baguetteBox.run('.baguetteBoxOne', {
            animation: 'fadeIn'
        });
    };
    </script>


  </body>
</html>