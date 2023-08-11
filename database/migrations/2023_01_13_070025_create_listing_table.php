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
        Schema::create('listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('user_id');
            $table->string('title');
            $table->string('tag_line');
            $table->string('description');
            $table->text('logo');
            $table->text('cover');
            $table->text('gallery');
            $table->string('email');
            $table->string('phone');
            $table->string('website');
            $table->string('social');
            $table->string('url');
            $table->string('timezone');
            $table->string('location');
            $table->integer('category_id');
            $table->string('tags');
            $table->string('range');
            $table->string('product');
            $table->string('jobs');
            $table->string('events');
            $table->string('related');
            $table->date('from_date');
            $table->date('to_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listing');
    }
};
