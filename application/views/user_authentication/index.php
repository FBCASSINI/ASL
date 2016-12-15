<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login with Facebook in CodeIgniter by CodexWorld</title>
<style type="text/css">
h1
{
font-family:Arial, Helvetica, sans-serif;
color:#999999;
}
.wrapper{width:600px; margin-left:auto;margin-right:auto;}
.welcome_txt{
	margin: 20px;
	background-color: #EBEBEB;
	padding: 10px;
	border: #D6D6D6 solid 1px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}
.fb_box{
	margin: 20px;
	background-color: #FFF0DD;
	padding: 10px;
	border: #F7CFCF solid 1px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}

.img1{
    position: absolute;
    top: 50%;
    left: 40%;
}


.img2 {
    position: absolute;
    top: 10%;
    left: 39%;
}
.fb_box .image{ text-align:center;}
</style>
</head>
<body>

<?php
if(!empty($authUrl)) {
    echo '<a href="'.$authUrl.'"><img class="img2" src="'.base_url().'assets/img/facebook-avatar.jpg" alt="" width="400" height="400"/></a>';
	echo '<a href="'.$authUrl.'"><img class="img1" src="'.base_url().'assets/img/flogin.png" alt=""/></a>';
}else{
    $this->load->view('test');

 }?>


</body>
</html>