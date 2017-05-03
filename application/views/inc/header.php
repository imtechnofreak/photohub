<!DOCTYPE HTML>
<html>
<head>
<title>Photo-Hub an Photo Gallery Category Flat Bootstarp responsive Website Template| Single :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Photo-Hub" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url();?>assest/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>assest/css/editor.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assest/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo base_url();?>assest/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>assest/js/menu_jquery.js"></script> 
</head>
<body>
	<div class="header">	
      <div class="container"> 
  	     <div class="logo">
			<h1><a href="<?php echo base_url(); ?>">Photo Hub</a></h1>
		 </div>
		 <div class="top_right">
		   <ul>
		   <?php if(isset($_SESSION['user_id'])): ?>
		    <li>
			<a href="<?php echo base_url();?>editor">Editor</a>
			</li>
			<li>
			<a href="<?php echo base_url();?>user/logout">Logout</a>
			</li>
		   <?php else: ?>
		   	<li>
			<a href="<?php echo base_url();?>home/register">Register</a>
			</li>|
			<li class="login" >
				 <div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
					  <div id="loginBox">                
						  <form method="post" action="<?php echo base_url();?>user/login" id="loginForm">
			                <fieldset id="body">
			                	<fieldset>
			                          <label for="email">Email Address</label>
			                          <input type="text" name="email" id="email">
			                    </fieldset>
			                    <fieldset>
			                            <label for="password">Password</label>
			                            <input type="password" name="password" id="password">
			                     </fieldset>
			                    <input type="submit" id="login" value="Sign in"/>
			                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
			            	</fieldset>
			                 <span><a href="#">Forgot your password?</a></span>
						   </form>
				        </div>
			      </div>
			  </li>
		   <?php endif; ?>
		   </ul>
	     </div>
		 <div class="clearfix"></div>
		</div>
	</div>