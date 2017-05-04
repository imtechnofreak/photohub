<div class="register">
		<div class="container">
		 	<div class="register-top-grid">
				<h1>Upload Picture</h1>	   		
		   </div>
           <script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>
<script>
    var client = filestack.init('AUe2E3WBRSXqL23GgcXK2z');
    function showPicker() {
        client.pick({
        }).then(function(result) {
            console.log(JSON.stringify(result.filesUploaded))
        });
    }
     var log = function(result) {
   console.log(JSON.stringify(result))
 }

 var input = document.getElementById("store-input");
 if (!input.value) {
  console.log("Choose a png to store to S3");
} else {
  client.upload(input.files[0]).then(log)
}
var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function(){
    if(this.readyState==4 && this.status==200 ){
        var myObj = JSON.parse(this.responseText);
        document.getElementByID("store-input").innerHTML = myObj[0];
    }
};

xmlhttp.open('');
xmlhttp.send();
</script>
<input type="button" value="Upload" onclick="showPicker()" />
          </div> 
	</div>
