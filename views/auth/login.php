<?php $this->load->view('templates/header'); ?>
     

<style>
.column {
	width: 295px;
	*width: 310px;
	float: left;
	margin: 0 35px 150px 0;
	text-align: left;
	zoom: 1;
	}
	
.column.last {
	margin: 0 0 150px 30px;
	width: 275px;
	}

.column form {
	background: white;
	border: 1px solid #E6E6E6;
	padding: 23px 20px 10px 20px;
	width: 200px;
	height: 270px;
}
.column form label {
	margin: 0 0 5px 0 !important;
	float: left;
	clear: both;
	font-size: 14px;
	font-weight: bold;
	}

.column form input, .column form input[type="password"] {
	width: 180px;
	padding: 6px 4px 6px 4px;
	font-size: 13px;
	line-height: 18px;
	color: #404040;
	border: 1px solid #CCC;
	/* -webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px; */
	-webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
	-moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
	box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
	margin: 0 0 10px 0;
	float: left;
	clear: both;
	}
	
	

.column form input[type="checkbox"] {
	width: 20px;
	}
	
.column form span {
	margin-top: 8px;
	display: inline-block;
	}
	
.column form input[type="submit"] {
	font-family: "helvetica neue", arial, helvetica, freesans, "liberation sans", "numbus sans l", sans-serif; */
	background: linear-gradient(#68c12e, #429d1d);
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#5494CF), to(#2D7DC6));
	background: -webkit-linear-gradient(#68c12e, #429d1d);
	background: -moz-linear-gradient(#68c12e, #429d1d);
	background: -ms-linear-gradient(#68c12e, #429d1d);
	background: -o-linear-gradient(#68c12e, #429d1d);
	background: linear-gradient(#68c12e, #429d1d);
	-moz-border-radius-topleft: 3px;
	-moz-border-radius-topright: 3px;
	-moz-border-radius-bottomright: 3px;
	-moz-border-radius-bottomleft: 3px;
	-webkit-border-top-left-radius: 3px;
	-webkit-border-top-right-radius: 3px;
	-webkit-border-bottom-right-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;
	border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px;
	color: white;
	text-shadow: #429d1d 0px -1px;
	border: 1px solid #429d1d;
	padding: 5px 10px !important;
	width: 80px !important;
	height: 40px !important;
	margin: 10px 0 0 0;
	font-size: 14px;
	}

#loginform input:hover[type="submit"] {
	color: white !important;
	background: linear-gradient(#429d1d, #429d1d);
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#5494CF), to(#2D7DC6));
	background: -webkit-linear-gradient(#429d1d, #429d1d);
	background: -moz-linear-gradient(#429d1d, #429d1d);
	background: -ms-linear-gradient(#429d1d, #429d1d);
	background: -o-linear-gradient(#429d1d, #429d1d);
	background: linear-gradient#429d1d, #429d1d);
	}
	
p#lost-password {
	float: left;
	clear: both;
	margin: 20px 0 0 0;
	}	
	
#loginform .input-row {
	float: left;
	clear: both;
	}
	
#loginform .rememberme {
	float: left;
	clear: both;
	}
	
.fb-login-button, .fb_button, .pluginLoginButton.pluginFaviconButtonXlarge {
	background: url("http://www.golfslope.com/images-static/gs-fb-connect.png") no-repeat 0 0 !important;
	}
	
.fb-login-button span {
	width: 300px !important;
	height: 120px !important;
	}
	
.fb-login-button.fb_iframe_widget iframe {
	background-position: -999em -999em; width: 300px;
	}
	
.pluginLoginButton.pluginLoginButtonSmall  {
	background-position: -999em -999em;
	}
	
.pluginFaviconButtonText, .pluginFaviconButtonSmall .pluginFaviconButtonText {
		padding: 20px !important;
		text-indent: -999em !important;
		}
	 

</style>
<div id="container">
	<div id="content">
		<div id="wrapper">
			
			<div class="column">
			<h2>Sign In</h2>
	
	<div id="infoMessage"><?php echo $message;?></div>
	
    <?php echo form_open("auth/login");?>
    	
      <div class="input-row">
		
      	<label for="identity">Email:</label>
      	<?php echo form_input($identity); ?>
     </div>
      
      <div class="input-row">
      	<label for="password">Password:</label>
      	<?php echo form_input($password);?>
     </div>
      
       <div class="input-row">
	      <label for="remember">Remember Me:</label>
	      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
	  </div>
      
      
      <p><?php echo form_submit('submit', 'Sign In');?></p>

      
    <?php echo form_close();?>

    <p><a href="forgot_password">Forgot your password?</a></p>
    
   <p><b>For Testing use this Login:</b><br />
Username: admin@admin.com<br />
Password: password  </p>

</div>
<div class="column">
			<h3>Or Sign In with Facebook<br />(not working yet)</h3>
			
			<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '267122430058661', // App ID
            channelUrl : '//www.golfilicious.com/channel.html', // Channel File
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
          });
        };
        // Load the SDK Asynchronously
        (function(d){
           var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js";
           ref.parentNode.insertBefore(js, ref);
         }(document));
      </script>
      <div class="fb-login-button" scope="email,user_checkins,user_location" perms="email,user_birthday,status_update,publish_stream,id,name,picture,gender">
        Sign In with Facebook
      </div>
			
			</div>
			<div class="column last">
			<h3>Not a Golfslope Member?</h3>
				<p><a href="http://golfilicious.com/index.php/auth/create_user"><b>Sign Up</b></a> to remember the courses you've played, create a list of courses you want to play and connect with other golfers.</p>
				<p>It's <b>Free</b>.</p>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('templates/footer'); ?>