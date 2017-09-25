<?php

use App\Category;
use App\Project;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Project::class,5)->create()->each(function ($project){
            $category_id = Category::inRandomOrder()->first()->id;
            $project->categories()->attach($category_id,['created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
         });
    }
}
