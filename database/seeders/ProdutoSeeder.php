<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    {
        DB::table('produtos')->insert([
            'nome' => 'Biscoito',
            'quantidade' => 100,
            'preco'=> 2.50,
        ]);
    }
}
