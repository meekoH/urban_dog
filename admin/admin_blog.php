<?php include_once 'admin_header.php'; ?>
<?php include_once 'admin_sidebar.php'; ?>
		<div class="main blog">
			<button class="new-item" onclick="addEditBlog(0)">Add new blog post</button>
			<div class="table">
				<div class="table-head">
					<div class="col-sm">Date</div>
					<div class="col-md">Title</div>
					<div class="col-lg">Post Contents</div>
					<div class="col-xs">Actions</div>
				</div>
				<div class="table-body blog_list_div">
				</div>
			</div>
		</div>
		<script src="<?= SITE_URL_REMOTE ?>js/jquery-1.10.2.js"></script>
		<script src="<?=SITE_URL_REMOTE?>js/admin.js"></script>
		<script type="text/javascript">
			fillBlog();
		</script>
	</body>
</html>