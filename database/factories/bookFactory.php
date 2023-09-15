<?php

namespace Database\Factories;

use App\Models\book;
use Illuminate\Database\Eloquent\Factories\Factory;

// /**
//   @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>;
//  */
class bookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     */

    protected $model =book::class;
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('id_ID');
        return [
            //
            'judul' => $faker->sentence,
            'penulis'=> $faker->name,
            'harga'=>$faker->numberBetween(10000,100000),
            'tgl_terbit'=>$faker->date,
        ];
    }
}
