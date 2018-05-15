<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            array('name'=>'Herenbrillen'),
            array('name'=>'Vrouwenbrillen'),
            array('name'=>'Kinderbrillen'),
            array('name'=>'Sportbrillen'),
            array('name'=>'Nachtbrillen'),
        ]);
    }
}
