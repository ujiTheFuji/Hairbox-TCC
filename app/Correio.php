<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correio extends Model
{

    public function produtos(){
        return $this->belongsTo('App\Produto', 'prod_id');
    }

    public function usuarios(){
        return $this->belongsTo('App\User', 'user_id');
    }
    public function imagem(){
        return $this->belongsTo('App\Imagem_produto', 'prod_id', 'produto_id');
    }
}
