<?php

ob_start();
session_start();
include_once '../db_connection.php';
extract($_REQUEST);
global $klassObj, $conn;
$klassObj->restrict_unknown();
if (isset($action) && ($action == "fetchAllCategory")) {
    $q = "SELECT * FROM category_mst WHERE status=1 ORDER BY  category_id ASC ";
    $cateArr = $klassObj->select($q);

    $html = '';
    if (count($cateArr) > 0) {
        foreach ($cateArr as $value) {
            $html.='<div id="cat_' . $value['category_id'] . '" onclick="change_category(' . $value['category_id'] . ')">'
                    . '<div  id="cat_list_' . $value['category_id'] . '">'
                    . '<span>' . $value["category_name"] . '</span><img src="chevron.png">'
                    . '<img class="delete-image" src="delete-white.png" onclick="deleteCategory(' . $value['category_id'] . ')" title="Delete">'
                    . '<img src="edit.png" onclick="javascript:show_edit_cate(' . $value['category_id'] . ')" title="Edit">'
                    . '</div>'
                    . '<div class="edit-cat" id="cat_edit_' . $value['category_id'] . '">
                        <input type="text" name="cat_name_' . $value['category_id'] . '" id="cat_name_' . $value['category_id'] . '" placeholder="Category Name" value="' . $value["category_name"] . '" required>
                        <img class="cancel-btn" src="cancel.png" type="submit" onclick="javascript:cancel_edit_category(' . $value['category_id'] . ')" title="Cancel">
                        <img class="save-btn" src="save.png" onclick="javascript:add_cate(' . $value['category_id'] . ')" title="Save">
                      </div>'
                    . '</div>';
        }
    }
    $html.='<div class="new-cat"><input type="text" name="new_cat" id="new_cat" placeholder="New Category" required><button type="submit" onclick="javascript:add_cate(0)">Add</button></div>';

    echo $html;
} else if (isset($action) && ( $action == "addCategory")) {
    if (isset($cat_id) && $cat_id != 0) {
        //// update
        $updateQ = "UPDATE category_mst SET 
                category_name='" . mysqli_real_escape_string($conn, $cat_name) . "',
                modified_on='" . $klassObj->getDateTime() . "',                
                modified_by='" . $klassObj->get_contact_id() . "'
                WHERE category_id='" . mysqli_real_escape_string($conn, $cat_id) . "'";
        $insertedId = $klassObj->update($updateQ);
    } else {
        /// insert
        $insertQ = "INSERT INTO category_mst SET 
                category_name='" . mysqli_real_escape_string($conn, $cat_name) . "',
                created_on='" . $klassObj->getDateTime() . "',                
                created_by='" . $klassObj->get_contact_id() . "',
                modified_on='" . $klassObj->getDateTime() . "',                
                modified_by='" . $klassObj->get_contact_id() . "'";
        $insertedId = $klassObj->insert($insertQ);
    }

    echo $insertedId;
} else if (isset($action) && ($action == "deleteCategory")) {
    $updateQ = "UPDATE category_mst SET status=0 WHERE category_id='" . mysqli_real_escape_string($conn, $category_id) . "'";
    $insertedId = $klassObj->update($updateQ);
    echo $insertedId;
} else if (isset($action) && ($action == "fetchAllPosition")) {

    $q = "SELECT * FROM position_mst WHERE category_id='" . $selectedCategory . "' AND status=1";
    $posArr = $klassObj->select($q);
    $html = '';

    if (count($posArr) > 0) {
        foreach ($posArr as $value) {
            $html.='<div class="row">';
            $html.='<div class="col-mdlg">' . $value['job_title'] . '</div>';
            $html.='<div class="col-mdlg">' . $value['job_url'] . '</div>';
            $html.='<div class="col-sm"><img src="view.png" onclick="addEditPosition(' . $value['position_id'] . ')"><img src="delete.png" onclick="deletePosition(' . $value['position_id'] . ')"></div>';
            $html.='</div>';
        }
    }
    echo $html;
} else if (isset($action) && ($action == "fetchPosition")) {
    $q = "SELECT * FROM position_mst WHERE position_id='" . $positionid . "' AND status=1";
    $cateArr = $klassObj->select($q);
    echo json_encode($cateArr, true);
} else if (isset($action) && ($action == "addEditPostion")) {
    if ($position_id > 0) {
        //// update
        $updateQ = "UPDATE position_mst SET 
        category_id='" . mysqli_real_escape_string($conn, $category_id) . "',
        job_title='" . mysqli_real_escape_string($conn, $job_title) . "',
        job_url='" . mysqli_real_escape_string($conn, $job_url) . "',
        country='" . mysqli_real_escape_string($conn, $country) . "',
        city='" . mysqli_real_escape_string($conn, $city) . "',
        
        modified_on='" . $klassObj->getDateTime() . "',
        modified_by='" . $klassObj->get_contact_id() . "' WHERE position_id='" . mysqli_real_escape_string($conn, $position_id) . "'";
        $insertedId = $klassObj->update($updateQ);
    } else {
        //// insert
        $insertQ = "INSERT INTO position_mst SET 
            category_id='" . mysqli_real_escape_string($conn, $category_id) . "',
            job_title='" . mysqli_real_escape_string($conn, $job_title) . "',
            job_url='" . mysqli_real_escape_string($conn, $job_url) . "',
            country='" . mysqli_real_escape_string($conn, $country) . "',
            city='" . mysqli_real_escape_string($conn, $city) . "',
                
                created_on='" . $klassObj->getDateTime() . "',                
                created_by='" . $klassObj->get_contact_id() . "',
                modified_on='" . $klassObj->getDateTime() . "',                
                modified_by='" . $klassObj->get_contact_id() . "'";
        $insertedId = $klassObj->insert($insertQ);
    }
    echo $insertedId;
} else if (isset($action) && ($action == "deletePosition")) {
    $updateQ = "UPDATE position_mst SET status=0 WHERE position_id='" . mysqli_real_escape_string($conn, $position_id) . "'";
    $insertedId = $klassObj->update($updateQ);
    echo $insertedId;
} else {
    header("Location: ./index.php");
}
?>