<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre_Largo'=> $this->faker->company,
            'Nombre_Corto'=> $this->faker->companySuffix,
            'Correo_electronico'=> $this->faker->companyEmail,
            'Telefono'=> $this->faker->ean8,
	        'NIT'=> $this->faker->ean8,
            'Solvencia'=> $this->faker->bankAccountNumber,
            'Constitucion'=> $this->faker->bankAccountNumber,
            'Plan_Pago'=> $this->faker->bankAccountNumber,
            'Carta'=> $this->faker->bankAccountNumber,
            'Socio_1'=> $this->faker->ean8,
            'Socio_2'=> $this->faker->ean8,
            'Socio_3'=> $this->faker->ean8,
            'Socio_4'=> $this->faker->ean8,
            'Socio_5'=> $this->faker->ean8
        ];
    }
}
