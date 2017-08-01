<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
        	'id'=>'3',
        	'name'=>'Found',
        	'jewelry_type_id'=>3,
        	'price'=>20,
        	'description'=>'Its a pair of earrings!',
        	'img_url'=>'placeholder',
        	]);
    }
}
