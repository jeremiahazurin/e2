<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        return $this->app->view('index');
    }

    public function list()
    {
        return $this->app->view('list');
    }

    public function details()
    {
        return $this->app->view('details');
    }
}
