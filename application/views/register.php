<div class="register">
		<div class="container">
		   <form method="post" action="<?php echo base_url();?>user/signup"> 
				 <div class="register-top-grid">
					<h1>PERSONAL INFORMATION</h1>
					 <div>
						<span>First Name<label>*</label></span>
						<input type="text" name="first_name" required/> 
					 </div>
					 <div>
						<span>Last Name<label>*</label></span>
						<input type="text" name="last_name" required/> 
					 </div>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="email" name="email" required> 
					 </div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Agree to T&amp;C</label>
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h4>LOGIN INFORMATION</h4>
							 <div>
								<span>Password<label>*</label></span>
								<input name="password" type="password" required/>
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input name="con_password" type="password" required/>
							 </div>
							 <div class="clearfix"> </div>
					 </div>
					 <div class="clearfix"> </div>
					<div class="register-but">
					   <input type="submit" value="submit">
					   <div class="clearfix"> </div>
				   </div>
				</form>
		   </div>
	</div>