<?php

use Illuminate\Database\Seeder;

class assinatura extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assinaturas')->insert([
            ['id' => 1, 'nome' => 'Beauty Box', 'minimo' => 1,'limite' => 4 , 'quantidade' => '4', 'preco' => 44.99],
            ['id' => 2, 'nome' => 'Super Box', 'minimo' => 5,'limite' => 8 , 'quantidade' => '8', 'preco' => 74.99],
            ['id' => 3, 'nome' => 'Power Box', 'minimo' => 8,'limite' => 12 , 'quantidade' => '12', 'preco' => 124.99],
            ['id' => 4, 'nome' => 'Profissional', 'minimo' => 13,'limite' => 25 , 'quantidade' => '25', 'preco' => 329.99]
        ]);
        
        DB::table('users')->insert(
            ['id' => 1, 'name' => 'Admin', 'email' => 'hairbox@gmail.com', 'password' => bcrypt('fejuluma'), 'cep' => '07500000','estado' => 'SP', 'cidade' => 'Santa Isabel', 'bairro' => '13 de maio','rua' => 'Maria das ETEC', 'box_id' => 4,'secreta' => 'fejuluma','cargo' => 1]
        );
    }
}
