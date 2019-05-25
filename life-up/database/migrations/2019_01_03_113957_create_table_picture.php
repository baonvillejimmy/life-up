<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePicture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('picture', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('NAME', '50');
			$table->string('PATH', 200);
			$table->string('THUMB_NAME', 50);
			$table->string('THUMB_PATH', 200);
			$table->integer('CATEGORY_ID')->unsigned();
			$table->foreign('CATEGORY_ID')
				  ->references('id')
				  ->on('picture_category')
				  ->onDelete('restrict')
				  ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('picture', function(Blueprint $table) {
			$table->dropForeign('picture_picture_category_id_foreign');
		});
		Schema::drop('picture');
    }
}
