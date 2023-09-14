<?php

namespace Modules\Dashboard\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TestFactoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Dashboard\Entities\TestFactory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

           'name' => $this->faker->name(),
           'country'=>$this->faker->country(),
           'platform'=>$this->faker->word(),
           'comments'=>$this->faker->paragraph(),
           'image'=>$this->faker->image($dir = null, $width = 100, $height = 100,  $fullPath = true, $randomize = true)


        ];
    }
}

