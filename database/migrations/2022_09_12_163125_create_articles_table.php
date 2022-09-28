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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('body');
            $table->string('img')->default('img/default.jpg');
            $table->unsignedBigInteger('user_id'); //colonna user_id che prende valore dell'altra tabella user
            $table->foreign('user_id')->references('id')->on('users'); //vincolo foreign key: table, creami una colonna con valore positivo intero, dopodichè assegna alla colonna un vincolo che farà riferimento alla colonna id nella tabella users
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
        Schema::dropIfExists('articles');
    }
};
