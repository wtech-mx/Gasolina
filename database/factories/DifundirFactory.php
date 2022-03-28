<?php

namespace Database\Factories;

use App\Models\Difundir;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DifundirFactory extends Factory
{
    protected $model = Difundir::class;

    public function definition()
    {
        return [
			'id_user' => $this->faker->name,
			'id_elemento' => $this->faker->name,
			'fecha' => $this->faker->name,
			'descripcion' => $this->faker->name,
			'tipo' => $this->faker->name,
			'inicial' => $this->faker->name,
			'final' => $this->faker->name,
        ];
    }
}
