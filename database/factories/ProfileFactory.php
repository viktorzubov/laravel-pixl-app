<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $handle = fake()->unique()->userName();

        return [
            'user_id' => User::factory(),
            'display_name' => fake()->name(),
            'handle' => $handle,
            'bio' => fake()->sentence(3),
            'avatar_url' => 'https://dummyimage.com/90x90/eee/000',
            'cover_url' => 'https://dummyimage.com/1400x640/555/ECA749?text='.$handle,
        ];
    }
}
