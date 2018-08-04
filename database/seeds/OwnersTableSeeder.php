<?php

use Illuminate\Database\Seeder;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
                ['name' => 'Arthur Emard', 'company' => 'Orn, Boyer and Feeney', 'profession' => 'Reservation Agent OR Transportation Ticket Agent',],
                ['name' => 'Dr. Randy Smith', 'company' => 'Hudson-Gerlach', 'profession' => 'Command Control Center Officer',],
                ['name' => 'Ida Hamill', 'company' => 'Skiles-Willms', 'profession' => 'MARCOM Director',],
                ['name' => 'Miss Libby Vandervort DVM', 'company' => 'Harvey-Torphy', 'profession' => 'Photographer',],
                ['name' => 'Loren Fadel', 'company' => 'Homenick PLC', 'profession' => 'Software Engineer',],
                ['name' => 'Loraine Kuhic', 'company' => 'Tillman, Hessel and Smitham', 'profession' => 'Fish Hatchery Manager',],
                ['name' => 'Ima Lueilwitz', 'company' => 'Barton Group', 'profession' => 'Nursing Aide',],
                ['name' => 'Yolanda Stracke', 'company' => 'Lehner-Casper', 'profession' => 'Electrical Engineering Technician',],
                ['name' => 'Joy Wintheiser', 'company' => 'West, Bartoletti and Langosh', 'profession' => 'Technical Director',],
                ['name' => 'Prof. Liliana Frami Jr.', 'company' => 'Nienow-Conroy', 'profession' => 'Personal Trainer',],
                ['name' => 'Dr. Virgil Leuschke', 'company' => 'Kuhlman-Wisozk', 'profession' => 'Poet OR Lyricist',],
                ['name' => 'Arlene Greenholt', 'company' => 'Cummings Inc', 'profession' => 'Emergency Medical Technician and Paramedic',],
                ['name' => 'Dr. Earnestine Osinski IV', 'company' => 'Collier-Dach', 'profession' => 'Captain',],
                ['name' => 'Faustino Homenick', 'company' => 'Marks and Sons', 'profession' => 'Advertising Manager OR Promotions Manager',],
                ['name' => 'Kitty Veum', 'company' => 'Stiedemann, Funk and Morar', 'profession' => 'Rail Car Repairer',],
                ['name' => 'Patsy Kulas', 'company' => 'Abshire, Towne and Heller', 'profession' => 'Parking Enforcement Worker',],
                ['name' => 'Carroll Feil Jr.', 'company' => 'Adams Inc', 'profession' => 'Computer Systems Analyst',],
                ['name' => 'Demond Runolfsdottir', 'company' => 'Feeney, Doyle and Hammes', 'profession' => 'Credit Analyst',],
                ['name' => 'Ms. Trycia Turner V', 'company' => 'Carroll Inc', 'profession' => 'Ship Captain',]
            ]);
    }
}
