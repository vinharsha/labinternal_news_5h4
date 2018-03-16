<?php 
   session_start();
   require_once('config.php');
   if(isset($_POST) &  !empty($_POST)){
        $user = mysqli_real_escape_string($connect,$_POST["username"]);
        $pass = md5($_POST["pswd"]);
     $sql = "SELECT * FROM `register` where username='$user' AND pass='$pass'";
    $res = mysqli_query($connect,$sql);
    $out="";
    while( $row = mysqli_fetch_array($res))  {
       $out = $row[1];
    }
    if(!$out){
        $fail="incorrect Username/password ";     
    }
    else{
        $_SESSION['username']=$user;      
        header("location: news.php");
    }
       
   } 
   if(isset($_SESSION['username']))
        header("location: news.php");
?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<form class="poik"method="post">
    <?php if(isset($fail)){?><div><?php echo $fail;?></div><?php }?>
    <h1 style="color:black;text-align:center;">THE NEWS TODAY</h1>
    <h3 style="color:black;text-align:center;">Login</h3>
        <input type="text" id="use" name="username" placeholder="username" required autofocus></br></br>
        <input type="password" id="pass" name="pswd" placeholder="password" value required></br></br>
        <button type="submit"   id="log">Login</button>&nbsp;
        <a href="register.php"   >Register</a>
</form>
</body>
</html>
