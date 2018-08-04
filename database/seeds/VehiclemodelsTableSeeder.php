<?php

use Illuminate\Database\Seeder;

class VehiclemodelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehiclemodels')->insert([
                ['vehiclemodel' => '308',],
                ['vehiclemodel' => 'Leaf',],
                ['vehiclemodel' => 'Note',],
                ['vehiclemodel' => 'C Class',],
                ['vehiclemodel' => '500',],
                ['vehiclemodel' => 'Yaris',],
                ['vehiclemodel' => 'Aygo',],
                ['vehiclemodel' => 'SLK',],
                ['vehiclemodel' => 'CLK',],
                ['vehiclemodel' => 'A4',],
                ['vehiclemodel' => 'First',],
                ['vehiclemodel' => '5 Series',],
                ['vehiclemodel' => 'Jazz',],
                ['vehiclemodel' => 'Corsa',],
                ['vehiclemodel' => '3 Series',],
                ['vehiclemodel' => 'Up',]
            ]);
    }
}
