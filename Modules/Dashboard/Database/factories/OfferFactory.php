<?php

namespace Modules\Dashboard\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OfferFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Dashboard\Entities\Offer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [


            'offer_image'=>$this->faker->image($dir = null, $width = 100, $height = 100,  $fullPath = true, $randomize = true),
            'start_date'=>$this->faker->dateTime,
            'end_date'=>$this->faker->dateTime,
            'status'=>1,

        ];
    }
}

