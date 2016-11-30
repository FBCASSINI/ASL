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
                <li class="right nav navbar-nav navbar-right"><button class="btn btn-default glyphicon glyphicon-log-in" onclick="document.getElementById('id01').style.display='block'"> Login</button></li>
                <li class="right nav navbar-nav navbar-right"><button class="btn btn-default glyphicon glyphicon-log-in" onclick="document.getElementById('id02').style.display='block'"> Register</button></li>
            </ul>
        </div>
    </div>
</nav>

<!-- The Modal-->

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
        class="close" title="Close Modal">&times;</span>

    <!-- Modal Content ---->
    <form class="modal-content animate" method="post" action="<?php echo base_url();?>">
        <img class="monster-form-img" src="<?php echo base_url()?>assets/img/monstercode2.png" alt="Green Monster Mascot" style="width:600px;height:100px;">
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" id="pwd" name="pwd" required>
        </div>
        <div class="checkbox">
            <label><input type="checkbox">Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>

        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </form>

</div>

<!--Register Modal -->



<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'"
        class="close" title="Close Modal">&times;</span>
    <form class="modal-content animate" method="post" action="<?php echo base_url();?>">
        <?php $attributes = array("name" => "signupform");

			?>
        <img class="monster-form-img" src="<?php echo base_url()?>assets/img/monstercode2.png" alt="Green Monster Mascot" style="width:600px;height:100px;">
        <div class="form-group">

            <label for="firstname" class="control-label">First Name:</label>
            <input class="form-control" name="firstname" placeholder="Your First Name" type="text" value="<?php echo set_value(':firstname'); ?>" />
        </div>
        <div class="form-group">
            <label>Lastname: </label>
            <input id="lastname" name="lastname" placeholder="lastname" type="text" class="form-control"  value="<?php echo set_value('lastname'); ?>" />
        </div>
        <div class="form-group">
            <label>Email </label>
            <input id="email" name="email" placeholder="email" type="text" class="form-control"  value="<?php echo set_value('email'); ?>" />
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input id="password" name="password" placeholder="password" type="text" class="form-control"  value="<?php echo set_value('password'); ?>" />
        </div>
        <div class="form-group">
            <label>Repaeat Password:</label>
            <input id="password" name="password" placeholder="password" type="text" class="form-control"  value="<?php echo set_value('password'); ?>" />
        </div>
        <button type="submit" class="btn btn-default">Submit</button>

        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </form>
</div>



