<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor';
        $fornecedor->site = 'fornecedor.com.br';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'fornecedor@gmail.com';
        $fornecedor->save();

        // Essa abordagem requer que a classe possua a atributo fillable configurada
        Fornecedor::create([
            'nome' => 'Fornecedor 2',
            'site' => 'fornecedor2.com.br',
            'uf'=>'RJ',
            'email'=>'fornecedor2@gmail.com'
            ]);

        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 3',
            'site' => 'fornecedor3.com.br',
            'uf'=>'SC',
            'email'=>'fornecedor3@gmail.com'
        ]);
    }
}
