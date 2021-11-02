<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Создание отношения категории
        Schema::create('сategories',function (Blueprint $table){

            $table->id();
            $table->string('name');//Кортеж Категории товара
            $table->foreignId('сategories_id')
                ->references('id')
                ->on('сategories');//Кортеж id категорий товаров, который определяет подкатегории
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_product');
    }
}
