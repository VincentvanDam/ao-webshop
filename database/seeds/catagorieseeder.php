<?php

use Illuminate\Database\Seeder;

class catagorieseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            array('categories' => 'Herenzonnebrillen'),
            array( 'categories' => 'Dameszonnebrillen'),
            array('categories' => 'Kinderzonnebrillen'),
            array('categories' => 'Sportbrillen'),
            array('categories' => 'Nachtzonnebrillen'),
        ]);
    }
}
