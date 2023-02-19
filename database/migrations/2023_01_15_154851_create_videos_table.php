<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('channel_id')->constrained('channels');
            $table->foreignId('user_id')->constrained('users');
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('visibility', ['public', 'private'])->default('public');
            $table->string('thumbnail');
            $table->string('path');
            $table->string('slug');
            $table->string('duration');
            $table->integer('views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
};
