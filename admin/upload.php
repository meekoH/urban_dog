<?php
error_reporting(E_ALL);
ini_set("display_errors", 1); 
foreach ($_FILES["photo"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $name = $_FILES["photo"]["name"][$key];
        
        $timestamp = rand(0, 900000000);
        $rand = rand(0, 100000000);
        
        $result = move_uploaded_file($_FILES["photo"]["tmp_name"][$key], "../uploads/blog/" . $timestamp . "_" . $rand . "_" . $_FILES['photo']['name'][$key]);

        if ($result === FALSE) {
        	echo "upload_failed.png";
        	exit;
        }
        
        echo "blog/" . $timestamp . "_" . $rand . "_" . $_FILES['photo']['name'][$key];
        exit;
    }
}
?>