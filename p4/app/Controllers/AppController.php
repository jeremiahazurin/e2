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
        $app = ($this->app->db()->all('users'));
        return $this->app->view('list', ['app' => $app]);
    }

    public function details()
    {
        return $this->app->view('details');
    }
}
