<?php

use Illuminate\Database\Seeder;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work')->insert([
            [
                'work_owner' => 'boss',
                'work_detail' => 'Learn Somethings'
            ],
            [
                'work_owner' => 'Father',
                'work_detail' => 'Learn Run'
            ]
        ]);
    }
}
