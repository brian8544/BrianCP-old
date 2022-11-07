<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BrianCP - Register</title>
		<link rel="icon" href="/admin/modules/account/assets/img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
		<link rel="stylesheet" type="text/css" href="/admin/modules/account/assets/css/login-dark.css">
	</head>
	<body class="login uk-cover-container uk-background-secondary uk-flex uk-flex-center uk-flex-middle uk-height-viewport uk-overflow-hidden uk-light" data-uk-height-viewport>
		<div class="uk-position-cover uk-overlay-primary"></div>
		<div class="uk-position-bottom-center uk-position-small uk-visible@m uk-position-z-index">
			<span class="uk-text-small uk-text-muted">Copyright © BrianCP <?php echo date("Y");?>. All rights reserved. | Made with ❤️ by: <a href="https://brianoost.com">brian8544</a>
			</span>
		</div>
		<div class="uk-width-medium uk-padding-small uk-position-z-index" uk-scrollspy="cls: uk-animation-fade">
			<div class="uk-text-center uk-margin">
				<img src="/admin/modules/account/assets/img/login-logo.svg" alt="Logo">
			</div>
			<form class="toggle-class" action="/admin/modules/account/register/create.php" method="post">
				<fieldset class="uk-fieldset">
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: user"></span>
							<input name="username" class="uk-input uk-border-pill" maxlength="255" placeholder="Username" type="text">
						</div>
					</div>
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: mail"></span>
							<input name="email" class="uk-input uk-border-pill" maxlength="100" placeholder="E-Mail" type="email">
						</div>
						<div class="uk-margin-small">
							<div class="uk-inline uk-width-1-1">
								<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: lock"></span>
								<input name="password" class="uk-input uk-border-pill" maxlength="255" placeholder="Password" type="password">
							</div>
						</div>
						<div class="uk-margin-bottom">
							<button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1">Create Account</button>
							<center>
								</br>
								<p>Already have an account? <a href="/admin/login.php">
										</br> Sign In </a>. </p>
							</center>
						</div>
				</fieldset>
			</form>
			<form class="toggle-class" action="login-dark.html" hidden>
				<div class="uk-margin-small">
					<div class="uk-inline uk-width-1-1">
						<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: mail"></span>
						<input class="uk-input uk-border-pill" placeholder="E-mail" required type="text">
					</div>
				</div>
				<div class="uk-margin-bottom">
					<button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1">SEND PASSWORD</button>
				</div>
			</form>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit-icons.min.js"></script>
	</body>
</html>