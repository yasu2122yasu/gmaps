<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

 use Illuminate\Support\Facades\DB;//　を追記
 use DateTime;//　を追記

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //postsテーブルに入れたいデータを記入
        DB::table('posts')->insert([
            'address' => '千葉県千葉市中央区市場町１−１',
            'body' => '千葉県庁です。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
