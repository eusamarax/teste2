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
            'categoria_id'=> 1,
            'nome' => 'Biscoito',
            'quantidade' => 100,
            'preco'=> 2.50,
        ]);

        DB::table('produtos')->insert([
            'categoria_id'=> 1,
            'nome' => 'Chocolate',
            'quantidade' => 100,
            'preco'=> 7.00,
        ]);

        DB::table('produtos')->insert([
            'categoria_id'=> 1,
            'nome' => 'Refrigerante',
            'quantidade' => 100,
            'preco'=> 5.00,
        ]);

        DB::table('produtos')->insert([
            'categoria_id'=> 2,
            'nome' => 'Bala',
            'quantidade' => 100,
            'preco'=> 1.50,
        ]);
    }
}
