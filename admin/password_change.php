<?php
ob_start();
session_start();
include_once 'admin_header.php';
?>
<?php
$contactID = base64_decode($_GET['contactId']);

if (isset($_GET) && ($contactID > 0)) {
    global $conn;
    $_SESSION["contact_id"] = $contactID;
    $q = "SELECT * FROM contact_mst WHERE contact_id='" . $_SESSION["contact_id"] . "'";
    $result = mysqli_query($conn, $q);
    while ($row = mysqli_fetch_assoc($result)) {
        $_SESSION["contact_id"] = $row['contact_id'];
        $_SESSION["username"] = $row['username'];
        $_SESSION["is_admin"] = $row['is_admin'];
        $_SESSION["is_login"] = mktime();
    }
}
?>
<div class="login">
    <h2>Park9 Admin</h2>
    <p>Change your password</p>
    <form method="post" name="user_form" id="user_form" action="javascript:void(0)" onsubmit="return false;">
        <p><label style="color: red; display: none;" id="msgBox_userinfo"></label></p>
        <input type="text" placeholder="Username" name="username" id="username" value="<?php if ($_SESSION["username"] != '') echo $_SESSION["username"]; ?>" readonly="readonly" style="background:#eee;" required>
        <input type="password" placeholder="Password" name="password" id="password" required>
        <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password" required>
        <button type="submit" name="forgotBtn" id="forgotBtn" onclick="javascript:reset_password();">Save</button>
    </form>
</div>
<script src="<?= SITE_URL_REMOTE ?>js/jquery-1.10.2.js"></script>
<script src="<?= SITE_URL_REMOTE ?>js/admin.js"></script>
</body>
</html>