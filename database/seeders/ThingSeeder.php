<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ThingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assets = DB::table("assets")->get(); 

        foreach ($assets as $asset) {
            DB::table("things")->insert([
                'asset_id' => $asset->id, 
                'thing_name' => Str::random(10), 
                'price' => rand(100, 10000) / 100,
                'qty' => rand(1, 50), // 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
