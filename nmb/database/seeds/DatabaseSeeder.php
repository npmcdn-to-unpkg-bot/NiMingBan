<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(InviteCodeSeeder::class);
        // $this->call(PostSeeder::class);
        $this->call(BoardSeeder::class);
    }
}
