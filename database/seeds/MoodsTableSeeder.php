<?php

use Illuminate\Database\Seeder;
use App\Mood;

class MoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moods = factory(Mood::class)->times(50)->make();

        Mood::insert($moods->toArray());
    }
}
