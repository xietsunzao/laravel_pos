<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{

    public function __construct()
    {
        $this->faker = new Faker();
        
        //Do your magic here
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = $this->faker->create();
        $faker->addProvider(new \FakerRestaurant\Provider\id_ID\Restaurant($faker));
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'kode_produk' => $faker->randomNumber($nbDigits = NULL, $strict = false),
                'nama_produk' => $faker->foodName(),
                'id_kategori' => $faker->numberBetween($min = 1,$max = 2),
                'harga' => $faker->randomNumber(2),
            ];
            DB::table('tb_produk')->insert($data);
        }
    }
}
