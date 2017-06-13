<?php

ob_start();
session_start();
include_once '../db_connection.php';
extract($_REQUEST);
global $klassObj, $conn;
$klassObj->restrict_unknown();
if (isset($action) && ($action == "addeditnews")) {
    if($nid > 0 && $nid !='')
    {
        //$add= mysqli_query($conn, "update news_mst set title='" . mysqli_real_escape_string($conn,$title) . "', urllink='" . mysqli_real_escape_string($conn,$urllink) . "', date='" . mysqli_real_escape_string($conn,$date) . "', thumb_desc='" . mysqli_real_escape_string($conn,$thumb_desc) . "', description='" . mysqli_real_escape_string($conn,$editor) . "' where 	news_id='" . mysqli_real_escape_string($conn,$nid) . "'");
        $add= "update news_mst set 
            title='" . mysqli_real_escape_string($conn,$title) . "',
                urllink='" . mysqli_real_escape_string($conn,$urllink) . "',
                    date='" . mysqli_real_escape_string($conn,$date) . "',
                        thumb_desc='" . mysqli_real_escape_string($conn,$thumb_desc) . "',
                            description='" . mysqli_real_escape_string($conn,$editor) . "', 
                                 modified_on='" . $klassObj->getDateTime() . "',
                                      modified_by='" . $klassObj->get_contact_id() . "'     where news_id='" . mysqli_real_escape_string($conn,$nid) . "'";
       $resutl= $klassObj->update($add);
       $resutl++;
       if($resutl)
            {
                echo 'success';
            }else{
                echo mysql_error();
            }
            
    }else{
    
        //$add= mysqli_query($conn, "insert into news_mst(title,urllink,date,thumb_desc,description) values ('" . mysqli_real_escape_string($conn,$title). "','" . mysqli_real_escape_string($conn,$urllink) . "','" . mysqli_real_escape_string($conn,$date) . "','" . mysqli_real_escape_string($conn,$thumb_desc) . "','" . mysqli_real_escape_string($conn,$editor) . "')");
        $add= "insert into news_mst(title,urllink,date,thumb_desc,description,created_on,created_by,modified_on, modified_by) values ('" . mysqli_real_escape_string($conn,$title). "','" . mysqli_real_escape_string($conn,$urllink) . "','" . mysqli_real_escape_string($conn,$date) . "','" . mysqli_real_escape_string($conn,$thumb_desc) . "','" . mysqli_real_escape_string($conn,  $editor) . "','" . $klassObj->getDateTime() . "','" . $klassObj->get_contact_id() . "','" . $klassObj->getDateTime() . "','" . $klassObj->get_contact_id() . "')";
       
      
        $resutl= $klassObj->insert($add);
        if($resutl)
            {
                echo 'success';
            }else{
                echo mysql_error();
            }
    }
        
    
}  else if ($action == "deletenews") {
    
   $add= $klassObj->update("update news_mst set status='0' where news_id='" . mysqli_real_escape_string($conn,$dnid) . "'");
    
    if($add)
        {
            echo 'success';
        }else{
            
            echo mysql_error();
            
        }
    
} else if (isset($action) && ($action == "fetchAllnews")) {
    $q = "SELECT * FROM news_mst where status='1' ORDER BY  news_id ASC ";
    $cateArr = $klassObj->select($q);
    $html = '';
    if (count($cateArr) > 0) {
        foreach ($cateArr as $value) {
            $html.='<div class="row">
                    <div class="col-sm">' . $value["date"] . '</div>
                    <div class="col-md">' . $value["title"] . '</div>
                    <div class="col-md">' . $value["urllink"] . '</div>
                    <div class="col-md">' . $value["thumb_desc"] . '</div>
                    <div class="col-xs"><img src="view.png" onclick="edit_newsinfo(' . $value["news_id"] . ');"><img src="delete.png" onclick="delete_newsinfo(' . $value["news_id"] . ');"></div>
            </div>';
        }
        
    }
    echo $html;
}  else if (isset($action) && ($action == "fetchnews")) {
    
    $q = "SELECT * FROM news_mst where news_id='$news_id'";
    $cateArr = $klassObj->select($q);
    
    echo json_encode($cateArr, true);
} else {
    header("Location: ./index");
}
?>