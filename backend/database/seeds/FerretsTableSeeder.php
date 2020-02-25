<?php

use Illuminate\Database\Seeder;
use App\Ferret;
use Faker\Factory as Faker;

class FerretsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //一括削除

        //特定のデータを追加
        Ferret::create([
            'name' => 'Freddie',
            'birthdate' => '2019-11-04',
            'thumbnail' => '',
            'weight' => 1.5,
            'height' => 20,
            'type' => 1,
            'password' => Hash::make('testtest')
        ]);

        factory(Ferret::class, 10)
            ->create()
            ->each(function(App\Ferret $ferret) {
                $ferret->events()->saveMany(factory(App\Event::class, 10)->make());
                $ferret->foods()->saveMany(factory(App\Food::class, 10)->make());
                $ferret->foodRecords()->saveMany(factory(App\FoodRecord::class, 10)->make());
                $ferret->medications()->saveMany(factory(App\Medication::class, 10)->make());
                $ferret->poops()->saveMany(factory(App\Poop::class, 10)->make());
            });
    }
}
