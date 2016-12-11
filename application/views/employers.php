<?php
/**
 * Created by PhpStorm.
 * User: flaviocassini
 * Date: 11/28/16
 * Time: 9:11 AM
 */
$autoload['helper'] = array('css_js');?>
?>



            <h1>Welcome</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <hr>
            <h3>Fill Out Employee Resume</h3>
            <form class="modal-content1" method='post' action="<?php echo site_url('Employer/index');?>">
                <div class="form-group">
                    <label>Company Name </label>
                    <input type="text" class="form-control" id="company" name="company">
                </div>
                <div class="form-group">
                    <label>Salary </label>
                    <input type="text" class="form-control" id="salary" name="salary">
                </div>
                <div class="form-group">
                    <label>Company Location: </label>
                    <input type="text" class="form-control" id="location" name="location">
                </div>
                <div class="form-group">
                    <label>Code Skills Needed</label>
                    <input type="text" class="form-control" id="codeskills" name="codeskills">
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label>Comment Box</label>
                    <textarea rows="10" cols="200" name="comment" id="comment">At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.</textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

