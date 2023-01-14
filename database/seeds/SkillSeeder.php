<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill = Skill::create([
            'nama'       => 'Bahasa Pemrograman Java',
            'tingkat'    => '70',
            'idKandidat' => '1',
        ]);
        $skill->save();

        $skill = Skill::create([
            'nama'       => 'Bahasa Pemrograman PHP',
            'tingkat'    => '90',
            'idKandidat' => '1',
        ]);
        $skill->save();

        $skill = Skill::create([
            'nama'       => 'Programming',
            'tingkat'    => '70',
            'idKandidat' => '2',
        ]);
        $skill->save();

        $skill = Skill::create([
            'nama'       => 'Database Management System',
            'tingkat'    => '70',
            'idKandidat' => '2',
        ]);
        $skill->save();

        $skill = Skill::create([
            'nama'       => 'Public Speaking',
            'tingkat'    => '90',
            'idKandidat' => '3',
        ]);
        $skill->save();

        $skill = Skill::create([
            'nama'       => 'Multitasking',
            'tingkat'    => '90',
            'idKandidat' => '3',
        ]);
        $skill->save();

        $skill = Skill::create([
            'nama'       => 'Perangkat Lunak Pengolahan Kata',
            'tingkat'    => '100',
            'idKandidat' => '3',
        ]);
        $skill->save();

        $skill = Skill::create([
            'nama'       => 'Bahasa Pemograman Java',
            'tingkat'    => '90',
            'idKandidat' => '4',
        ]);
        $skill->save();

        $skill = Skill::create([
            'nama'       => 'Flutter',
            'tingkat'    => '70',
            'idKandidat' => '4',
        ]);
        $skill->save();
    }
}
