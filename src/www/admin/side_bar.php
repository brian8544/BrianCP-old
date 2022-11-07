<?php
   require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
   ?> <nav id="sidebar" class="sidebar js-sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="/admin/">
			<span class="align-middle"> <?php require 'includes/site_title.php' ?> - Dashboard </span>
		</a>
		<ul class="sidebar-nav">
			<li class="sidebar-header"> Main: </li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="/admin/">
					<i class="align-middle" data-feather="sliders"></i>
					<span class="align-middle">Dashboard</span>
				</a>
			</li>
			<li class="sidebar-header"> Users: </li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="/admin/profile.php">
					<i class="align-middle" data-feather="user"></i>
					<span class="align-middle">My Account</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="/admin/profile_list.php">
					<i class="align-middle" data-feather="users"></i>
					<span class="align-middle">All Accounts</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="/admin/profile_create.php">
					<i class="align-middle" data-feather="user-plus"></i>
					<span class="align-middle">Add Account</span>
				</a>
			</li>
			<li class="sidebar-header"> System: </li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="/admin/server_actions.php">
					<i class="align-middle" data-feather="server"></i>
					<span class="align-middle">Server Actions</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="/admin/modules/phpmyadmin/module_loader.php">
					<i class="align-middle" data-feather="database"></i>
					<span class="align-middle">phpMyAdmin</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="/admin/settings.php">
					<i class="align-middle" data-feather="settings"></i>
					<span class="align-middle">Settings</span>
				</a>
			</li>
	</div>
</nav>