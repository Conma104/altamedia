<?php

/*
App : chứa code chạy từ người dùng
Public:  chứa thông tin như html, css, js
=> index.php : chạy ứng dụng
config: chứa data, web, session
routes: quản lý đường link từ trình duyệt gọi vào : web và api
System   : bọ core của fw

*/
// loading Autoload
require_once __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/../System/bridge.php';


echo '<br>';

new  \System\Core\App();


?>