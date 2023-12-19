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
        Schema::create('news', function (Blueprint $table) {
            $table->id('post_id');
            $table->string('title', 255);
            $table->string('slug', 150)->unique();
            $table->string('status', 255);
            $table->string('image', 255);
            $table->text('excerpt');
            $table->text('content');
            $table->dateTime('posted_at');
            $table->tinyInteger('feature')->default(0);
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
        Schema::dropIfExists('news');
    }
};
