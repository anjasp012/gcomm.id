<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitialDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experts = [
            ['name' => 'Eka Derianita', 'role' => 'Digital Marketing Specialist', 'image' => 'images/teams/eka.JPG'],
            ['name' => 'Maelia Sutanto', 'role' => 'Project Manager', 'image' => 'images/teams/maelia.JPG'],
            ['name' => 'Nurlaila', 'role' => 'Media Relation', 'image' => 'images/teams/nurlaila.JPG'],
            ['name' => 'Putra Amin', 'role' => 'Social Media Specialist', 'image' => 'images/teams/putra.JPG'],
            ['name' => 'Gibrar Pahlevi', 'role' => 'Event Specialist', 'image' => 'images/teams/gibrar.JPG'],
            ['name' => 'Zakiah Hasanah', 'role' => 'KOL Manager', 'image' => 'images/teams/zakiah.JPG'],
        ];

        foreach ($experts as $expert) {
            \App\Models\Expert::create($expert);
        }
    }
}
