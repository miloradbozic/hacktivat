<?php

use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tour')->insert([
            [
                'id' => 1,
                'name' => "Obilazak Pjevlja",
                'description' => "Jednodnevni obilazak grada Pjevlja, uključuje obilazak manastira Sveta Trojica i Husein-pašine džamije uz ručak u restoranu Ognjište.",
                'price' => 60,
                'author_id' => 3
            ],
            [
                'id' => 2,
                'name' => "Boravak u etno selu 'Milogora'",
                'description' => "Boravak u etno selu Milogora sa oblizakom srednjevekovnog grada Koznik i rafting rekom Tarom.",
                'price' => 110,
                'author_id' => 3
            ]
        ]);
    }
}
