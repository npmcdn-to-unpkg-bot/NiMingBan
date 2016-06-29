<?php

use Illuminate\Database\Seeder;
use \App\InviteCode;
use PUGX\Shortid\Shortid;

class InviteCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table("invite_codes")->delete();

        // 批量生成1000条邀请码
        for($i=0; $i<1000; $i++){
            $a_code = Shortid::generate(10);
            InviteCode::create([
                "code" => $a_code
            ]);
        }
    }
}
