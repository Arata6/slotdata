<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('areas')->insert([
                'name' => '北信エリア',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('areas')->insert([
                'name' => '中信エリア',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('areas')->insert([
                'name' => '東信エリア',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('areas')->insert([
                'name' => '南信エリア',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
    }
}
