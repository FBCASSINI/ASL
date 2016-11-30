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

        $stmt = $db->prepare("INSERT INTO users (firstname, lastname, phone, email) VALUES (:firstname, :lastname, :phone, :email)");
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        echo "<div class='message'>Your Client Was Successfully Added!</div>";
    }

