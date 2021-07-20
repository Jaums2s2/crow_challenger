<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Model\ModelCandidate;

class CandidatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelCandidate $candidate)
    {
        $candidate->create([
            'nome'=>'Elias dos Santos',
            'logradouro'=>'Praça da Sé',
            'cep'=>'01001000',
            'celular'=>'1197223692',
            'telefone'=>'1155121963',
            'email'=>'elias.santos13@gmail.com',
            'bairro'=>'Sé',
            'rua'=>'Praça da Sé',
            'numero'=>'12',
            'complemento'=>'lado ímpar',
            'cidade'=>'São Paulo',
            'uf'=>'SP',
            'resumo'=>'Um otimo candidato Muito criativo, otima postura'
        ]);
        $candidate->create([
            'nome'=>'Larissa Mendes',
            'logradouro'=>'Praça da Sé',
            'cep'=>'01001000',
            'celular'=>'1195368741',
            'telefone'=>' ',
            'email'=>'larissa.m@gmail.com',
            'bairro'=>'Sé',
            'rua'=>'Praça da Sé',
            'numero'=>'12',
            'complemento'=>'lado ímpar',
            'cidade'=>'São Paulo',
            'uf'=>'SP',
            'resumo'=>'Um otimo candidato Muito criativo, otima postura'
        ]);
        $candidate->create([
            'nome'=>'Victor Martins',
            'logradouro'=>'Praça da Sé',
            'cep'=>'01001000',
            'celular'=>'1194856324',
            'telefone'=>'11551214265',
            'email'=>'martins.victor@gmail.com',
            'bairro'=>'Sé',
            'rua'=>'Praça da Sé',
            'numero'=>'12',
            'complemento'=>'lado ímpar',
            'cidade'=>'São Paulo',
            'uf'=>'SP',
            'resumo'=>'Um otimo candidato Muito criativo, otima postura'
        ]);
        $candidate->create([
            'nome'=>'Matias Carneiro',
            'logradouro'=>'Praça da Sé',
            'cep'=>'01001000',
            'celular'=>'1197223692',
            'telefone'=>'1155121963',
            'email'=>'Natias19@gmail.com',
            'bairro'=>'Sé',
            'rua'=>'Praça da Sé',
            'numero'=>'12',
            'complemento'=>'lado ímpar',
            'cidade'=>'São Paulo',
            'uf'=>'SP',
            'resumo'=>'Um otimo candidato Muito criativo, otima postura'
        ]);
    }
}
