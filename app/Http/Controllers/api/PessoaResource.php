<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Pessoa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PessoaResource extends Controller
{
    public function show(){
        $this->Pessoa_Model = new Pessoa();
        $pessoas = $this->Pessoa_Model->getAll();
        if(isset($pessoas) && count($pessoas)){
            return json_encode($pessoas,true);
        }
        return json_encode(array());
    }

}
