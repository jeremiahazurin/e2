<?php
namespace App\Controllers;

use App\Products;

class ProductController extends Controller
{
    public function index()
    {
        $products = new Products('database/products.json');
        return 'Show all the products here...';
    }
}
