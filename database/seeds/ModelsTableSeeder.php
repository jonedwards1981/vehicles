<?php

use Illuminate\Database\Seeder;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('models')->insert([
                ['model' => '308',],
                ['model' => 'Leaf',],
                ['model' => 'Note',],
                ['model' => 'C Class',],
                ['model' => '500',],
                ['model' => 'Yaris',],
                ['model' => 'Aygo',],
                ['model' => 'SLK',],
                ['model' => 'CLK',],
                ['model' => 'A4',],
                ['model' => 'First',],
                ['model' => '5 Series',],
                ['model' => 'Jazz',],
                ['model' => 'Corsa',],
                ['model' => '3 Series',],
                ['model' => 'Up',]
            ]);
    }
}
