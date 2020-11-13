<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Board;


class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'due_date' => $this->faker->date(),
            'state' => $this->faker->word(),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
            'category_id' => Category::factory(),
            'board_id' => Board::factory(),
            'user_id' => User::factory(),

        ];
    }
}
