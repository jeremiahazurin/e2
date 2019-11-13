<?php
namespace App\Controllers;

use App\Products;

class ProductController extends Controller
{
    public function index()
    {
        #I'm not sure why this doesn't return properly...
        $products = new Products($this->app->path('database/products.json'));
        return $this->app->view('products.index', ['products' => $products]);
        
        #...but this does when ^ is deleted
        return 'Show all the products here...';
    }
}
