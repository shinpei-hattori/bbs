<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'comment' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'user_id' => 1,
            'post_id' => 1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('comments')->insert($param);

        $param = [
            'comment' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'user_id' => 1,
            'post_id' => 1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('comments')->insert($param);

        $param = [
            'comment' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'user_id' => 1,
            'post_id' => 1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('comments')->insert($param);

        $param = [
            'comment' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'user_id' => 1,
            'post_id' => 1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('comments')->insert($param);

        $param = [
            'comment' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'user_id' => 1,
            'post_id' => 1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('comments')->insert($param);

        $param = [
            'comment' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'user_id' => 1,
            'post_id' => 1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('comments')->insert($param);

        $param = [
            'comment' => 'テストテストテストテストテストテストテストテストテストテストテストテスト',
            'user_id' => 1,
            'post_id' => 1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('comments')->insert($param);

        
    }
}
