<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function imagem(){
        return $this->hasOne('App\Imagem_produto');
    }

}
