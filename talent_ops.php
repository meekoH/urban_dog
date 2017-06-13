<?php

ob_start();
session_start();
include_once 'db_connection.php';
extract($_REQUEST);
global $klassObj, $conn;
if (isset($action) && ($action == "fetchAllTalent")) {
    $q = "SELECT * FROM category_mst WHERE status=1 ORDER BY  category_id ASC ";
    $cateArr = $klassObj->select($q);

    $html = '';
    if (count($cateArr) > 0) {
        foreach ($cateArr as $value) {
            $cat_id = $value['category_id'];

            $q = "SELECT * FROM position_mst WHERE category_id='" . $cat_id . "' AND status=1";
            $posArr = $klassObj->select($q);
            $html.='<h2>' . $value['category_name'] . ' (' . count($posArr) . ')</h2>';
            if (count($posArr) > 0) {
                foreach ($posArr as $posVal) {
                    $html.='<div class="staff-node">
                                <h4>'.$posVal['job_title'].'</h4>
                                <p class="location-name">'.$posVal['job_desc'].'</p>
                                <a onclick="openPopup(\''.$posVal['job_title'].'\', \''.$posVal['job_desc'].'\', \''.$posVal['job_email'].'\')">View More</a>';
                    $html.='</div>';
                }
            }
        }
    }
    echo $html;
} 
?>