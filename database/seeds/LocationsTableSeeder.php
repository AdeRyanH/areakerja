<?php

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $location = Location::create([
            'name' => 'Magelang',
            'slug' => 'magelang',
            'province_id' => '2',
        ]);
        $location->save();

        $location = Location::create([
            'name' => 'Kota Yogyakarta',
            'slug' => 'kota-yogyakarta',
            'province_id' => '1',
        ]);
        $location->save();

        $location = Location::create([
            'name' => 'Sleman',
            'slug' => 'sleman',
            'province_id' => '1',
        ]);
        $location->save();

        $location = Location::create([
            'name' => 'Bantul',
            'slug' => 'bantul',
            'province_id' => '1',
        ]);
        $location->save();

        $location = Location::create([
            'name' => 'Kulon Progo',
            'slug' => 'kulon-progo',
            'province_id' => '1',
        ]);
        $location->save();

        $location = Location::create([
            'name' => 'Gunungkidul',
            'slug' => 'gunungkidul',
            'province_id' => '1',
        ]);
        $location->save();

        $location = Location::create([
            'name' => 'Salatiga',
            'slug' => 'salatiga',
            'province_id' => '2',
        ]);
        $location->save();
        
        $location = Location::create([
            'name' => 'Tegal',
            'slug' => 'tegal',
            'province_id' => '2',
        ]);
        $location->save();

        $location = Location::create([
            'name' => 'Madiun',
            'slug' => 'madiun',
            'province_id' => '3',
        ]);
        $location->save();

        $location = Location::create([
            'name' => 'Ponorogo',
            'slug' => 'ponorogo',
            'province_id' => '3',
        ]);
        $location->save();
    }
}