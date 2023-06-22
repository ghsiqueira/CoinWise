<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'description' => 'Energia',
                'created_at' => Carbon::now('America/Sao_Paulo')
            ], 
            [
                'description' => 'Água',
                'created_at' => Carbon::now('America/Sao_Paulo')
            ],
            [
                'description' => 'Moradia',
                'created_at' => Carbon::now('America/Sao_Paulo')
            ],
            [
                'description' => 'Alimentos',
                'created_at' => Carbon::now('America/Sao_Paulo')
            ],
            [
                'description' => 'Vestuário',
                'created_at' => Carbon::now('America/Sao_Paulo')
            ],
            [
                'description' => 'Transporte',
                'created_at' => Carbon::now('America/Sao_Paulo')
            ],
            [
                'description' => 'Educação',
                'created_at' => Carbon::now('America/Sao_Paulo')
            ],
            [
                'description' => 'Viagem',
                'created_at' => Carbon::now('America/Sao_Paulo')
            ],
            [
                'description' => 'Entretenimento',
                'created_at' => Carbon::now('America/Sao_Paulo')
            ],
            [
                'description' => 'Outros',
                'created_at' => Carbon::now('America/Sao_Paulo')
            ],  
        ]);
    }
}
