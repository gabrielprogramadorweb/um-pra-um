<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    //é usado para estabelecer relações de pertencimento entre modelos, indicando que um modelo "pertence a" outro.
    //Possui uma chave estrangeira (geralmente modelo_pai_id) que se refere à chave primária do modelo "pai". Essa relação simplifica a recuperação de dados relacionados, permitindo acesso direto ao modelo "pai" com expressões como $modeloFilho->modeloPai.
    public function cliente() {
        return $this->belongsTo('App\Cliente'); 
    }
}
