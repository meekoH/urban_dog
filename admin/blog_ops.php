<?php

ob_start();
session_start();
include_once '../db_connection.php';
extract($_REQUEST);
global $klassObj, $conn;
$klassObj->restrict_unknown();
if (isset($action) && ($action == "addEditBlog")) {

    if ($blog_id > 0) {
        //// update
        $img = '';
        if ($image_name != '') {
            $img = "image_name='" . mysqli_real_escape_string($conn, $image_name) . "',";
        }

        $upQ = "UPDATE blog_mst SET 
                $img
                title='" . mysqli_real_escape_string($conn, $title) . "',
                date='" . mysqli_real_escape_string($conn, $date) . "',
                description='" . mysqli_real_escape_string($conn, $description) . "',
                modified_on='" . $klassObj->getDateTime() . "',
                modified_by='" . $klassObj->get_contact_id() . "' WHERE blog_id='" . $blog_id . "'";
        $id = $klassObj->update($upQ);
        $id++;
    } else {
        //// insert

        $insertQ = "INSERT INTO blog_mst SET 
                image_name='" . mysqli_real_escape_string($conn, $image_name) . "',
                title='" . mysqli_real_escape_string($conn, $title) . "',
                date='" . mysqli_real_escape_string($conn, $date) . "',
                description='" . mysqli_real_escape_string($conn, $description) . "',
                
                created_on='" . $klassObj->getDateTime() . "',                
                created_by='" . $klassObj->get_contact_id() . "',
                modified_on='" . $klassObj->getDateTime() . "',                
                modified_by='" . $klassObj->get_contact_id() . "'";
        $id = $klassObj->insert($insertQ);
    }
    echo $id;
} else if (isset($action) && ($action == "fetchAllBlog")) {

    $q = "SELECT * FROM blog_mst WHERE status=1 ORDER BY blog_id DESC";
    $blogArr = $klassObj->select($q);
    $html = '';

    if (count($blogArr) > 0) {
        foreach ($blogArr as $value) {             
            $html.='<div class="row">';
            $html.='<div class="col-sm">' . $value['date'] . '</div>';
            $html.='<div class="col-md">' . $value["title"] . '</div>';
            $html.='<div class="col-lg">' . substr(strip_tags($value['description']),0,140) . '...</div>';
            $html.='<div class="col-xs"><img src="view.png" onclick="addEditBlog(' . $value['blog_id'] . ')"><img src="delete.png" onclick="deleteBlog(' . $value['blog_id'] . ')"></div>';
            $html.='</div>';
        }
    }
    echo $html;
} else if (isset($action) && ($action == "fetchBlog")) {
    $q = "SELECT * FROM blog_mst WHERE blog_id='" . $blogid . "' AND status=1";
    $blogArr = $klassObj->select($q);
    $blogArr[0]['image_name'] = UPLOAD_PATH . $blogArr[0]['image_name'];
    echo json_encode($blogArr, true);
} else if (isset($action) && ($action == "deleteBlog")) {
    $updateQ = "UPDATE blog_mst SET status=0 WHERE blog_id='" . mysqli_real_escape_string($conn, $blog_id) . "'";
    $insertedId = $klassObj->update($updateQ);
    echo $insertedId;
}
?>