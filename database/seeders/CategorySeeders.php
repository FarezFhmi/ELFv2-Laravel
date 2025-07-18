<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "name" => "Electronics",
        ]);
        Category::create([
            "name" => "Books",
        ]);
        Category::create([
            "name" => "Clothing",
        ]);
        Category::create([
            "name" => "Others",
        ]);
    }
}
