<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        $this->app->db()->createTable('Users', [
            'title' => 'varchar(255)',
            'content' => 'text',

        ]);
    }

    public function seed()
    {
    }

    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
}
