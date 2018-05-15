<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            array('name'=>'2083 montuur' , 'price' => '14.99','speed'=>'100 km/h'),
            array('name'=>'Het laskap montuur', 'price'=>'19.99','speed'=>'120 km/h'),
            array('name'=>'Flitsend montuur', 'price'=>'9.99','speed'=>'150 km/h'),
            array('name'=>'Robocop montuur', 'price'=>'14.99','speed'=>'200 km/h'),
            array('name'=>'De vlugge meid', 'price'=>'9.99','speed'=>'40 km/h'),
        ]);
    }
}