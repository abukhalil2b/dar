<?php

use Illuminate\Database\Seeder;

class FatherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fathers = [
            [
            'first_name'=>'الاب 1',
            'state_id'=>1,
        	],
            [
            'first_name'=>'الاب2',
            'state_id'=>1,
        	],
            [
            'first_name'=>'الاب3',
            'state_id'=>1,
        	],
            [
            'first_name'=>'الاب4',
            'state_id'=>1,
        	],
            [
            'first_name'=>'الاب5',
            'state_id'=>1,]
            ];

        foreach ($fathers as $father) {
            App\Father::create($father);   
        }
    }
}
