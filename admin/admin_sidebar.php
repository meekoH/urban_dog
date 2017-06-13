<?php
$URI_COMPONENTS = explode("/", $_SERVER['REQUEST_URI']);
//must call both because it alters the array
$SELF_PAGENAME = array_pop($URI_COMPONENTS);
$pages = explode(".", $SELF_PAGENAME);
$SELF_PAGENAME = $pages[0];
?>
<ul class="side-nav">
<!--    <a href="../admin/admin_news.php"><li class="<?php if ($SELF_PAGENAME == 'admin_news' || $SELF_PAGENAME == 'admin_news_new') {
    echo "selected";
} ?>">News Tab</li></a>-->
    <a href="../admin/admin_blog.php"><li class="<?php if ($SELF_PAGENAME == 'admin_blog' || $SELF_PAGENAME == 'admin_blog_new') {
    echo "selected";
} ?>" style="border-right:1px solid #ff6600;">Blog Tab</li></a>
    <!-- <a href="../admin/admin_talent.php"><li class="<?php if ($SELF_PAGENAME == 'admin_talent' || $SELF_PAGENAME == 'admin_talent_new') {
    echo "selected";
} ?>">Services Tab</li></a> -->
	<div class="clear"></div>
</ul>