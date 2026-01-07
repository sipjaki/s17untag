<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fundraising_withdrawal>
 */
class FundraisingWithdrawalsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fundraising_id' => mt_rand(1, 3),
            'fundraiser_id' => mt_rand(1, 3),
            'has_received' => $this->faker->boolean,
            'has_set' => $this->faker->boolean,
            'amount_requested' => $this->faker->numberBetween(1000, 1000000),
            'amount_received' => $this->faker->numberBetween(0, 1000000),
            'bank_name' => $this->faker->company,
            'bank_account_name' => $this->faker->name,
            'bank_account_number' => $this->faker->bankAccountNumber,
            'proof' => $this->faker->imageUrl(640, 480, 'business', true, 'Faker'),
            'created_at' => now(),
            'updated_at' => now(),
            //
        ];
    }
}
