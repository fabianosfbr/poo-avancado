<?php

namespace Fabianosfbr\PooAvancado\Service;

use DomainException;
use Fabianosfbr\PooAvancado\Model\BetterPlayMais;
use Fabianofsbr\PooAvancado\Model\Curso;

class CalculadorPontuacao
{

    public function recuperarPontuacao($conteudo):int
    {

        if($conteudo instanceof Curso){
            return 100;
        }elseif($conteudo instanceof BetterPlayMais){
            return $conteudo->minustosDeDuracao() * 2;
        }else{
            throw new DomainException('Conteudo inválido');
        }
    }

}