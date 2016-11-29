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


<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
        class="close" title="Close Modal">&times;</span>

    <!-- Modal Content -->
    <form class="modal-content animate" method="post" action="<?php echo base_url();?>index.php/users/insert_user_db">
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
    <form class="modal-content animate" action="<?php echo base_url();?>index.php/users/insert_user_db">
        <img class="monster-form-img" src="<?php echo base_url()?>assets/img/monstercode2.png" alt="Green Monster Mascot" style="width:600px;height:100px;">
        <div class="form-group">
            <label>Email Adress: </label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label>First Name: </label>
            <input type="email" class="form-control" id="firstname" name="firstname" required>
        </div>
        <div class="form-group">
            <label>Last Name: </label>
            <input type="email" class="form-control" id="lastname" name="lastname" required>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label>Repaeat Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>

        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </form>
</div>
