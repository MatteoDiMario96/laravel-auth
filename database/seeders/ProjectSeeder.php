<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // Devo prendere i miei progetti e seedarli nel db.
        for ($i=0; $i < 20; $i++) {
            $newProject = new Project();
            $newProject->name = $faker->firstName();
            $newProject->project_created_at = $faker->date();
            $newProject->languages_programming_used = implode(' ', $faker->words(3));
            $newProject->image_url = $faker->imageUrl(640, 480);
            $newProject->note = $faker->realText(200);
            $newProject->save();
        }

    }
}
