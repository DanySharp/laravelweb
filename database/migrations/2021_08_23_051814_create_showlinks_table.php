<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowlinksTable extends Migration
{

    public function up()
    {
        Schema::create('showlinks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('url_title');
            $table->string('url_link');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('showlinks');
    }
}
