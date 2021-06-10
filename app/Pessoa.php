<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    public function getAll(){
        return array(
            array(
                'name' => 'Joao',
                'surname' => 'Silva',
                'email' => 'joao@email.com',
                'docNumber' => '47896532',
                'typeDoc' => 'cpf',
                'phone' => '11988556633'
            ),
            array(
                'name' => 'Junior',
                'surname' => 'Braga',
                'email' => 'junior@email.com',
                'docNumber' => '447788556',
                'typeDoc' => 'cpf',
                'phone' => '11988786633'
            ), array(
                'name' => 'Maria',
                'surname' => 'Aparecida',
                'email' => 'maria@email.com',
                'docNumber' => '10234569875602',
                'typeDoc' => 'cnpj',
                'phone' => '11988556633'
            ), array(
                'name' => 'Flávio',
                'surname' => 'Silva',
                'email' => 'flavio@email.com',
                'docNumber' => '47896532',
                'typeDoc' => 'cpf',
                'phone' => '11988556633'
            ), array(
                'name' => 'Carlos',
                'surname' => 'Francisco',
                'email' => 'carlos@email.com',
                'docNumber' => '7788996655',
                'typeDoc' => 'cpf',
                'phone' => '11488556699'
            ), array(
                'name' => 'Jairo',
                'surname' => 'Silva',
                'email' => 'jairo@email.com',
                'docNumber' => '47896532',
                'typeDoc' => 'cnpj',
                'phone' => '1144558899'
            ), array(
                'name' => 'Rafael',
                'surname' => 'Souza',
                'email' => 'rafal@email.com',
                'docNumber' => '778899625',
                'typeDoc' => 'cnpj',
                'phone' => '44445566998'
            )
        );
    }
    public function getUniqueRegister(){
        return array(
            array(
            'name' => 'Joao',
            'surname' => 'Silva',
            'email' => 'joao@email.com',
            'docNumber' => '47896532',
            'typeDoc' => 'cpf',
            'phone' => '11988556633'
            )
        );
    }
}
