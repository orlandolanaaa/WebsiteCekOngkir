<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app;
use App\Models\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $file = file_get_contents(base_path('/database/provinsi.json'));
        $data = json_decode($file,true);
        Province::insert($data);

    }
}
