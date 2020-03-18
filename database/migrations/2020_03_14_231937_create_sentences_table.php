<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sentences', function (Blueprint $table) {
            $table->id();
            $table->text('translation');
            $table->text('sentence');
            $table->string('word');
            $table->string('class1');
            $table->string('translate1');
            $table->string('class2');
            $table->string('translate2');
            $table->string('level');
            $table->boolean('important');
            $table->string('source');
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
        Schema::dropIfExists('sentences');
    }
}
