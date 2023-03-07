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
            'name' => 'Lainnya',
            'slug' => 'lainnya',
        ]);
        $location->save();

        $location = Location::create([
            'name' => 'Kota Yogyakarta',
            'slug' => 'kota-yogyakarta',
        ]);
        $location->save();

        $location = Location::create([
            'name' => 'Sleman',
            'slug' => 'sleman',
        ]);
        $location->save();

        $location = Location::create([
            'name' => 'Bantul',
            'slug' => 'bantul',
        ]);
        $location->save();

        $location = Location::create([
            'name' => 'Kulon Progo',
            'slug' => 'kulon-progo',
        ]);
        $location->save();

        $location = Location::create([
            'name' => 'Gunungkidul',
            'slug' => 'gunungkidul',
        ]);
        $location->save();
    }
}
