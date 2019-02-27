<?php

use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$levels = [
		    	['name'=>'المستوى الأول أ'],
				['name'=>'المستوى الأول ب'],
				['name'=>'المستوى الأول ج'],
				['name'=>'المستوى الثاني أ'],
				['name'=>'المستوى الثاني ب'],
				['name'=>'المستوى الثاني ج'],
				['name'=>'المستوى الثالث أ'],
				['name'=>'المستوى الثالث ب'],
				['name'=>'المستوى الثالث ج'],
				['name'=>'المستوى الرابع أ'],
				['name'=>'المستوى الرابع ب'],
				['name'=>'المستوى الرابع ج'],
				['name'=>'المستوى الخامس أ'],
				['name'=>'المستوى الخامس ب'],
				['name'=>'المستوى الخامس ج'],

            ];
            
	foreach ($levels as $level) {
		App\Level::create($level);            	
	}


    }
}
