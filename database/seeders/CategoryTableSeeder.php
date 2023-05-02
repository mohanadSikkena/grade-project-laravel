<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category;
        $category->name ='cat 1';
        $category->save();

        $category = new Category;
        $category->name ='cat 2';
        $category->save();

        $category = new Category;
        $category->name ='cat 3';
        $category->save();

        $category = new Category;
        $category->name ='cat 4';
        $category->save();

        $category = new Category;
        $category->name ='cat 5';
        $category->save();

        $category = new Category;
        $category->name ='cat 6';
        $category->save();

        $category = new Category;
        $category->name ='cat 7';
        $category->save();

        $category = new Category;
        $category->name ='cat 8';
        $category->save();

        $category = new Category;
        $category->name ='cat 9';
        $category->save();

    }
}
