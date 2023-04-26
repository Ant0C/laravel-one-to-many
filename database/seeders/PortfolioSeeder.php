<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10 ; $i++){
            $project = new Portfolio();

            $project->name = $faker->sentence(10);
            $project->customer = $faker->unique()->sentence(5);
            $project->description = $faker->text(500);
            $project->slug = Str::slug($project->name,'-');
            $project->url = $faker->url();

            $project->save();
        }
    }
}
