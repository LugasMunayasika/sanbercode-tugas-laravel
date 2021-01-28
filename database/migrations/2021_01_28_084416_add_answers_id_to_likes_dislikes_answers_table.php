<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnswersIdToLikesDislikesAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('likes_dislikes_answers', function (Blueprint $table) {
            $table->unsignedBigInteger('answers_id');
            $table->foreign('answers_id')->references('id')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('likes_dislikes_answers', function (Blueprint $table) {
            $table->dropForeign(['answers_id']);
            $table->dropColumn(['answers_id']);
        });
    }
}
