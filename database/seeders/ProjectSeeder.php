<?php

namespace Database\Seeders;

use App\Models\Project;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();

            $project->author = $faker->firstNameMale();
            $project->title = $faker->catchPhrase();
            $project->slug = Str::slug($project->title);
            $project->link = $faker->catchPhrase();
            $project->date = $faker->dateTime();
            $project->description = $faker->paragraphs(1, true);

            $project->save();
        }
    }
}
