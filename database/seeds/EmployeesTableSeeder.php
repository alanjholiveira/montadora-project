<?php

use App\Model\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('employees')->delete();

        \DB::table('employees')->insert(array(
            0 =>
                array(
                    'company_id' => 1,
                    'name' => 'Funcionario Padrão',
                    'date_birth' => '1981-05-28',
                    'gender' => 'M',
                    'cpf' => 12345678900,
                    'occupation' => 'Analista',
                    'salary' => 5.000,
                    'address' => 'Rua ',
                    'zip_code' => '29700600',
                    'city' => 'Colatina',
                    'state' => 'ES',
                    'country' => 'Brazil',
                    'phone' => '279990000',
                    'email' => 'funcionario@demo.com',
                    'password' => Hash::make('123456789'),
                )
        ));

        factory(App\Model\Employee::class, 3)->create();

    }
}
