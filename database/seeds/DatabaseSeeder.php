<?php

use Database\Seeders\ArticleSeeder;
use Database\Seeders\ContactSeeder;
use Database\Seeders\IndoRegionSeeder;
use Database\Seeders\MainSkillSeeder;
use Database\Seeders\MitraSeeder;
use Database\Seeders\OrganisasiSeeder;
use Database\Seeders\PengalamanSeeder;
use Database\Seeders\PriceSeeder;
use Database\Seeders\ProvinceSeeder;
use Database\Seeders\RiwayatPendidikanSeeder;
use Database\Seeders\SertifikasiSeeder;
use Database\Seeders\SkillSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            IndoRegionSeeder::class,
            ArticleSeeder::class,
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            CategoriesTableSeeder::class,
            LocationsTableSeeder::class,
            CompaniesTableSeeder::class,
            JobsTableSeeder::class,
            PriceSeeder::class,
            MitraSeeder::class,
            MainSkillSeeder::class,
            KandidatSeeder::class,
            OrganisasiSeeder::class,
            PengalamanSeeder::class,
            RiwayatPendidikanSeeder::class,
            SertifikasiSeeder::class,
            SkillSeeder::class,
            ContactSeeder::class,
        ]);
    }
}