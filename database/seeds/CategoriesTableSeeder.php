<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    private $fields = ['website','web_app','mobile_app','api'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->fields as $field)
        {
            $role = Category::create([
                'name' => $field
            ]);
        }
    }
}
