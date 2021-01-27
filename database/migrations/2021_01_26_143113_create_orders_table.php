<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('id_uzytkownika')->unsigned();
                $table->foreign('id_uzytkownika')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
                $table->string('imie');
                $table->string('nazwisko');
                $table->string('mail');
                $table->string('adres');
                $table->string('nr_domu');
                $table->string('kod_pocztowy');
                $table->string('telefon');
                $table->string('www');
                $table->string('opcje');
                $table->date('data');
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
        Schema::dropIfExists('orders');
    }
}
