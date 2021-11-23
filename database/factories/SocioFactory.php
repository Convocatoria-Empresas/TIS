<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SocioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Codigo'=> $this->faker->ean8,
            'Nombre'=> $this->faker->name,
            'Correo'=> $this->faker->freeEmail,
            'Empresa'=>$this->faker->company,
            'Rol'=>$this->faker->jobTitle,
        ];
    }
}
