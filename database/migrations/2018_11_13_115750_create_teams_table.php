<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stadium_id');
            $table->integer('country_id');
            $table->string('full_name');
            $table->string('short_name');
            $table->string('nick_name');
            $table->string('website');
            $table->string('founded');
            $table->string('logo');
            $table->string('address');
            $table->string('social');
            $table->string('colours');
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
        Schema::dropIfExists('teams');
    }
}
