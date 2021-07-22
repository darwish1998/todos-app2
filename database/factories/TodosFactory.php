<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodosFactory extends Factory



{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \app\Models\Todo::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
              'name' => $this->faker->sentence(3),
              'description' =>$this->faker->paragraph(4),
              'completed'=>$this->faker->bolean(false)


        ];
    }
}
