<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
        	'name'			=> 'Super Admin',
    		'created_at'	=> now(),
    		'updated_at'	=> now(),
    		],
    		[
        	'name'			=> 'Administrator',
    		'created_at'	=> now(),
    		'updated_at'	=> now(),
    		],
        ];

        DB::table('roles')->truncate();
        DB::table('roles')->insert($data);
    }
}
