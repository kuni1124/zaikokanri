<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZaikokanrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zaikokanris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nameid');
            $table->string('name');
            $table->string('kategory');
            $table->string('gyousharname');
            $table->integer('tanka');
            $table->integer('siire');
            $table->integer('siyou');
            $table->integer('zaiko');
            $table->integer('goukei');
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
        Schema::dropIfExists('zaikokanris');
    }
}
