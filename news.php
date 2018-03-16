<?php
require_once('db.php');	
if(isset($_POST) & !empty($_POST)){ 
$name = mysqli_real_escape_string($connect,$_POST["name"]);
$comments = mysqli_real_escape_string($connect,$_POST["comments"]);
$sql = "INSERT INTO `comments`(`name`,`comments`)VALUES('$name','$comments')";
$res = mysqli_query($connect,$sql);
if($res){
	echo "success";
	}else{
	echo "ERROR";
}
}		
?>
<!DOCTYPE html>
<html>
	<title>THE NEWS TODAY</title>
	<head>
	<style>
		<img src="download.png" align="center">
	</style>
	</head>
	<body bgcolor="pink">
		<div id='main'>
		 <h1 align="center">THE NEWS TODAY</h1><hr>
		 </div>
		 <div id='sub'>
		 <h2>PROPERTY</h2>
		 <h5>BIG RECIDENCIES</h5>
		 </div>
		 <div id='mat'>
		 <img src="image.png"/>
		 <p>the present big property in the city was this house was said to be constructed outside the city onthe way to the Outer Ring Road away from the <b>city pollution</b></p>
		 <table>
			 <tb margin="0.5">
 				<tr border="1">Square feet of the house:400Sq.feet</tr></br>
 				<tr border="1">Cost Of the Property:Rs4.5Cr</tr></br>
 				<tr border="1">Interior Type:Modern</tr></br>
 				<tr border="1">Number Of Bed Rooms:fivebed rooms and one master Bed</tr></br>
 			</tb>
 			</table><hr>
 			</div>
 			<form method="post">
 			<?php if(isset($fail)){?><div><?php echo $fail;?></div><?php }?>
 			<input type="text" name="name" placeholder="enter your name"></br>
 			<input type="text" name="comments" placeholder="please enter your comments"></br>
 			<button type="submit"   id="log">POST</button></br>
 			</form>
	</body>
</html>
