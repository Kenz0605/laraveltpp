<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->binary('file');
            $table->string('filename');
            $table->integer('size');
            $table->string('type');
            $table->timestamp("created_at");
            $table->timestamp("updated_at");

           $table->foreignId('user_id')->unique()->constrained('users')
               ->onUpdate('cascade')
               ->onDelete('cascade');
           $table->foreignId('task_id')->unique()->constrained('tasks')
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
        Schema::dropIfExists('attachments');
    }
}
