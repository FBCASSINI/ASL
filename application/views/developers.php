<?php
/**
 * Created by PhpStorm.
 * User: flaviocassini
 * Date: 11/28/16
 * Time: 8:25 AM
 */


?>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Welcome</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <hr>
            <h3>Fill Out Employee Resume</h3>
            <form class="modal-content1" action="action_page.php">
                <div class="form-group">
                    <label>First Name: </label>
                    <input type="text" class="form-control" id="fname2" name="fname2" required>
                </div>
                <div class="form-group">
                    <label>Last Name: </label>
                    <input type="text" class="form-control" id="lname2" name="lname2" required>
                </div>
                <div class="form-group">
                    <label>Employee Location: </label>
                    <input type="text" class="form-control" id="elocation" name="elocation" required>
                </div>
                <div class="form-group">
                    <label>Code Skills</label>
                    <input type="text" class="form-control" id="codekills" name="codesckills" required>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" id="pnumber" name="pnumber" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id="email2" name="email2" required>
                </div>

                <div class="form-group">
                    <label>Comment Box</label>
                    <textarea rows="10" cols="200" name="comment" id="comment">At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.</textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
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