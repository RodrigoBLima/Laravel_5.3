<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    public function lista(){
        return (object)[
            'nome' => 'Ipad',
            'preco' => '3476767'
        ];
    }
}
