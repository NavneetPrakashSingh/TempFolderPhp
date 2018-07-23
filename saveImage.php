<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://192.168.1.3/dropzone/dropzone.css">
	<script type="text/javascript" src="http://192.168.1.3/dropzone/dropzone.js"></script>
	<title></title>
</head>
<body>
	<form name="frmImage" action="http://192.168.1.3/image-add.php/"
        class="dropzone"></form>
    <div class="btn-menu">
        <div>Show Images</div>
    </div>	
    <div>
    	<?php 
    	$dirname = "uploads/";
		$images = glob($dirname."*.png");

		foreach($images as $image) {
		    echo '<img src="http://192.168.1.3/'.$image.'" /><br />';
		} 
		?>
    </div>
</body>
</html>