<?php

namespace App\Http\Controllers;

use App\Product;
use User;

class HomeController
{
    public function index()
    {
        $user = new User();
        $users = $user->getListUser();

        $product = new Product();
        $products = $product->listProduct();
        return $products;
    }
}
