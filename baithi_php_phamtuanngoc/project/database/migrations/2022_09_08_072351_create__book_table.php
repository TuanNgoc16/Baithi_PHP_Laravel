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
        Schema::create('_book', function (Blueprint $table) {
            $table->id();
            $table->integer('bookid');
            $table->integer('authorid');
            $table->string('title');
            $table->string('ISBN');
            $table->smallInteger('pub_year');
            $table->tinyInteger('available');
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
        Schema::dropIfExists('_book');
    }
};
