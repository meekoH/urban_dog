<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

ob_start();
session_start();
include_once 'db_connection.php';
extract($_REQUEST);
global $klassObj, $conn;

if (isset($action) && $action == 'sendContactMail') {

    // Prevent email injection
    if ( preg_match( "/[\r\n]/", $name ) || preg_match( "/[\r\n]/", $email ) ) {
        die ("Malformed input!");
    }

    $ip = $_SERVER['REMOTE_ADDR'];
    $datetime = $klassObj->getDateTime();

    $que = "INSERT INTO contactus_mst SET
    name='" . mysqli_real_escape_string($conn,$name) . "',
    email='" . mysqli_real_escape_string($conn,$email) . "',
    phone='" . mysqli_real_escape_string($conn,$phone) . "',
    message='" . mysqli_real_escape_string($conn,$message) . "',
    created_on='" . mysqli_real_escape_string($conn,$datetime) . "',
    modified_on='" . mysqli_real_escape_string($conn,$datetime) . "',
    ip='" . mysqli_real_escape_string($conn,$ip) . "';";


    $affectedRows = $klassObj->insert($que);


    if ($affectedRows > 0) {

        $mailbody = "";
        $mailbody = $mailbody . "<html><title>Contact Us</title><body>";
        $mailbody = $mailbody . "<p>The following user has submitted a Contact Us form:</p>";
        $mailbody = $mailbody . "<p>Date Submitted - $datetime</p>";
        $mailbody = $mailbody . "<p>Name - $name</p>";
        $mailbody = $mailbody . "<p>Email Address - $email</p>";
        $mailbody = $mailbody . "<p>Phone - $phone</p>";            
        $mailbody = $mailbody . "<p>Message - $message</p>";
        $mailbody = $mailbody . "<p>IP - $ip</p>";
        $mailbody = $mailbody . "</body></html>";

        $responce = $klassObj->send_mail_cc("Park9 Contact Us Message Received", "$email", ADMIN_EMAIL, $mailbody, TRUE);

        if ($responce) {
            echo "success";
        } else {
            echo "Mail sent Error!";
        }
    } else {
        echo "Database error!";
    }

}

?>
