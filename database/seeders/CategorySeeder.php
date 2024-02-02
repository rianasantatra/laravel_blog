<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = collect(['Livre', 'Jeux Video', 'Film']);

        $categories->each(fn ($category) => Category::create([
            'name' => $category,
            'slug' => Str::slug($category)
        ]));
    }
}
