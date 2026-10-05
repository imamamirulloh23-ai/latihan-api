<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Category::create([
            'id' => 1,
            'name' => 'Computer'
        ]);

        Category::create([
            'id' => 2,
            'name' => 'Electronic'
        ]);

        Product::create([
            'name' => 'Monitor',
            'price' => 2000000,
            'stock' => 10,
            'description' => 'Monitor LG',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Mouse',
            'price' => 500000,
            'stock' => 10,
            'description' => 'Mouse LG',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Televisi',
            'price' => 4000000,
            'description' => 'TV LG 30',
            'stock' => 10,
            'category_id' => 2
        ]);
    }
}
