<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferteSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('offerte')->insert([
            ['oggettoOff' => 'Coupon che garantisce il 20% di sconto sullo schermo HUAWEI MateView GT 27 Monitor Ultra-Wide con elevata frequenza di aggiornamento.', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-05-13', 'luogoFruiz' => 'Ancona', 'nomeOff' => '20% di sconto', 'logoOff' => 'schermo3huawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => "Coupon che garantisce il 10% di sconto sull'orologio HUAWEI WATCH 3 PRO", 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-13', 'luogoFruiz' => 'Ancona', 'nomeOff' => '10% di sconto', 'logoOff' => 'orologiohuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 30% di sconto sul telefono HUAWEI NOVA 3i Huawei P20 Pro', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-11-13', 'luogoFruiz' => 'Ancona', 'nomeOff' => '30% di sconto', 'logoOff' => 'telefonohuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 40% di sconto sul computer HUAWEI MateBook X Pro 2021', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-25', 'luogoFruiz' => 'Ancona', 'nomeOff' => '40% di sconto', 'logoOff' => 'computerhuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 50% di sconto sul telefono HUAWEI nova 2 Plus', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-30', 'luogoFruiz' => 'Ancona', 'nomeOff' => '50% di sconto', 'logoOff' => 'telefonihuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 20% di sconto sullo schermo HUAWEI MateView 23', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-10-21', 'luogoFruiz' => 'Ancona', 'nomeOff' => '20% di sconto', 'logoOff' => 'mateviewschermohuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 30% di sconto sul telefono HUAWEI P60 Pro Black 12GB+512GB', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-11', 'luogoFruiz' => 'Ancona', 'nomeOff' => '30% di sconto', 'logoOff' => 'huaweitelefono4.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => "Coupon che garantisce il 20% di sconto sull'orologio HUAWEI WATCH Ultimate 48mm Voyage Blue", 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-25', 'luogoFruiz' => 'Ancona', 'nomeOff' => '20% di sconto', 'logoOff' => 'orologi3huawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 10% di sconto sul telefono HUAWEI P20 Lite', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-04-20', 'luogoFruiz' => 'Ancona', 'nomeOff' => '10% di sconto', 'logoOff' => 'telefono2huawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 50% di sconto sullo schermo HUAWEI MateView GT 34-inch', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-07-17', 'luogoFruiz' => 'Ancona', 'nomeOff' => '50% di sconto', 'logoOff' => 'schermohuawei.png', 'stato' => '1', 'azienda' => '1', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 10% di sconto su tutti gli iPhone', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-05-20', 'luogoFruiz' => 'Ancona', 'nomeOff' => '10% di sconto', 'logoOff' => 'appleiphone14.png', 'stato' => '1', 'azienda' => '5', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 15% di sconto su tutti i Macbook', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-07-21', 'luogoFruiz' => 'Ancona', 'nomeOff' => '15% di sconto', 'logoOff' => 'applemacbookpro.png', 'stato' => '1', 'azienda' => '5', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 25% di sconto su tutti i laptop Dell', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-25', 'luogoFruiz' => 'Roma', 'nomeOff' => '25% di sconto', 'logoOff' => 'delllaptop.png', 'stato' => '1', 'azienda' => '9', 'utente' => '10'],
            ['oggettoOff' => 'Coupon che garantisce il 5% di sconto su tutte le lavatrici lg', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-07-21', 'luogoFruiz' => 'Ancona', 'nomeOff' => '5% di sconto', 'logoOff' => 'lglavatrice.png', 'stato' => '1', 'azienda' => '7', 'utente' => '10'],
            ['oggettoOff' => 'Coupon che garantisce il 17% di sconto su tutti i monitor ultragear di LG', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-10-05', 'luogoFruiz' => 'Milano', 'nomeOff' => '17% di sconto', 'logoOff' => 'lgultragearoled.png', 'stato' => '1', 'azienda' => '7', 'utente' => '10'],
            ['oggettoOff' => 'Coupon che garantisce il 3x2 su tutti i telefoni Nokia 4310', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-05', 'luogoFruiz' => 'Torino', 'nomeOff' => 'offerta 3x2', 'logoOff' => 'nokia4310.png', 'stato' => '1', 'azienda' => '12', 'utente' => '8'],
            ['oggettoOff' => 'Coupon che garantisce il 7% di sconto sul cellulare Oppo find x 3 pro', 'modalita' => 'In negozio', 'tempoFruiz' => '2024-12-05', 'luogoFruiz' => 'Macerata', 'nomeOff' => '7% di sconto', 'logoOff' => 'oppofindx3pro.png', 'stato' => '1', 'azienda' => '13', 'utente' => '8'],
            ['oggettoOff' => 'Coupon che garantisce il 12% di sconto su tutta la gamma xiaomi 13', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-07', 'luogoFruiz' => 'Torino', 'nomeOff' => '12% di sconto', 'logoOff' => 'xiaomi13.png', 'stato' => '1', 'azienda' => '14', 'utente' => '8'],
            ['oggettoOff' => 'Coupon che garantisce il 21% di sconto su tutta la gamma xiaomi 12', 'modalita' => 'In negozio', 'tempoFruiz' => '2024-01-05', 'luogoFruiz' => 'Bologna', 'nomeOff' => '21% di sconto', 'logoOff' => 'xiaomi12pro.png', 'stato' => '1', 'azienda' => '14', 'utente' => '8'],  
            ['oggettoOff' => 'Coupon che garantisce il 35% di sconto sul kindle Amazon', 'modalita' => 'Online', 'tempoFruiz' => '2023-09-17', 'luogoFruiz' => 'Store online', 'nomeOff' => '35% di sconto', 'logoOff' => 'amazonkindle.png','stato'=>'1','azienda' => '11', 'utente' => '6'],
            ['oggettoOff' => 'Coupon che garantisce il 15% di sconto sul prodotto fireTV di Amazon', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-03-17', 'luogoFruiz' => 'Store online', 'nomeOff' => '15% di sconto', 'logoOff' => 'amazonfiretv.png','stato'=>'1','azienda' => '11', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 50% di sconto su tutti i laptop Asus', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-10-22', 'luogoFruiz' => 'In tutti i negozi di Ancona', 'nomeOff' => '50% di sconto', 'logoOff' => 'asuslaptop.png','stato'=>'1','azienda' => '4', 'utente' => '8'],
            ['oggettoOff' => 'Coupon che garantisce il 20% di sconto su tutti i laptop Asus ROG', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-02', 'luogoFruiz' => 'In tutti gli store Asus nazionali', 'nomeOff' => '20% di sconto', 'logoOff' => 'asusroglaptop.png','stato'=>'1','azienda' => '4', 'utente' => '9'],
            ['oggettoOff' => 'Coupon che garantisce il 20% di sconto su tutta la gamma Pixel7 di Google', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-03', 'luogoFruiz' => 'In tutti gli store Google nazionali', 'nomeOff' => '20% di sconto', 'logoOff' => 'googlepixel7.png','stato'=>'1','azienda' => '10', 'utente' => '9'],
            ['oggettoOff' => 'Coupon che garantisce il 10% di sconto sulla gamma Pixel7 Pro di Google', 'modalita' => 'Online', 'tempoFruiz' => '2023-08-02', 'luogoFruiz' => 'Store online ufficiale Google', 'nomeOff' => '10% di sconto', 'logoOff' => 'googlepixel7pro.png','stato'=>'1','azienda' => '10', 'utente' => '10'],
            ['oggettoOff' => 'Coupon che garantisce il 10% di sconto su tutti i monitor HP', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-12', 'luogoFruiz' => 'In tutti i negozi riconosciuti Hp', 'nomeOff' => '10% di sconto', 'logoOff' => 'hpmonitor.png','stato'=>'1','azienda' => '3', 'utente' => '6'],
            ['oggettoOff' => 'Coupon che garantisce il 23% di sconto su tutti i laptop Hp Pavilion', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-02-22', 'luogoFruiz' => 'In tutti i negozi riconosciuti Hp', 'nomeOff' => '23% di sconto', 'logoOff' => 'hppavilion15.png','stato'=>'1','azienda' => '3', 'utente' => '7'],
            ['oggettoOff' => 'Coupon che garantisce il 18% di sconto su tutti gli smartphone Motorola', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-18', 'luogoFruiz' => 'In tutti i negozi riconosciuti Motorola', 'nomeOff' => '18% di sconto', 'logoOff' => 'motorolarazr.png','stato'=>'1','azienda' => '8', 'utente' => '8'],
            ['oggettoOff' => 'Coupon che garantisce il 13% di sconto su tutti gli smartphone Oneplus', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-12-18', 'luogoFruiz' => 'In tutti i negozi della regione Marche', 'nomeOff' => '13% di sconto', 'logoOff' => 'oneplus11.png','stato'=>'1','azienda' => '6', 'utente' => '9'],
            ['oggettoOff' => 'Coupon che garantisce il 19% di sconto su tutta la gamma Oneplus Nord', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-09-18', 'luogoFruiz' => 'In tutti i negozi della provincia di Milano', 'nomeOff' => '19% di sconto', 'logoOff' => 'oneplusnord2.png','stato'=>'1','azienda' => '6', 'utente' => '10'],
            ['oggettoOff' => 'Coupon che garantisce il 24% di sconto su tutti gli smartphone Samsung', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-10-18', 'luogoFruiz' => 'In tutti i negozi di elettronica', 'nomeOff' => '24% di sconto', 'logoOff' => 'samsungs23ultra.png','stato'=>'1','azienda' => '2', 'utente' => '6'],
            ['oggettoOff' => 'Coupon che garantisce il 30% di sconto su tutti gli smartwatch Samsung', 'modalita' => 'In negozio', 'tempoFruiz' => '2023-07-28', 'luogoFruiz' => 'In tutti i negozi di elettronica', 'nomeOff' => '30% di sconto', 'logoOff' => 'samsungwatch4.png','stato'=>'1','azienda' => '2', 'utente' => '7'],
        ]);
    }

}
