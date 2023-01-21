<?php

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https://";
else $link = "http://";

$baseURL = str_replace('/index.php', '', $_SERVER['SCRIPT_FILENAME']);
$baseURL = str_replace($_SERVER['DOCUMENT_ROOT'], $_SERVER['HTTP_HOST'], $baseURL);

define('BASE_URL', $link . $baseURL);
define('CONTROLLERS_PATH', 'app/controllers/');
define('MODELS_PATH', 'app/models/');
define('VIEWS_PATH', 'app/views/');

//DB
define('DB_HOST', 'localhost');
define('DB_NAME', 'mengkerja');
define('DB_USER', 'root');
define('DB_PASS', '');
