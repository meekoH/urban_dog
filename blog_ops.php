<?php

ob_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
include_once 'db_connection.php';
extract($_REQUEST);
global $klassObj, $conn;

function text_truncate($input_string, $max_char_length) {
    return (strlen($input_string) > $max_char_length) ? substr($input_string, 0, $max_char_length) . '...' : $input_string;
}

if (isset($action) && ($action == "fetchAllblogs")) {

    $q = "SELECT * FROM blog_mst WHERE status=1 ORDER BY blog_id DESC";
    $blogArr = $klassObj->select($q);
    $html = '';

    if (count($blogArr) > 0) {
        foreach ($blogArr as $value) {
            $blogtitle = $value["title"];
            $html.='<div class="blogentry">';
            $html.='<div class="datebox"><div><div class="blogdate">' . $value["date"] . '</div><div class="share" data-title="'.$blogtitle.'" data-id="' . $value["blog_id"] . '">Share</div></div></div>';
            $html.='<div class="blogcontent">';
            $html.='<div class="blogimage" style="background-image: url(\'' . UPLOAD_PATH . $value["image_name"] . '\')"></div>';
            $html.='<div class="blogtitle bloglink" data-id="' . $value["blog_id"] . '">' . $blogtitle . '</div>';
            $html.='<div class="blogtext">' . text_truncate(strip_tags($value["description"]), 250) . '</div>';
            $html.='<div class="readmore bloglink" data-id="' . $value["blog_id"] . '">READ MORE</div>';
            $html.='</div>';
            $html.='<div class="clear">';
            $html.='</div>';
            $html.='</div>';
        }
    }

    echo $html;
} else if (isset($action) && ($action == "fetchBlogdetails")) {

    $q = "SELECT * FROM blog_mst WHERE status=1 and blog_id=" . $blogid;
    $blogArr = $klassObj->select($q);
    $html = '';

    if (count($blogArr) > 0) {
        foreach ($blogArr as $value) {

            $blogtitle = $value["title"];
            $html.='<div class="blogentry">';
            $html.='<div class="datebox"><div><div class="blogdate">' . $value["date"] . '</div><div class="share" data-title="'.$blogtitle.'" data-id="' . $value["blog_id"] . '">Share</div></div></div>';
            $html.='<div class="blogcontent">';
            $html.='<div class="blogimage" style="background-image: url(\'' . UPLOAD_PATH . $value["image_name"] . '\')"></div>';
            $html.='<div class="blogtitle" data-id="' . $value["blog_id"] . '">' . $blogtitle . '</div>';
            $html.='<div class="blogtext">' . $value["description"] . '</div>';
            $html.='</div>';
            $html.='<div class="clear">';
            $html.='</div>';
            $html.='</div>';

        }
    }
    $data['left_html'] = $html;
    $rhtml = '';
    $qmore = "SELECT * FROM blog_mst WHERE status=1 and blog_id !=" . $blogid . " LIMIT 0,3 ";
    $blogArrmore = $klassObj->select($qmore);

    if (count($blogArrmore) > 0) {
        foreach ($blogArrmore as $valuemore) {
            $side_blog_title = (strlen($valuemore["title"]) > 30) ? substr($valuemore["title"], 0, 30) . '...' : $valuemore["title"];
            $rhtml.='<div class="hidden-sm" id="blog_click_' . $valuemore["blog_id"] . '">
                    <div style="background-image: url(\'' . UPLOAD_PATH . $valuemore["image_name"] . '\')"></div>
                    <p class="date">' . $valuemore["date"] . '</p>
                    <h3>' . $side_blog_title . '</h3>
                    <p class="desc">' . strip_tags($valuemore["description"]) . '</p>
                    <ul>
                        <li><a href="http://www.facebook.com/sharer.php?u=http://klass.com" target="_blank"><img src="images/fblogo.png" alt="Facebook Logo"></a></li>
                        <li><a href="http://twitter.com/share?text=Great%20article:%20&url=http://klass.com" target="_blank"><img src="images/twitlogo.png" alt="Twitter Logo"></a></li>
                        <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=http://klass.com" target="_blank"><img src="images/linkedin-blue.png" alt="LinkedIn Logo"></a></li>
                    </ul>
                    <a class="read-more" data-id="' . $valuemore["blog_id"] . '">READ MORE...</a>
            </div>';
        }
    }
    $data['right_html'] = $rhtml;
    echo json_encode($data);
}
?>