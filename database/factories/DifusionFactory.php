<?php

namespace Database\Factories;

use App\Models\Difusion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DifusionFactory extends Factory
{
    protected $model = Difusion::class;

    public function definition()
    {
        return [
			'descripcion' => $this->faker->name,
			'externa' => $this->faker->name,
			'interna' => $this->faker->name,
			'fecha_inicio' => $this->faker->name,
			'fecha_final' => $this->faker->name,
        ];
    }
}
