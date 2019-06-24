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
        $data = [
        	'name'			=> 'Suryo Widiyanto',
    		'email'			=> 'suryowidiyantogm@gmail.com',
            'password'      => bcrypt('123'),
            'role_id'		=> 1,
            'photo'         => 'public/users_img/123.png',
    		'created_at'	=> now(),
    		'updated_at'	=> now(),
        ];

        DB::table('users')->truncate();
        DB::table('users')->insert($data);
    }
}
