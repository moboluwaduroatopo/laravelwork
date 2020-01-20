<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->increments('id', 24001);
            $table->string('chapter_name');
            $table->string('chapter_address');
            $table->string('chapter_phone')->nullable();
            $table->string('chapter_email')->nullable();
            $table->string('chapter_abbreviation');
            $table->string('president_name');
            $table->string('president_email');
            $table->string('president_phone');
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
        Schema::dropIfExists('chapters');
    }
}
