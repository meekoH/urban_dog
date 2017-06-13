<?php
	ob_start();
	session_start();
	include_once 'admin_header.php';
?>
		<div class="wrapper">
			<div class="content">
				<div class="login">
					<h2>Forgot your password?</h2>
					<p>Get your new password</p>
					<form method="post" name="password_form" id="password_form" action="javascript:void(0)" onsubmit="return false;">
						<input type="hidden" name="action" id="action" value="sendForgotPass" >
						<p><label style="color: red; display: none;" id="msgBox_forgotpass"></label></p>
						<input type="email" id="forgotemail" name="forgotemail" placeholder="Email" value="" required>
						<button type="submit" name="forgotBtn" id="forgotBtn" onclick="javascript:sendForgotPass();">Send</button>
					</form>
					<a href="login.php">Back to Admin Login</a>
				</div>
			</div>
		</div>
		<script src="<?= SITE_URL_REMOTE ?>js/jquery-1.10.2.js"></script>
		<script src="<?= SITE_URL_REMOTE ?>js/admin.js"></script>
	</body>
</html>