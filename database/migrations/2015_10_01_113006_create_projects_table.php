<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pow_id');
            $table->string('project_title', 1000);
            $table->string('project_description', 4000);
            $table->integer('project_lead');
            $table->integer('sponsor');
            $table->string('key_stakeholders', 1000);
            $table->integer('status');
            $table->integer('priority');
            $table->datetime('start_date');
            $table->datetime('finish_date');            
            $table->boolean('nda');
            $table->datetime('submitted_date');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
        });
        
        DB::statement('ALTER TABLE projects ADD FULLTEXT project_search(pow_id, project_title, project_description)');
        
        Schema::create('project_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('operation_id')->default(0);
            $table->string('status_name');
        });
        
        Schema::create('project_priorities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('operation_id')->default(0);
            $table->string('priority_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
        Schema::drop('project_statuses');
        Schema::drop('project_priorities');
       
    }
}
