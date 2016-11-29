<?php
/**
 * Created by PhpStorm.
 * User: flaviocassini
 * Date: 11/29/16
 * Time: 12:06 PM
 */

session_start();

if(isset($_SESSION['message']))
{
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

$user="root";
$pass="root";
$db = new PDO('mysql:host=localhost;dbname=MonsterCode;port=8889', $user, $pass);




if (isset($_POST['submit'])) {
    if (is_numeric($_POST['firstname']) === false) {
        $firstname = $_POST['firstname'];
        $error = false;


    } else {
        echo "<div class='message'>Invalid invalid First Name... Please Go Back Try Again</div>";
        $error = true;

    }
    if (is_numeric($_POST['lastname']) === false) {
        $lastname = $_POST['lastname'];
        $error = false;
    } else {
        echo "<div class='message'>Invalid Last Name... Please Go Back Try Again</div>";
        $error = true;


    }
    if (!filter_var($_POST['website'], FILTER_VALIDATE_URL)) {
        echo "<div class='message'>Invalid Website URL... Please Go Back Try Again</div>";
        $error = true;

    } else {
        $website = $_POST['website'];
        $error = false;

    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "<div class='message'>Invalid EMAIL... Please Go Back Try Again</div>";

        $error = true;
    } else {
        $email = $_POST['email'];
        $error = false;
    }

    if (!is_numeric($_POST['phone'])) {
        echo "<div class='message'>Invalid Phone... Please Go Back Try Again</div>";

        $error = true;
    } else {;
        $phone = $_POST['phone'];

        $error = false;

    }

    if ($error === true) {

        echo "<div class='message'>Your Client Was Not Successfully Added!</div>";
    }else {

        $stmt = $db->prepare("INSERT INTO users (firstname, lastname, phone, email, website) VALUES (:firstname, :lastname, :phone, :email, :website)");
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':website', $website);
        $stmt->execute();

        echo "<div class='message'>Your Client Was Successfully Added!</div>";
    }

}