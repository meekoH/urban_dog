<?php

ob_start();
session_start();
include_once '../db_connection.php';
extract($_REQUEST);
global $klassObj, $conn;
if (isset($action) && ($action == "checklogin")) {

    if ($_REQUEST['existcookie'] == 'yes') {
        $username = base64_decode($_REQUEST["username"]);
        $password = base64_decode($_REQUEST["password"]);
    } else {
        $username = array_key_exists("username", $_REQUEST) ? $_REQUEST["username"] : "";
        $password = array_key_exists("password", $_REQUEST) ? $_REQUEST["password"] : "";
    }
    $logres = mysqli_query($conn, "select * from contact_mst where username='$username' and password='" . md5($password) . "'");

    if ($_REQUEST['existcookie'] == 'yes' && mysqli_num_rows($logres) < 1) {
        setcookie("username", "", time() - 31536000);
        setcookie("password", "", time() - 31536000);
        session_destroy();
        echo "Your Password has been changed please Login again...";
        die();
    }
    if (mysqli_num_rows($logres) < 1) {
        echo "Invalid Username or Password";
        die();
    }

    while ($logarr = mysqli_fetch_array($logres)) {
        $_SESSION["contact_id"] = $logarr['contact_id'];
        $_SESSION["username"] = $logarr['username'];
        $_SESSION["is_admin"] = $logarr['is_admin'];
        $_SESSION["is_login"] = mktime();

        if (isset($_REQUEST['rememberme']) && $_REQUEST['rememberme'] == 'checked') {
            setcookie("username", base64_encode($username), time() + 31536000);
            setcookie("password", base64_encode($password), time() + 31536000);
        }
        mysqli_query($conn, "insert into loginlog_mst(contact_id,login_datetime,login_ip) values (" . $_SESSION["contact_id"] . ",'" . date("Y-m-d H:i:s") . "','" . $klassObj->getIP() . "')");
        $_SESSION["loginlog_id"] = mysqli_insert_id($conn);
        if ($_SESSION["is_admin"] == 1) {
            $_SESSION["is_admin"] = '1';
            $_SESSION["admin_contact_id"] = $logarr['contact_id'];
            echo "#admin_login_pass";
        } else {
            $_SESSION["is_admin"] = '0';
            echo "#client_login_pass";
        }
    }
    mysqli_free_result($logres);
} else if ($action == "logout") {
    mysqli_query($conn, "update loginlog_mst set logout_datetime='" . date("Y-m-d H:i:s") . "' where loginlogid_pk=" . $_SESSION["loginlog_id"]);
    setcookie("username", "", time() - 31536000);
    setcookie("password", "", time() - 31536000);
    unset($_SESSION["contact_id"]);
    unset($_SESSION["first_name"]);
    unset($_SESSION["last_name"]);
    unset($_SESSION["userType_id"]);
    unset($_SESSION["regCode_id"]);
    unset($_SESSION["username"]);
    unset($_SESSION["is_login"]);
    unset($_SESSION["is_admin"]);

    if ($_SESSION["login_from"] == "admin_panel") {
        unset($_SESSION["login_from"]);
        echo "http://" . $_SESSION["admin_domain"] . "/jeckl_admin/login.php?msg=1";
    } else {
        echo "index.php";
    }

    session_destroy();
//    echo true;
//    header("Location: registration");
} elseif (isset($action) && $action == 'sendForgotPass') {
    if (isset($forgotemail) && $forgotemail != '') {
        $q = "SELECT * FROM contact_mst WHERE email='" . $forgotemail . "'";
        $result = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($result)) {
            $username = $row['username'];
            $contact_id = $row['contact_id'];
            $email = $row['email'];
        }
        if ($contact_id > 0) {
            $mailbody = "";
            $mailbody = $mailbody . "<html><title>Forgot password</title><body>";
            $mailbody = $mailbody . "<p>Hello $username,</p>
                                     <p>Request for Password Reset was accepted,</p>";
            $mailbody = $mailbody . "<p>The request is submitted on <b>" . date("Y-m-d H:i:s") . "</b></p>";
            $mailbody = $mailbody . "<p>Please <a href='" . SITE_URL_REMOTE . "admin/password_change.php?contactId=" . base64_encode($contact_id) . "' target='_blank'>Click Here </a> to reset your password. </p>";
            $mailbody = $mailbody . "<p>If above link doesn't work, open the following url into your browser : <label>" . SITE_URL_REMOTE . "admin/password_change.php?contactId=" . base64_encode($contact_id) . "</label></p>";
            $mailbody = $mailbody . "<p>Thanks,</p>";
            $mailbody = $mailbody . "<p></p>";
            $mailbody = $mailbody . "<p>*This is an auto generated email. Do not reply to this email.*</p>";
            $mailbody = $mailbody . "</body></html>";
            $responce = @$klassObj->send_mail_cc("Park9 :: Reset your password", "info@park9.ca", $forgotemail, $mailbody, TRUE);
            if ($responce) {
                echo "success";
            } else {
                echo "Mail sent Error!";
            }
        } else {
            echo "Unfortunately your email does not appear in our system please check and re-enter your email address again";
        }
    }
} else if (isset($action) && $action == 'updatePassword') {
    if (isset($_SESSION["contact_id"]) && $_SESSION["contact_id"] > 0) {
        $que = "UPDATE contact_mst SET 
            password='" . md5(mysqli_real_escape_string($conn,$password)) . "'
                WHERE contact_id='" . $_SESSION["contact_id"] . "'";
        $affectedRows = $klassObj->update($que);
        if ($affectedRows > 0)
            echo "success";
        else
            echo "Password is up-to-date.";
    } else {
        echo "logout";
    }
} else {
    header("Location: ./index");
}
?>