<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description', 200);
            $table->date('due_date');
            $table->string('state');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

           $table->foreignId('category_id')->unique()->constrained('categories')
               ->onUpdate('cascade')
               ->onDelete('cascade');

           $table->foreignId('board_id')->unique()->constrained('boards')
               ->onDelete('cascade')
               ->onUpdate('cascade');


            $table->foreignId('user_id')->unique()->constrained('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('tasks');
    }
}
