<?php
/**
 * Created by PhpStorm.
 * User: flaviocassini
 * Date: 11/28/16
 * Time: 8:26 AM
 */


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('css/mystyle.css'); ?>" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/mystyle.css');?>" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/mystyle.css" type="text/css">
	<?php
	$autoload['helper'] = array('css_js');?>

</head>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="mascot">
				<a class="navbar-brand" href="#">
					<img src="<?php echo base_url()?>assets/img/monstercode.png" alt="Green Monster Mascot" style="width:160px;height:32px;"></a>
			</div>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo site_url('')?>">Home</a></li>
				<li><a href="<?php echo site_url('Site/sites')?>">Projects</a></li>
				<li><a href="<?php echo site_url('Site/developers')?>">Developers</a></li>
				<li><a href="<?php echo site_url('Site/employers')?>">Employers</a></li>
				<li><a href="#">Contact</a></li>

				<?php if ($this->session->userdata('login')){ ?>

					<li class="right nav navbar-nav navbar-right"><p class="navbar-text">Hello <?php echo $this->session->userdata('uname'); ?></p></li>
					<li class="right nav navbar-nav navbar-right"><a href="<?php echo base_url(); ?>index.php/home/logout">Log Out</a></li>
				<?php } else { ?>
					<li><a href="<?php echo base_url(); ?>index.php/login">Login</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/signup">Signup</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<div class="container-fluid text-center">
	<div class="row content">
		<div class="col-sm-2 sidenav">
			<div class="well">
				<p>User Picture <br/><br/><br/><br/><br/><br/><br/><br/><br/></p>
			</div>
			<div class="well">
				<p>User Info<br/> Name: <?php echo $uname; ?><br/> Email: <?php echo $uemail; ?> <br/><br/><br/><br/><br/><br/><br/><br/><br/></p>
			</div>
		</div>
		<div class="col-sm-8 text-left">


<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h4>Profile Summary</h4>
			<hr/>
			<p>Name: <?php echo $uname; ?></p>
			<p>Email: <?php echo $uemail; ?></p>
			<p>...</p>
		</div>
		<div class="col-md-8">
			<p>lorem ipsum dolum</p>
			<p>lorem ipsum dolum</p>
			<p>lorem ipsum dolum</p>
			<p>...</p>
		</div>
	</div>
</div>
			<hr>
			<h3>More User Info</h3>
			<p>Lorem ipsum...</p>
		</div>
	<div class="col-sm-2 sidenav">
		<div class="well">
			<p>Job Offers <br/><br/><br/><br/><br/><br/><br/><br/><br/></p>
		</div>
		<div class="well">
			<p>Job Offers <br/><br/><br/><br/><br/><br/><br/><br/><br/></p>
		</div>
	</div>
</div>
</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>