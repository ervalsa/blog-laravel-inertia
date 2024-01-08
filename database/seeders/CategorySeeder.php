<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(['General', 'PHP', 'Laravel', 'JavaScript', 'Vue.js', 'React.js', 'Angular.js'])
            ->each(function ($category) {
                Category::create([
                    'name' => $category,
                    'slug' => str()->slug($category)
                ]);
            });
    }
}
