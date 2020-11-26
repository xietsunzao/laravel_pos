<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_kategori' => 'Mie Instan'],
            ['nama_kategori' => 'Gula']
        ];
        DB::table('tb_kategori')->insert($data);
    }
}
    