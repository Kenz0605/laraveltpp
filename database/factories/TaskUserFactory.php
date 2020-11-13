<?php

namespace Database\Factories;

use App\Models\TaskUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Task;

class TaskUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TaskUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
            'user_id' => User::factory(),
            'task_id' => Task::factory(),

        ];
    }
}
