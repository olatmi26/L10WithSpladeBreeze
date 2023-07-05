<?php

namespace Database\Seeders;

use App\Models\Bank;
use App\Models\Company;
use App\Models\CompanyAccount;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator;
use Illuminate\Container\Container;
use Nette\Utils\Random;

class CompanyAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $faker;

    public function __construct()
    {
        $this->faker = $this->withFaker();
    }
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }
    public function run()
    {

        $companies = Company::whereIn('id', [1, 2, 3, 4, 5, 6])->get();
        // echo print_r($this->faker->regexify('[0-9]{9}'));
        foreach ($companies as $key => $company) {
            $save = CompanyAccount::create([
                'accountName' => $company->name,
                'company_id' => $company->id,
                'bank_id' => Bank::all()->random()->id,
                'AccountNo' => $this->faker->regexify('[0-9]{10}'),
                'accountSwiftCode' => $this->faker->regexify('[A-Za-z0-9]{6}'),
                'balanceCredited' => mt_rand(00000, 999999),
            ]);
            $save->update(['balance' => $save->balanceCredited]);
        }
    }
}