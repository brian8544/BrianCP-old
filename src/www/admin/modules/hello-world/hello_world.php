<?php
/*
Don't require/include this file directly. Use:
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/modules/hello-world/module-loader.php';
Otherwise it will bypass the on/off conditions.

Always include 'config.php' in every runnable script, session_start(); is set in this file.
Without every unauthenticated user will be able to run and thus vulnerabilties will be created.
*/

// Security check
require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';

// Runnable code
echo 'Hello World.';
?>