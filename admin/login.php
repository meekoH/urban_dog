<?php include_once 'admin_header.php'; ?>
        <div class="wrapper">
            <div class="content">
                <div class="login">
                    <img src="../img/login-logo.png" style="margin-bottom:15px;max-width:75%;">
                    <h2>Log in to your account</h2>
                    <form method="post" name="frmlogin" id="frmlogin" action="javascript:void(0)" onsubmit="return false;">
                        <p><label style="color: red; display: none;" id="login_errmsg"></label></p>
                        <input type="text" placeholder="Username" name="username" id="username" required>
                        <input type="password" placeholder="Password" name="password" id="password" required>
                        <button type="submit" name="loginBtn" id="loginBtn" onclick="javascript:chkLogin();">Login</button>
                    </form>
                    <a href="forgot_pass.php">Forgot your password?</a>
                </div>
            </div>
        </div>
        <script src="<?= SITE_URL_REMOTE ?>js/jquery-1.10.2.js"></script>
        <script src="<?=SITE_URL_REMOTE?>js/admin.js"></script>
    </body>
</html>