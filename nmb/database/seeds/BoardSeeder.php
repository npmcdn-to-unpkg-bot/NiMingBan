<?php

use Illuminate\Database\Seeder;
use \App\Board;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("boards")->delete();

        for ($i=0; $i < 5; $i++) {
            $parent_board = Board::create([
                "name" => "综合板块" . ($i+1),
                "order" => ($i+1)
            ]);
            for ($j=0; $j < 10; $j++) {
                $parent_board->subboards()->create([
                    "name" => "综合板块" . ($j+1+($i+1)*10),
                    "order" => ($j+1+($i+1)*10)
                ]);
            }
        }

    }
}
