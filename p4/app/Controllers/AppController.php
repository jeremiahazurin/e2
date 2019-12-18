<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $newTitle =$this->app->old('newTitle', null);
        return $this->app->view('index', ['newTitle' => $newTitle]);
    }

    public function saveNewApplicants()
    {
        $this->app->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $data = [
            'title' => $this->app->input('title'),
            'content' => $this->app->input('content'),
        ];
        $this->app->db()->insert('users', $data);

        $this->app->redirect('/', ['newTitle' => $data['title']]);
    }

    public function list()
    {
        $apps = ($this->app->db()->all('users'));
        return $this->app->view('list', ['apps' => $apps]);
    }

    public function details()
    {
        $userId = $this->app->param('id');

        $thisApp = $this->app->db()->findById('users', $userId);
        return $this->app->view('users', ['users' => $thisApp]);
    }
}
