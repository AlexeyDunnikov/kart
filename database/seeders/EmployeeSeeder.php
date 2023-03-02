<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            [
                'name' => 'Александра',
                'last_name' => 'Григорук',
                'surname' => 'Денисовна',
                'sex' => 2,
                'birthday' => '2003-12-23',
                'address' => 'Кабяка 12',
                'job' => 'техник-программист',
                'subunit' => '1A'
            ],
            [
                'name' => 'Алексей',
                'last_name' => 'Дунников',
                'surname' => 'Викторович',
                'sex' => 1,
                'birthday' => '2003-10-18',
                'address' => 'Кабяка 37',
                'job' => 'техник-программист',
                'subunit' => '2A'
            ],
            [
                'name' => 'Павел',
                'last_name' => 'Шишко',
                'surname' => 'Викторович',
                'sex' => 1,
                'birthday' => '2004-06-26',
                'address' => 'Кремко 12',
                'job' => 'инженер-программист',
                'subunit' => '3A'
            ],
        ];

        foreach ($arr as $item)
            Employee::query()->create($item);
    }
}
