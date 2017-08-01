<?php

use Illuminate\Database\Seeder;

class JewelryTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
        	'id'=>'1',
        	'name'=>'bracelet',
        	'description'=>'A piece of jewelry that wraps around your wrist.'
        	]);
         DB::table('types')->insert([
        	'id'=>'2',
        	'name'=>'necklace',
        	'description'=>'A piece of jewelry that hangs oh so subtely around your neck.'
        	]);
          DB::table('types')->insert([
        	'id'=>'3',
        	'name'=>'earrings',
        	'description'=>'A piece of jewelry that dangles from your earlobes.'
        	]);
    }
}
