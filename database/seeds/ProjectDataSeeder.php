<?php

use Illuminate\Database\Seeder;

class ProjectDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('project_statuses')->insert([
            ['status_name' => 'New Request'],
            ['status_name' => 'Planned'],
            ['status_name' => 'On Hold due to Requestor'],
            ['status_name' => 'On Hold due to IT GCC'],
            ['status_name' => 'In Progress'],
            ['status_name' => 'Completed'],
            ['status_name' => 'Withdrawn']
        ]);
        
        DB::table('project_priorities')->insert([
            ['priority_name' => 'High'],
            ['priority_name' => 'Medium'],
            ['priority_name' => 'Low']
        ]);
    }
}
