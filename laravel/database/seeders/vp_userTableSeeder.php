<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class vp_userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr =[
            'user_name'=>'admin',
            'user_pass'=>md5(1),
            'user_level'=>1
        ];
        DB::table('vp_user')->insert($arr);
    }
}
