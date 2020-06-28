<!DOCTYPE html>
<html>
<head>
<title>etc</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<style type="text/css">
#results { padding:20px; border:1px solid; background:#ccc; }
</style><script>
function refreshPage(){
window.location.reload();
}
</script>
</head>
<body>
<div class="container"><h1 class="text-center">report </h1>    <button type="submit"  onClick="refreshPage()">Refresh Button</button>
<form method="POST" action="storeImage.php">
<div class="row">
<div class="col-md-6">
<div id="my_camera"></div>
<br/>
<center><input type=button value="click" onClick="take_snapshot()" style="border-radius: 10%;color:white; background-color:#28a745;height:50px; width:100px;">
</center> <br><input type="hidden" name="image" class="image-tag">
</div>
<div class="col-md-6">
<div id="results">result</div>
</div>
<div class="col-md-12 text-center">
<br/>
<button class="btn btn-success">Submit</button>
</div>
</div>
</form>
</div>
<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
Webcam.set({
width: 380,
height: 480,
image_format: 'jpeg',
jpeg_quality: 90
});
Webcam.attach( '#my_camera' );
function take_snapshot() {
Webcam.snap( function(data_uri) {
$(".image-tag").val(data_uri);
document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
} );
}
</script>
</body>
</html>
