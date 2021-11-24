<?php

namespace Database\Factories;

use App\Models\Tache;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class TacheFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tache::class;

    private static $i = 1;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $createAt = $this->faker->dateTimeInInterval(
            '-6 months', // startDate
            '+ 180 days', // interval
            date_default_timezone_get() // timezone
        );
        return [
            'id' => self::$i++,
            'expiration' => $this->faker->dateTimeInInterval(
                $createAt, // startDate
                $createAt->diff(new DateTime('now'))->format("%R%a days"), // interval
                date_default_timezone_get() // timezone
            )->format("Y-m-d"),
            'categorie' => $this->faker->randomElement($array = array('Urgent', 'A Faire', 'Optionnel')),
            'description' => $this->faker->paragraph,
            'accomplie' => $this->faker->randomElement($array = array('O', 'N')),
            'created_at' => $createAt,
            'updated_at' => $this->faker->dateTimeInInterval(
                $createAt, // startDate
                $createAt->diff(new DateTime('now'))->format("%R%a days"), // interval
                date_default_timezone_get() // timezone
            ),
        ];
    }
}
