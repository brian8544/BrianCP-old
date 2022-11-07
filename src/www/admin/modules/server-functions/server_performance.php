<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
?>
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<?php
	echo '<strong>';
	echo 'CPU Usage: ';
    require $_SERVER['DOCUMENT_ROOT'].'/admin/modules/server-functions/includes/windows/get_cpu_usage.php';
	echo '</strong>';
	
	echo '</br>';
	
	echo '<strong>';
	echo 'RAM Usage: ';
	require $_SERVER['DOCUMENT_ROOT'].'/admin/modules/server-functions/includes/windows/get_ram_usage.php';
	echo '</strong>';
	
	echo '</br>';
	
	echo '<strong>';
	echo 'Disk Space: ';
	require $_SERVER['DOCUMENT_ROOT'].'/admin/modules/server-functions/includes/windows/get_disk_space.php';
	echo '</strong>';	

	echo '</br>';

	echo '<strong>';
	echo 'Hostname: ';
	require $_SERVER['DOCUMENT_ROOT'].'/admin/modules/server-functions/includes/global/get_hostname.php';
	echo '</strong>';	

	echo '</br>';

	echo '<strong>';
	echo 'IP address: ';
	require $_SERVER['DOCUMENT_ROOT'].'/admin/modules/server-functions/includes/global/get_ip.php';
	echo '</strong>';	
	
	echo '</br>';

	echo '<strong>';
	echo 'Operating System: ';
	require $_SERVER['DOCUMENT_ROOT'].'/admin/modules/server-functions/includes/global/get_os.php';
	echo '</strong>';	
?>

