<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board_user', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table->foreignId('board_id')->unique()->constrained('boards')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('user_id')->unique()->constrained('users')
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
        Schema::dropIfExists('board_user');
    }
}
