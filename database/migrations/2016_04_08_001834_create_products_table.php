<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('U_id');
            $table->string('contacts');
            $table->integer('telephone');
            $table->integer('phone');
            $table->string('email');
            $table->integer('QQnum');
            $table->string('market_time');
            $table->string('address');
            $table->string('type');
            $table->string('price');
            $table->text('detail');
            $table->integer('relationship');
            $table->timestamps();
        });
        Schema::table('products', function(Blueprint $table){
            $table->integer('count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
