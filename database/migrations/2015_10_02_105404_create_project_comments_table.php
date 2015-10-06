<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('project_id');
            $table->string('comment',4000);
            $table->string('comment_next_week',4000);
            $table->boolean('nominate_report_1');
            $table->boolean('nominate_report_2');
            $table->boolean('nominate_report_3');
            $table->boolean('nominate_report_4');
            $table->boolean('highlight');
            $table->integer('ack_by');
            $table->integer('ack_at');
            $table->integer('updated_by');
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
        Schema::drop('project_comments');
    }
}
