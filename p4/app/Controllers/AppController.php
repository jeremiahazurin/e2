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
        $apps = ($this->app->db()->all('users'));
        return $this->app->view('list', ['apps' => $apps]);
    }

    public function details()
    {
        return $this->app->view('details');
    }
}
