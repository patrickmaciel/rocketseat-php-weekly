<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use function htmlentities;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => collect(fake()->word(5))->join(' '),
            'description' => $this->generateRandomHtml(),
            'ends_at' => fake()->dateTimeBetween('now', '+ 3 days'),
            'status' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElements(['nodejs', 'react', 'javascript', 'vite', 'nextjs'], random_int(1, 5)),
            'created_by' => User::factory()
        ];
    }

    private function generateRandomHtml()
    {
        // Example HTML structure simulating a blog post
        $html = '<div>';
        $html .= '<h2>' . $this->faker->sentence . '</h2>';
        $html .= '<p>' . $this->faker->paragraphs(3, true) . '</p>';
        $html .= '<ul>';

        // Generate random list items
        for ($i = 0; $i < rand(3, 6); $i++) {
            $html .= '<li>' . $this->faker->sentence . '</li>';
        }
        $html .= '</ul>';

        // Adding a random image
        $html .= '<img src="' . $this->faker->imageUrl(800, 600, 'nature', true, 'Faker') . '" alt="Random Image">';
        $html .= '</div>';

        return $html;
    }
}
