
<?php

   include("config.php");
   session_id("mohsin");
   session_start();
   
   if (!empty($_POST['login'])) {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM login WHERE name = '$myusername' and pwd = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		  
       // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
		 ?>
		 <script> 
		  window.alert("<?php echo $error ?>");
		  </script>
	 <?php
      }
   }
       // Block of code for Registration.
     if (!empty($_POST['register'])) {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      $sql = "SELECT * FROM login WHERE name = '$username'";
      $result = mysqli_query($db,$sql);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 0) {
	 $result=mysqli_query($db,"INSERT INTO login (`name`, `pwd`) VALUES 
          ('" . $username . "', '" . $password . "');");
		  
		if($result) {
			echo '<script language="javascript">';
            echo 'alert("You have registered successfully!")';
            echo '</script>';
			unset($_POST);
		} else {	
			echo '<script language="javascript">';
            echo 'alert("Problem in registration. Try Again!")';
            echo '</script>';
		}
	 }
	 else
	 	{
	 		echo '<script language="javascript">';
            echo 'alert("That Username already exits...! Please try again")';
            echo '</script>';
	 		}
	}
	 
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
    <title>Login</title>
    <!-- Headr Files -->	
    <?php include 'include/header-files.php';?>
  </head>
  <body class="home page page-id-19 page-template page-template-page-templates page-template-page-template page-template-page-templatespage-template-php mmm mega_main_menu-2-1-2 crown-animate-scroll wpb-js-composer js-comp-ver-4.12.1 vc_responsive">
    <div class="main-wrapper ">
    <!-- 	headerphp -->
    <?php include 'include/header.php';?>
    <!-- 	headerphp -->
    <!-- site content starts -->
    <div id="content" class="site-content ">
      <div id="main-content">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="breadcrumbs"><a href="../index.html">Home</a><span class="separator">/</span><span> My Account</span></div>
            </div>
            <div class="col-xs-12 content-area" id="main-column">
              <main id="main" class="site-main">
                <article id="post-11" class="post-11 page type-page status-publish hentry">
                  <header class="entry-header">
                    <h1 class="entry-title">My Account</h1>
                  </header>
                  <!-- .entry-header -->
                  <div class="entry-content">
                    <div class="woocommerce">
                      <div class="u-columns col2-set" id="customer_login">
                        <div class="u-column1 col-1">
                          <h2>Login</h2>
                          <form method="post" class="login">
                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                              <label for="username">Username or email address <span class="required">*</span></label>
                              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" value="" />
                            </p>
                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                              <label for="password">Password <span class="required">*</span></label>
                              <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" />
                            </p>
                            <p class="form-row">
                              <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="83d686c53a" />
                              <input type="hidden" name="_wp_http_referer" value="/crown/my-account/" />
                              <input type="submit" class="woocommerce-Button button" name="login" value="Login" />
                              <label for="rememberme" class="inline">
                              <input class="woocommerce-Input woocommerce-Input--checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember me				</label>
                            </p>
                            <p class="woocommerce-LostPassword lost_password">
                              <a href="lost-password/index.html">Lost your password?</a>
                            </p>
                          </form>
                        </div>
                        <div class="u-column2 col-2">
                          <h2>Register</h2>
                          <form method="post" class="register">
                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                              <label for="reg_email">Email address <span class="required">*</span></label>
                              <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" value="" />
                            </p>
                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                              <label for="reg_password">Password <span class="required">*</span></label>
                              <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" />
                            </p>
                            <!-- Spam Trap -->
                            <div style="left: -999em; position: absolute;"><label for="trap">Anti-spam</label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>
                            <p class="woocomerce-FormRow form-row">
                              <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="8deeda4312" />
                              <input type="hidden" name="_wp_http_referer" value="/crown/my-account/" />		
                              <input type="submit" class="woocommerce-Button button" name="register" value="Register" />
                            </p>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <!-- .entry-content -->
                </article>
                <!-- #post-## -->
              </main>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--.site-content-->
    <!-- site content ends  -->
    <?php include 'include/footer.php';?>
  </body>
</html>