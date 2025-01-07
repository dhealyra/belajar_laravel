<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips Cepat Cari Uang', 'content'=>'lorem ipsum'],
            ['title'=>'Tips Cepat Menjadi Glow Up', 'content'=>'lorem ipsum'],
            ['title'=>'Tips Cepat Mencari Teman Sejati', 'content'=>'lorem ipsum']
        ];

        DB::table('posts')->insert($posts);
    }
}
