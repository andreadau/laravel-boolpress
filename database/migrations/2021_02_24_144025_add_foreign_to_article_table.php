<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->after('id')->nullable();
            $table->unsignedBigInteger('tags_id')->after('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('tags_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign('articles_category_id_foreign');
            $table->dropForeign('articles_tags_id_foreign');
            $table->dropColumn('category_id');
            $table->dropColumn('tags_id');

        });
    }
}
