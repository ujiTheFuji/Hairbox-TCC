<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cep', 'box_id', 'estado', 'cidade', 'bairro', 'rua', 'secreta'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function carrinhos(){
        return $this->belongsToMany("App\Produto", "carrinhos")->withPivot('quant_prod');
    }

    public function carrinhosDel(){
        return $this->belongsTo('App\Carrinho', 'id', 'user_id');
    }
    public function correios(){
        return $this->belongsTo('App\Correio', 'id', 'user_id');
    }

    public function assinaturas(){
        return $this->hasOne("App\Assinatura", 'id', 'box_id');
    }

    public function cartoes(){
        return $this->belongsTo("App\Cartao", 'id', 'user_id');
    }
}
