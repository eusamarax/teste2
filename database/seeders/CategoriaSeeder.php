<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        DB::table('cetegorias')->insert([
            'nome' => 'Produto de Limpeza',
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Outros',
        ]);
    }
}
