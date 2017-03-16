<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $fillable = ['nome', 'preco', 'imagem'];

    protected $table = 'produtos';

    public function compra(){
        return $this->hasMany('App\Compra');    
    }
}
