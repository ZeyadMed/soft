<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

     
    public function run()
    {
        Department::create([
            'name' => 'General' ,
            'code' => 'G'
        ]);

        Department::create([
            'name' => 'Computer Scince' ,
            'code' => 'CS'
        ]);

        Department::create([
            'name' => 'Information Technology' ,
            'code' => 'IT'
        ]);

        Department::create([
            'name' => 'Information System' ,
            'code' => 'IS'
        ]);

            // Student::factory(100)->create();

    }
}
