<?php
namespace App\Controllers;

use App\Products;

class ProductController extends Controller
{
    public function index()
    {
        return $this->app->view('products.index');
    }
}
