<?php

require 'config.php';

// Also spl_autoload_register (Take a look at it if you like)
//function __autoload($class) {
//	require LIBS . $class .".php";
//}
require LIBS.'Bootstrap.php';
require LIBS.'Controller.php';
require LIBS.'Model.php';
require LIBS.'View.php';
require LIBS.'Session.php';
//require LIBS.'Database.php';
require LIBS.'Hash.php';

$app = new Bootstrap();