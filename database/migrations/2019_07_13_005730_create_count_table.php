<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('count', function (Blueprint $table) {
            $table->bigIncrements('id');//uniqueの特性もつ
            $table->bigInteger('user_id');//idと連結するカラム
            $table->string('res');//投票した選択肢含まれるカラム
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('count');
    }
}
