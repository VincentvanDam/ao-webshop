<?php

use Illuminate\Database\Seeder;

class Categories_productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_products')->insert([
            'categories_id' => "1",
            'products_id' => "1",
        ]);

        DB::table('categories_products')->insert([
            'categories_id' => "1",
            'products_id' => "2",
        ]);

        DB::table('categories_products')->insert([
            'categories_id' => "4",
            'products_id' => "3",
        ]);

        DB::table('categories_products')->insert([
            'categories_id' => "1",
            'products_id' => "4",
        ]);

        DB::table('categories_products')->insert([
            'categories_id' => "2",
            'products_id' => "5",
        ]);
    }
}
