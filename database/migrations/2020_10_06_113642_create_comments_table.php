<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->longText('text', 200);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table->foreignId('user_id')->unique()->constrained('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('task_id')->unique()->constrained('tasks')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
