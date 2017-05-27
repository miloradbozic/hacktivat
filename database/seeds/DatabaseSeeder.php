<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    protected $tables = [
        'story',
        'tour_segment',
        'tour',
        'rating'
    ];

    protected $seeders = [
        'StorySeeder',
        'TourSeeder',
        'TourSegmentSeeder',
        'RatingSeeder'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->cleanDatabase();

        foreach ($this->seeders as $seeder) {
            $this->call($seeder);
        }
    }


    private function cleanDatabase()
    {
        if (DB::getDriverName() == "mysql") {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
        }

        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }

        if (DB::getDriverName() == "mysql") {
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
    }
}
