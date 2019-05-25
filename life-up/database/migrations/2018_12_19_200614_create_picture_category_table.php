<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePictureCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('picture_category', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('NAME', '50');
			$table->string('THUMB_PATH', 200);
			$table->string('DESCRIPTION', 50);
			$table->string('LINK', 200);
			$table->string('BASE_FOLDER_PATH', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('picture_category');
    }
}
