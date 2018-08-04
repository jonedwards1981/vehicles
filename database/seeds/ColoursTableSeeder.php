<?php

use Illuminate\Database\Seeder;

class ColoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colours')->insert([
                ['colour' => 'DarkGoldenRod',],
                ['colour' => 'WhiteSmoke',],
                ['colour' => 'NavajoWhite',],
                ['colour' => 'MediumSlateBlue',],
                ['colour' => 'PeachPuff',],
                ['colour' => 'DeepSkyBlue',],
                ['colour' => 'DarkSeaGreen',],
                ['colour' => 'Lavender',],
                ['colour' => 'Silver',],
                ['colour' => 'DodgerBlue',],
                ['colour' => 'Chocolate',],
                ['colour' => 'LightCyan',],
                ['colour' => 'Gold',],
                ['colour' => 'SlateGray',],
                ['colour' => 'Azure',],
                ['colour' => 'LightYellow',],
                ['colour' => 'RoyalBlue',],
                ['colour' => 'GreenYellow',],
                ['colour' => 'LavenderBlush',]
            ]);
    }
}
