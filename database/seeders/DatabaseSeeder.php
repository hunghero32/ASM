<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Banner;
use App\Models\Invoice;
use App\Models\Promote;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Category::factory(5)->create();
        Product::factory(20)->create();
        Cart::factory(10)->create();
        Banner::factory(10)->create();
        Invoice::factory(10)->create();
        Promote::factory(10)->create();
    }
}
