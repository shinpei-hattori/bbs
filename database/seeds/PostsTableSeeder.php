<?php

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
        $param = [
            'title' => '掃除機',
            'user_id' => 1,
            'cat_name' => 'ゲーム',
            'content' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'title' => '好きな人がいます',
            'user_id' => 1,
            'cat_name' => '恋愛',
            'content' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'title' => 'タイ旅行の楽しみ方',
            'user_id' => 1,
            'cat_name' => '旅行',
            'content' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'title' => 'FFについて',
            'user_id' => 2,
            'cat_name' => 'ゲーム',
            'content' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'title' => 'iphpneについて',
            'user_id' => 2,
            'cat_name' => '機械',
            'content' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'title' => 'フランス旅行の楽しみ方',
            'user_id' => 2,
            'cat_name' => '旅行',
            'content' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'title' => 'サッカーについて',
            'user_id' => 3,
            'cat_name' => 'スポーツ',
            'content' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'title' => 'プレゼン力の鍛え方',
            'user_id' => 3,
            'cat_name' => '仕事',
            'content' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'title' => 'イギリス旅行の楽しみ方',
            'user_id' => 3,
            'cat_name' => '旅行',
            'content' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('posts')->insert($param);
    }
}
