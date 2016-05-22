<?php
require_once('functions.php');
start_session();
connect_db();
$images = getDBImages();

$error_messages = array();
$mode = 'mainpage';
$mainContentView = 'view/mainpage.html';
if (isset($_GET['mode'])) {
    $mode = $_GET['mode'];
    switch($mode) {
        case 'mainpage':
            show_mainpage();
            break;
        case 'gallery':
            show_gallery();
            break;
        case 'image_load':
            show_image_load();
            break;
        case 'login':
            show_login();
            break;
        case 'register':
            show_register();
            break;
        case 'image':
            show_image();
            break;
        case 'logout';
            end_session();
            show_main_page();
        default:
            show_error('404');
    }
} else {
    show_mainpage();
}
?>