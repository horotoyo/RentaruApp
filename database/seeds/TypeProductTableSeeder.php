<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data   = [
            [
                'name'          => 'DSLR',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'SLR',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Mirrorless',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Microphone',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ];
        DB::table('type_products')->truncate();
        DB::table('type_products')->insert($data);
    }
}
