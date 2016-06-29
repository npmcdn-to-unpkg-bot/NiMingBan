<?php

use Illuminate\Database\Seeder;
use \App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table("posts")->delete();

        // 批量生成100条讨论测试数据
        for($i=0; $i<100; $i++){
            $parent_post = Post::create([
                "content" => "post content" . $i,
            ]);
            for($j=0; $j<10; $j++){
                $parent_post->subposts()->create([
                    "content" => "post contet" . $i . "-" . $j
                ]);
            }
        }
    }
}
