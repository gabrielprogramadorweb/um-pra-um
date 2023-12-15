<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //é usado para definir uma relação onde um modelo "possui um" de outro modelo. Essa relação é usada quando um modelo está associado a, no máximo, um registro em outra tabela.
    //famoso um pra um.
    // Essa relação assume, por padrão, que a tabela associada ao modelo filho possui uma chave estrangeira chamada modelo_pai_id que faz referência à chave primária da tabela do modelo pai. Permite o acesso ao modelo filho associado por meio de expressões como $modeloPai->modeloFilho.
    public function endereco() {
        return $this->hasOne('App\Endereco'); 
    }
   
}
