<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    private $Pessoa_Model;

    public function __construct()
    {
        $this->Pessoa_Model = new Pessoa();
    }

    public function show(){
        $data = [];
        $base_url = url('/');
        $pessoas = $this->Pessoa_Model->getUniqueRegister();
        if(isset($pessoas) && count($pessoas)){
            $data['pessoas'] = $pessoas;
        }
        $data['url'] = $base_url;

        return view('pessoa',$data);
    }

    public function listing(){
        $data = [];
        $base_url = url('/');
        $this->Pessoa_Model = new Pessoa();
        $pessoas = $this->Pessoa_Model->getAll();
        if(isset($pessoas) && count($pessoas)){
            $data['pessoas'] = $pessoas;
        }
        $data['url'] = $base_url;

        return view('pessoa',$data);
    }
    public function apiData(){

    }
}
