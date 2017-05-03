
<div class="container">
 <div class="row">
		<div class="col-md-12 text-center">
			<h1>Image Editor</h1>
			<h2>Edit Your Images Here</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12">
					<button id="edit-image-button" class="btn btn-primary btn-block button-panel">
						 Edit
					</button>
				</div>			
				<div class="col-md-12">
					<button id="download-image-button" class="btn btn-success btn-block button-panel">
						 Download
					</button>
				</div>
				<div class="col-md-12">
					<button id="reset-image-button" class="btn btn-warning btn-block button-panel">
						 Reset
					</button>
				</div>
				<div class="col-md-12">
					<button id="clear-image-button" class="btn btn-danger btn-block button-panel">
						 Clear
					</button>
				</div>
			</div>
		</div>

		<div class="col-md-10">
			<input id="click-upload" type="file">
			<div id="drop-area" >
				<p>Drop an image here!</p>
				<p>(or click to upload)</p>
			</div>
			<img id="editable-image" class="img-responsive">
		</div>

	</div> <!-- end .row -->
</div>

<script type="text/javascript" src="https://dme0ih8comzn4.cloudfront.net/imaging/v3/editor.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assest/js/config.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assest/js/index.js"></script>
    <br>
    <br>