<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
            'name' => 'Teknologi',
            'slug' => 'teknologi',
        ]);
        $category->save();

        $category = Category::create([
            'name' => 'Kesehatan',
            'slug' => 'kesehatan',
        ]);
        $category->save();

        $category = Category::create([
            'name' => 'Multimedia',
            'slug' => 'multimedia',
        ]);
        $category->save();

        $category = Category::create([
            'name' => 'Adminitrasi',
            'slug' => 'adminitrasi',
        ]);
        $category->save();

        $category = Category::create([
            'name' => 'Pemasaran',
            'slug' => 'pemasaran',
        ]);
        $category->save();
    }
}
