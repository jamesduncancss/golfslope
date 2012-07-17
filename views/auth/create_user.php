<?php $this->load->view('templates/header'); ?>
<style>

.column {
	width: 295px;
	*width: 310px;
	float: left;
	margin: 0 35px 150px 0;
	text-align: left;
	zoom: 1;
	/* border: 1px solid #333; */
	}
	
	
.column.first {
	width: 610px !important;
	}
	
.column.last {	
	padding-left: 10px;
	width: 275px;
	float: right;
	}

#wrapper form {
	background: white;
	border: 1px solid #E6E6E6;
	padding: 15px 20px 30px 20px;
	width: 450px;
	float: left;
}

#wrapper form .form-row {
	float: left;
	width: 460px;
	clear: both;
	margin: 0 0 10px 0;
	}

#wrapper form .form-row label {
	margin: 0 0 5px 0 !important;
	float: left;
	font-size: 14px;
	font-weight: bold;
	clear: both;
	}

#wrapper form .form-row label span, p span {
	color: #D8000C;	
	}
		
#wrapper form .form-row p  {
	float: left;
	font-size: 12px;
	font-weight: bold;
	color: red;
	margin: 5px 0 5px 10px !important;
	}

#wrapper form .form-row input, #wrapper form .form-row input[type="password"] {
	width: 300px;
	padding: 6px 4px 6px 4px;
	font-size: 13px;
	line-height: 18px;
	color: #404040;
	border: 1px solid #CCC;
	/* -webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px; 
	-webkit-box-shadow: inset 0 0px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
	box-shadow: inset 0 1px 3px rgba(0,0,0,0.1); */
	margin: 0 0 0 0;
	float: left;
	clear: both;
	}

#wrapper form .form-row input[type="checkbox"] {
	width: 20px;
	}
	
#wrapper form .form-row span {
	margin-top: 8px;
	display: inline-block;
	}
	
#wrapper form .form-row input[type="submit"] {
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
	width: 100px !important;
	height: 40px;
	margin: 10px 0 0 0;
	font-size: 14px;
	}

#wrapper input:hover[type="submit"] {
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

#infoMessage p {
	padding: 5px 5px 5px 10px;
	color: #D8000C;
	background-color: #FFBABA;
	width: 477px;
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

</style>

	<div id="container">
	<div id="content">
		<div id="wrapper">
	
	<div class="column first">
	<h2>Sign Up</h2>
	<div id="infoMessage"><?php echo $message;?></div>
	
    <?php echo form_open("auth/create_user");?>
       <div class="form-row">
       <label>First Name: <span>*</span></label>
      <?php echo form_input($first_name);?>
      </div>
      
       <div class="form-row">
       <label>Last Name: <span>*</span></label>
      <?php echo form_input($last_name);?>
      </div>
      
      <!--  <div class="form-row">
       <label>Company Name:<br />
      <?php echo form_input($company);?>
      </div> -->
      		<div class="form-row">
       			<label>Email: <span>*</span></label>
       			<?php echo form_input($email);?>
      		</div>
      		<!-- <p>Phone:<br />
     		<?php echo form_input($phone1);?>-<?php echo form_input($phone2);?>-<?php echo form_input($phone3);?></p> -->
      		<div class="form-row">
    			<label>Password: <span>*</span></label>
    			<?php echo form_input($password);?>
      		</div>
      		<div class="form-row">
       			<label>Confirm Password: <span>*</span></label>
       			<?php echo form_input($password_confirm);?>
      		</div>
      		<div class="form-row">
      			<label>Handicap:</label>
      			<?php echo form_input($handicap);?>
      		</div>
      		<div class="form-row">
      			<label>Home Course:</label>
      			<?php echo form_input($homecourse);?>
      		</div>
      		<div class="form-row"><?php echo form_submit('submit', 'Sign Up');?></div>
      		<div class="form-row">
      			<p><span>*</span> = Required</p>
        	</div>
        	<?php echo form_close();?>
    		</div>    
    		<div class="column last">
    			<h3>Not a Golfslope Member?</h3>
				<p><b>Sign Up</b> to remember the courses you've played, create a list of courses you want to play and connect with other golfers.</p>
				<p>It's <b>Free</b>.</p>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('templates/footer'); ?>