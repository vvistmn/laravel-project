<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('path');
            $table->integer('category_id')->unsigned()->nullable()->after('user_id');
            $table->integer('photo_id')->unsigned()->nullable()->after('category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('path')->nullable()->after('content');
            $table->dropColumn('category_id');
            $table->dropColumn('photo_id');
        });
    }
}
