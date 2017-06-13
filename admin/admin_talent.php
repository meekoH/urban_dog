<?php include_once 'admin_header.php'; ?>
<?php include_once 'admin_sidebar.php'; ?>

		<div class="main talent">
                    <div class="second-nav category_list_div">
                        <!-- <button class="category">Add new category</button> -->
                        <input type="hidden" name="selectedCategory" id="selectedCategory" value="0">
                    </div>
                    <div class="right-col">
                        <button class="new-item" onclick="addEditPosition(0)">Add new service</button>
                        <div class="table">
                            <div class="table-head">
                                <div class="col-mdlg">Job Title</div>
                                <div class="col-mdlg">Job URL</div>
                                <div class="col-sm">Actions</div>
                            </div>
                            <div class="table-body position_list_div">
                            </div>
                        </div>
                    </div>
		</div>
		<script src="<?= SITE_URL_REMOTE ?>js/jquery-1.10.2.js"></script>
		<script src="<?=SITE_URL_REMOTE?>js/admin.js"></script>
                <script type="text/javascript">
                    fillCategory();
                    fillPosition();
                </script>
	</body>
</html>