<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'email' => 'taro@yamada.jp',
            'password' => Hash::make('password123'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'hanako',
            'email' => 'hanako@flower.jp',
            'password' => Hash::make('password123'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'sachiko',
            'email' => 'sachiko@happy.jp',
            'password' => Hash::make('password123'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('users')->insert($param);


    }
}
