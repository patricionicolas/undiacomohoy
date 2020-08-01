<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\User;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();     
            $table->foreign('user_id')->references('id')->on('users');   //id_user
            $table->date('fecha');                                       //fecha
            $table->longText('titulo');                                  //titulo
            $table->longText('descripcion');                             //descripcion
            $table->longText('url');                                     //url
            $table->boolean('publico');                                  //publico
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
        Schema::dropIfExists('post');
    }
}
