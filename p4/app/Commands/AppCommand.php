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

        dump('Migration complete.');
    }

    public function seed()
    {
        # Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();

        # Use a loop to create 10 registrants
        for ($i = 0; $i < 10; $i++) {

    # Set up an app
            $app = [
        'title' => $faker->words(rand(2, 6), true),
        'content' => $faker->sentences(rand(3, 5), true),
    ];

            # Insert the app
            $this->app->db()->insert('users', $app);
        }
        dump('Seeds complete.');
    }

    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
}
