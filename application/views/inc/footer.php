<div class="grid_2">
		<div class="container"> 
			<div class="col-md-3 col_2">
				<h3>Stock Photo<br>Categories</h3>
			</div>
			<div class="col-md-9 col_5">
				<div class="col_1_of_5 span_1_of_5">
					<ul class="list1">
						<?php foreach($records as $row): ?>
					    <li><a href="stock.php">
							<?php echo $row->type; ?>
							</a></li>
						<?php endforeach; ?>
		            </ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="grid_3">
	  <div class="container">
	  	 <ul id="footer-links">
			<li><a href="#">Terms of Use</a></li>
			<li><a href="#">Royalty Free License</a></li>
			<li><a href="#">Extended License</a></li>
			<li><a href="#">Privacy</a></li>
			<li><a href="support.html">Support</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="#">Categories</a></li>
         </ul>
         <p>Copyright © 2015 Photo-Hub.</p>
	  </div>
	</div>
</body>
</html>		