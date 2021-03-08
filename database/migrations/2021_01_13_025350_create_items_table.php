<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            $table->string('file_name')->nullable();
            $table->string("file_path")->nullable();

            $table->string("item_title");
            $table->integer("price");
            $table->text("item_explanation");
            $table->string("item_state");
            $table->string("school_name")->nullable();
            $table->string("shipping");
            $table->string("from_where");
            
            $table->unsignedBigInteger("buyer_id")->nullable();
            $table->dateTime("sold_check")->nullable();
            



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
        Schema::dropIfExists('items');
    }
}
