<!DOCTYPE html>
<html>
<head>
	<title>Golfslope | Play Better Courses</title>
	<link rel="shortcut icon" href="http://www.golfslope.com/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="http://golfilicious.com/css/gs-base.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>
<div id="header-fixed">
	<div id="header" class="gs-2">
		<h1 id="blog-title" class="blogtitle beta"><a href="/" title="Golfslope">Golfslope</a></h1>
		<form method="get" id="searchform" action="http://www.golfslope.com/">
			<label for="s" class="assistive-text">Search</label>
			<input type="text" class="field main-search" name="s" id="s" placeholder="Search" />
			<input type="submit" class="submit" name="submit" id="" value="" />
		</form>
		<? if ($this->ion_auth->logged_in()) {
		$user = $this->ion_auth->user()->row();
			?>
			<ul id="gs-topnav">
				<li><a href="http://golfilicious.com/index.php/profile"><?php echo $user->first_name; $user->last_name; ?></a></li>
				 <li><a href="">Logout</a></li>
				 
				 <!-- $this->ion_auth->logout(); -->
			</ul><? 
		}else{ ?>
			<ul id="gs-topnav">
				<li><a href="http://golfilicious.com/index.php/auth/login">Sign In</a></li>
			    <li><a href="http://golfilicious.com/index.php/auth/create_user">Sign Up</a></li>
			</ul>
		<? } ?> 
	</div><!--  #header -->
</div>