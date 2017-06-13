<?php include_once 'admin_header.php'; ?>
<?php include_once 'admin_sidebar.php'; ?>

<?php
$position_id = 0;
$category_id = 0;
if (isset($_REQUEST['position_id']) && ($_REQUEST['position_id'] > 0 )) {
    $position_id = $_REQUEST['position_id'];

}
if (isset($_REQUEST['category_id']) && ($_REQUEST['category_id'] > 0 )) {
    $category_id = $_REQUEST['category_id'];
}
?>
        <div class="main talent-det">
            <button class="back-btn">Back</button>
            <form action="javascript:void(0)" onsubmit="return false;" method="post" name="frmPosition" id="frmPosition">
<!--                <input type="hidden" name="position_id" id="position_id" value="<?= $position_id ?>">
                <input type="hidden" name="category_id" id="category_id" value="<?= $category_id ?>">-->
                <div class="new-modal">
                    <div class="modal-head">Talent</div>
                    <div class="modal-body">
                        <input type="text" name="job_title" id="job_title" placeholder="JOB TITLE">
                        <input type="text" name="job_url" id="job_url" placeholder="JOB URL">
                        <input type="text" name="country" id="country" placeholder="COUNTRY">
                        <input type="text" name="city" id="city" placeholder="CITY">
                    </div>

                </div>
                <button class="save-btn" onclick="doAddEditPosition(<?= $position_id ?>,<?= $category_id ?>)">Save</button>
            </form>
        </div>
        <script src="<?= SITE_URL_REMOTE ?>js/jquery-1.10.2.js"></script>
    	<script src="<?=SITE_URL_REMOTE?>js/admin.js"></script>
        <script type="text/javascript">
            fillPositionForm(<?= $position_id ?>);
        </script>
    </body>
</html>