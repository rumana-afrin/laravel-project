<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("category_id")->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->bigInteger("subcategory_id")->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            $table->string("name");
            $table->text("details");
            $table->float("price", 10, 2);
            $table->string("image");
            $table->integer("quantity")->unsigned();
            $table->integer("discount")->unsigned()->default(0);
            $table->tinyInteger("active")->unsigned()->default(1);
            $table->string("status")->default('pending'); // Removed unsigned() for string column
            $table->tinyInteger("featured")->unsigned()->default(0);
            $table->timestamps();
        });
        


       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
