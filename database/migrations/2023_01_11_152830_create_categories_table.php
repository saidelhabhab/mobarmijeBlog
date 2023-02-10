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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('slug');
            $table->mediumText('description');
            $table->String('image');
            $table->String('meta_title');
            $table->text('meta_description');
            $table->text('meta_keyword');
            $table->tinyInteger('navbar_status')->default('0');
            $table->tinyInteger('status')->default('0');
            $table->integer('create_by');
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
        Schema::dropIfExists('categories');
    }
};
