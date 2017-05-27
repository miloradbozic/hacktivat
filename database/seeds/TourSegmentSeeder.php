<?php

use Illuminate\Database\Seeder;

class TourSegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tour_segment')->insert([
            [
                'id' => 1,
                'segment_id' => 1,
                'description' => "Polazak na izlet. Okupljanje u Podgorici na Trgu Nezavisnosti u 10h",
                'time' => '2017-06-01 10:00',
                'lat' => 42.442015,
                'lon' => 19.262899,
                'story_id' => NULL
            ],
            [
                'id' => 2,
                'segment_id' => 1,
                'description' => "Obilazak manastira Sveta Trojica i biblioteke u sklopu manastira, zadrzavanje jedan sat",
                'time' => '2017-06-01 13:00',
                'lat' => 43.370480,
                'lon' => 19.358557,
                'story_id' => 2
            ],
            [
                'id' => 3,
                'segment_id' => 1,
                'description' => "Ručak u restoranu Ognjište. Moći ćete da probate sve specijalitete sa roštilja, očekuju vas kvalitetna hrana, ugodan i prijatan ambijent.",
                'time' => '2017-06-01 14:00',
                'lat' => 43.348092,
                'lon' => 19.323960,
                'story_id' => NULL
            ],
            [
                'id' => 4,
                'segment_id' => 1,
                'description' => "Obilazak Husein-pašine džamije. Husein-pašina džamija je jedan od najznačajnijih spomenika islamske arhitekture na ovim prostorima. Zadrzavanje jedan sat.",
                'time' => '2017-06-01 15:30',
                'lat' => 42.442015,
                'lon' => 19.262899,
                'story_id' => 3
            ],
            [   'id' => 5,
                'segment_id' => 1,
                'description' => "Povratak za Podgoricu nakon obilaska Husein-pašine džamije",
                'time' => '2017-06-01 16:30',
                'lat' => 42.442015,
                'lon' => 19.262899,
                'story_id' => NULL
            ],

            [
                'id' => 11,
                'segment_id' => 2,
                'description' => "Polazak na izlet. Okupljanje u Podgorici na Trgu Nezavisnosti",
                'time' => '2017-06-01 9:00',
                'lat' => 42.442015,
                'lon' => 19.262899,
                'story_id' => NULL
            ],
            [
                'id' => 12,
                'segment_id' => 2,
                'description' => "Obilazak etno sela Milogora na Pivskoj planini do popodnevnih časova",
                'time' => '2017-06-01 12:00',
                'lat' => 43.370480,
                'lon' => 19.358557,
                'story_id' => 2
            ],
            [   'id' => 13,
                'segment_id' => 2,
                'description' => "Polazak nazad, okupljanje ispred hotela",
                'time' => '2017-06-01 18:00',
                'lat' => 42.442015,
                'lon' => 19.262899,
                'story_id' => NULL
            ],
            [
                'id' => 14,
                'segment_id' => 2,
                'description' => "Večera u Nikšiću u restoranu Merak. Moći ćete da probate sve specijalitete sa roštilja, očekuju vas kvalitetna hrana, ugodan i prijatan ambijent.",
                'time' => '2017-06-01 19:00',
                'lat' => 43.348092,
                'lon' => 19.323960,
                'story_id' => NULL
            ],
            [
                'id' => 15,
                'segment_id' => 2,
                'description' => "Povratak za Podgoricu.",
                'time' => '2017-06-01 20:00',
                'lat' => 43.348092,
                'lon' => 19.323960,
                'story_id' => NULL
            ],
        ]);
    }
}
