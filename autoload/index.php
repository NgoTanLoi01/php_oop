<?php

use App\Http\Controllers\HomeController; // Sửa thành Controllers

// require_once('app/Http/Controllers/HomeController.php');
require_once('autoload.php');

$homeController = new HomeController();

echo $homeController->index();
