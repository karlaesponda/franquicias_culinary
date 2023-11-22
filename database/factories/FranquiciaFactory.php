<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Franquicia>
 */
class FranquiciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->realText(55);
        return [
            'title' => $title,
            'slug' => Str::slug($title), 
            'nombre_restaurante' => $this->faker->company,
            'razon_social' => $this->faker->company,
            'rfc' => $this->faker->regexify('[A-Z]{4}\d{6}[A-Z0-9]{3}'),
            'anios_operacion' => $this->faker->numberBetween(1, 50),
            'num_sucursales' => $this->faker->numberBetween(1, 100),
            'marca_registrada' => $this->faker->boolean,
            'costo_marca' => $this->faker->randomFloat(2, 1000, 100000),
            'logotipo' => 'franquicias/'.$this->faker->image('public/storage/franquicias', 700, 575, null, false),
            'tipo_restaurante' => $this->faker->word,
            'website' => $this->faker->url,
            'facebook' => $this->faker->url,
            'instagram' => $this->faker->url,
            'descripcion' => $this->faker->sentence,
            'historia' => $this->faker->paragraph,
            'mision' => $this->faker->text(150),
            'vision' => $this->faker->text(150),
            'estandar_calidad' => $this->faker->paragraph,
            'mercado_meta' => $this->faker->paragraph,
            'menu' => $this->faker->text,
            'inf_financiera' => $this->faker->text,
            'soporte' => $this->faker->paragraph,
            'asesoramiento_ubi' => $this->faker->paragraph,
            'diseno_tienda' => $this->faker->paragraph,
            'marketing' => $this->faker->paragraph,
            'entrenamiento' => $this->faker->paragraph,
            'preparacion' => $this->faker->paragraph,
            'servicio_cliente' => $this->faker->paragraph,
            'gestion' => $this->faker->paragraph,
            'tecnologia' => $this->faker->paragraph,
            'email_1' => $this->faker->text,
            'email_2' => $this->faker->text,
            'numero_contacto_1' => $this->faker->numberBetween(1, 10),
            'numero_contacto_2' => $this->faker->numberBetween(1, 10),
            'user_id' => User::all()->random()->id,
        ];
    }
}
