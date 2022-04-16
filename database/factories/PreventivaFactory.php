<?php

namespace Database\Factories;

use App\Models\Preventiva;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PreventivaFactory extends Factory
{
    protected $model = Preventiva::class;

    public function definition()
    {
        return [
			'descripcion' => $this->faker->name,
			'estatus' => $this->faker->name,
			'fecha' => $this->faker->name,
        ];
    }
}
