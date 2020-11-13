<?php

namespace Database\Factories;

use App\Models\Attachment;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Task;

class AttachmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attachment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'task_id' => Task::factory(),
            'file' => $this->faker->name,
            'filename' => $this->faker->name,
            'size' => $this->faker->numberBetween(1, 10),
            'type' => $this->faker->name,
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),



        ];


    }
}
