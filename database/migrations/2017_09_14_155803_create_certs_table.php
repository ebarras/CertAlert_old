<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('expiration_date');
            $table->string('url', 2048);
            $table->dateTime('last_email')->nullable();
            $table->string('incident', 45)->nullable();
            $table->timestamps();
            $table->integer('agreement_id')->unsigned();
            $table->foreign('agreement_id')->references('id')->on('agreements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certs');
    }
}
