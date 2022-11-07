<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
?> <nav class="navbar navbar-expand navbar-light navbar-bg">
	<a class="sidebar-toggle js-sidebar-toggle">
		<i class="hamburger align-self-center"></i>
	</a>
	<div class="navbar-collapse collapse">
		<ul class="navbar-nav navbar-align">
			<li class="nav-item dropdown">
				<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
					<i class="align-middle" data-feather="settings"></i>
				</a>
				<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
					<img src="
						<?=$account_avatar?>" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
					<span class="text-dark">Hey <?=$account_username?>! </span>
				</a>
				<div class="dropdown-menu dropdown-menu-end">
					<a class="dropdown-item" href="/admin/profile.php">
						<i class="align-middle me-1" data-feather="user"></i> Profile </a>
					<a class="dropdown-item" href="/admin/server_actions.php">
						<i class="align-middle me-1" data-feather="pie-chart"></i> Server Stats </a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="/admin/settings.php">
						<i class="align-middle me-1" data-feather="settings"></i> Settings </a>
					<a class="dropdown-item" href="https://github.com/brian8544/BrianCP">
						<i class="align-middle me-1" data-feather="help-circle"></i> Help Center </a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="/admin/logout.php">Log out</a>
				</div>
			</li>
		</ul>
	</div>
</nav>