<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromozioniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promozioni')->insert([
            ['idPromoAb' => 'AB001', 'codOff' => 'O0001', 'dataScad' => '2023-07-25 00:00', 'percSconto' => 10, 'utente' => 'US0001'],
            ['idPromoAb' => 'AB002', 'codOff' => 'O0002', 'dataScad' => '2023-09-14 00:00', 'percSconto' => 10, 'utente' => 'US0003'],
            ['idPromoAb' => 'AB003', 'codOff' => 'O0003', 'dataScad' => '2023-10-19 00:00', 'percSconto' => 17, 'utente' => 'US0002'],
            ['idPromoAb' => 'AB004', 'codOff' => 'O0004', 'dataScad' => '2023-12-22 00:00', 'percSconto' => 20, 'utente' => 'US0004'],
            ['idPromoAb' => 'AB005', 'codOff' => 'O0005', 'dataScad' => '2023-02-06 00:00', 'percSconto' => 15, 'utente' => 'US0005']
        ]);
    }
}