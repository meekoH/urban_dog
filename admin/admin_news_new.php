<?php include_once 'admin_header.php'; ?>
<?php include_once './admin_sidebar.php';
if(isset($_REQUEST['id']) && ($_REQUEST['id'] > 0))
{
    $news_id = $_REQUEST['id'];
}

?>
		<div class="main news-det">
			<form id="addnews" name="addnews" method="post" action="javascript:void(0)" onsubmit="return false;">
                        <input type="hidden" value="addeditnews" name="action">
                        <input type="hidden"  name="nid" id="nid">
                        <button class="back-btn">Back</button>
			<div class="new-modal">
				<div class="modal-head">News Story</div>
				<div class="modal-body">
					<div>
                                            <input type="text" id="title" name="title" placeholder="TITLE">
                                                <input class="link" id="urllink" name="urllink" type="text" placeholder="LINK URL">
                                                <input id="demo_box_1" type="checkbox" class="css-checkbox"> <label for="demo_box_1" class="css-label"> NONE</label>
                                                <input type="text" id="date" name="date" placeholder="DATE">
                                                <textarea placeholder="THUMBNAIL DESCRIPTION" id="thumb_desc" name="thumb_desc" rows="4"></textarea>
					</div>
                                    <textarea name="editor" id="editor" ></textarea>
				</div>
			</div>
			<button class="save-btn" onclick="return addedit_newsinfo();">Save</button>
		</form>
		</div>
		<script src="<?= SITE_URL_REMOTE ?>js/jquery-1.10.2.js"></script>
                <script src="../ckeditor/ckeditor.js"></script>
		<script>
			CKEDITOR.replace('editor');
		</script>
		<script src="<?= SITE_URL_REMOTE ?>js/admin.js"></script>
                <script> fetchnews(<?=$news_id ?>); </script>
	</body>
</html>