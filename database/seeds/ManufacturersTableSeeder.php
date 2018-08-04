<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacturers')->insert([
                ['manufacturer' => 'Citroen',],
                ['manufacturer' => 'VW'],
                ['manufacturer' => 'Renault',],
                ['manufacturer' => 'Nissan',],
                ['manufacturer' => 'Fiat',],
                ['manufacturer' => 'Mini',],
                ['manufacturer' => 'Honda',],
                ['manufacturer' => 'Audi',],
                ['manufacturer' => 'Peugeot',],
                ['manufacturer' => 'Mercedes',],
                ['manufacturer' => 'Vauxhall',]
            ]);
    }
}
