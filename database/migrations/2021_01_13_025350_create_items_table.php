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
            $table->string('file_name');
            $table->string("file_path");

            // $table->string("item_title");
            // $table->integer("price");
            // $table->text("item_explanation");
            // $table->string("item_state");
            // $table->string("school_name");
            // $table->integer("shipping");
            // $table->string("from_where");

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
