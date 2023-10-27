<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class calendario_Carbon extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //inserindo dados na tabela calendario
        DB::table('calendario')->insert([
          'data' => "27/10/2023 14:45:00";
          'status' => "0";
          'criado_em' => "27/10/2023 14:45:00";
          'modificado_em' => "27/10/2023 14:45:00";
        ]);
        DB::table('calendario')->insert([
          'data' => "now()";
          'status' => "0";
          'criado_em' => "now()";
          'modificado_em' => "now()";
        ]);
        DB::table('calendario')->insert([
          'data' => "now()";
          'status' => "0";
          'criado_em' => "now()";
          'modificado_em' => "now()";
        ]);
        DB::table('calendario')->insert([
          'data' => "now()";
          'status' => "0";
          'criado_em' => "now()";
          'modificado_em' => "now()";
        ]);
        DB::table('calendario')->insert([
          'data' => "27/10/2023 14:49:00";
          'status' => "0";
          'criado_em' => "now()";
          'modificado_em' => "now()";
        ]);
      // !!!!!!terminar de ver!!!!!!!!!!!
    }
}
