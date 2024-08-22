<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Exception;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(public_path('json/country.json'));
        $countries = json_decode($json, true);
        DB::table('countries')->insert($countries);
        if (is_null($countries)) {
            throw new Exception("Failed to decode JSON or file is empty");
        }
    }
}