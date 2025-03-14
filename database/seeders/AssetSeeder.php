<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AssetSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("assets")->insert([
            'asset_name' => "Fantasy", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
