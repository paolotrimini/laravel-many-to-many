<?php

use Illuminate\Database\Seeder;

use App\Employee;
use App\Task;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class, 200) -> create()
                -> each(function($task){

                    $employees = Employee::inRandomOrder()
                                    -> limit(rand(2, 10))
                                    -> get();

                    $task -> employees() -> attach($employees);
                    $task -> save();
                });
    }
}
