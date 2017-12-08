<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('logo_path');
            $table->string('description');
            $table->string('img_path');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('odnoklassniki');
            $table->string('tel');
            $table->string('whatsapp');
            $table->string('telegram');
            $table->string('viber');
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
        Schema::dropIfExists('apps');
    }
}
