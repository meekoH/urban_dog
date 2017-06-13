<?php include_once 'admin_header.php'; ?>
<?php include_once 'admin_sidebar.php'; ?>
<?php
$blog_id = 0;
if (isset($_REQUEST['blogId']) && ($_REQUEST['blogId'] > 0 )) {
    $blog_id = $_REQUEST['blogId'];
}
?>
<div class="main blog-det">
    <button class="back-btn">Back</button>
    <form action="javascript:void(0)" name="admin_blog_form" id="admin_blog_form" method="post" enctype="multipart/form-data">
        <label style="display:none;float:left;" id="msgBox_blog"></label>
        <div class="new-modal">
            <h2>Blog Post</h2>
            <div class="modal-body">
                <div class="image-add">
                    <div>
                        <input type="hidden" name="blog_img_hidden" id="blog_img_hidden" value="">
                        <img id="loading_img" src="../images/loading.gif" style="border-radius: 6px; display: none;" >
                        <img id="blog_img" width="100%" height="100%" src="" style="border-radius: 6px; display: none;" >
                        <input type="file" name="photo" id="photo" class="upload">
                        <span>ADD THUMBNAIL IMAGE</span>
                    </div>
                </div>
                <div>
                    <input type="text" name="title" id="title" placeholder="TITLE">
                    <input type="text" name="date" id="date" placeholder="DATE">
                </div>
                <textarea name="editor" id="editor"></textarea>
            </div>
        </div>
        <button class="save-btn" onclick="blog_addedit(<?= $blog_id ?>);">Save</button>
    </form>
</div>
<script src="<?= SITE_URL_REMOTE ?>js/jquery-1.10.2.js"></script>
<script src="../ckeditor/ckeditor.js"></script>
<script>
            CKEDITOR.replace('editor');
</script>
<script src="<?= SITE_URL_REMOTE ?>js/admin.js"></script>
<script type="text/javascript">
            fillBlogForm(<?= $blog_id ?>);
</script>
</body>
</html>