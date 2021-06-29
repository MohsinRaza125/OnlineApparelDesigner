<!-- <?php
   // include('session.php');
   // if(!isset($_SESSION)) 
   //  { 
   //      session_start(); 
   //  } 
?> -->
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <!-- Headr Files -->	
    <?php include 'include/header-files.php';?>
  </head>
  <body class="home page page-id-19 page-template page-template-page-templates page-template-page-template page-template-page-templatespage-template-php mmm mega_main_menu-2-1-2 crown-animate-scroll wpb-js-composer js-comp-ver-4.12.1 vc_responsive">
    <div class="main-wrapper ">
    <!-- 	headerphp -->
    <?php 
      // If session is strat then load header.php 
         if(!isset($_SESSION)) 
         {
             include 'include/header.php';
         }
      else
      {  // if session is destroy then load header1.php
      include 'include/header1.php';
      }
      ?>
    <!-- 	headerphp -->
    <!-- Content goes here  -->
    <div id="content" class="site-content ">
      <div id="main-content">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="breadcrumbs"><a href="../index.php">Home</a><span class="separator">/</span><span> Contact us</span></div>
            </div>
          </div>
        </div>
        <div class="section-element contact-feature vc_custom_1463715050127" >
          <div class="container">
            <div class="row">
              <div class="wpb_column column_container col-sm-4">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="feature_text_widget  ">
                      <div class="toptext">
                        <span class="fa fa-map-marker"></span>
                        <div class="feature_text">
                          <h3>Our address</h3>
                          University of Gujrat، Jalalpur Jattan Road، Gujrat 50700
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="wpb_column column_container col-sm-4">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="feature_text_widget  ">
                      <div class="toptext">
                        <span class="fa fa-envelope-o"></span>
                        <div class="feature_text">
                          <h3>Our Email</h3>
                          12015056-006@uog.edu.pk<br />
						  12015056-125@uog.edu.pk<br />
						  12015056-016@uog.edu.pk
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="wpb_column column_container col-sm-4">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="feature_text_widget  ">
                      <div class="toptext">
                        <span class="fa fa-phone"></span>
                        <div class="feature_text">
                          <h3>Our phone</h3>
                          Make your phone order to: <br/>
                          +92 334 4716326<br />
						  +92 308 4646324<br />
						  +92 332 8659171
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
            <div class="wpb_column column_container col-sm-6">
              <div class="vc_column-inner vc_custom_1451917293059">
                <div class="wpb_wrapper">
                  <div role="form" class="wpcf7" id="wpcf7-f4-p469-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--.site-content-->
    <!-- content ends	 -->	
    <?php include 'include/footer.php';?>
  </body>
</html>