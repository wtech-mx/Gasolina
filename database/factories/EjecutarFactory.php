<?php

namespace Database\Factories;

use App\Models\Ejecutar;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EjecutarFactory extends Factory
{
    protected $model = Ejecutar::class;

    public function definition()
    {
        return [
			'id_user' => $this->faker->name,
			'cliente' => $this->faker->name,
			'tanque' => $this->faker->name,
			'recibido' => $this->faker->name,
			'salida' => $this->faker->name,
			'operador' => $this->faker->name,
			'identificacion' => $this->faker->name,
			'producto' => $this->faker->name,
			'nota' => $this->faker->name,
			'cantidad' => $this->faker->name,
			'remision' => $this->faker->name,
			'factura' => $this->faker->name,
			'producto_tanqute' => $this->faker->name,
			'cantidad_antes' => $this->faker->name,
			'cantidad_despues' => $this->faker->name,
			'energia' => $this->faker->name,
			'suspender' => $this->faker->name,
			'trillada_antes' => $this->faker->name,
			'trillada_despues' => $this->faker->name,
        ];
    }
}
