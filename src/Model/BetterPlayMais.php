<?php

namespace Fabianosfbr\PooAvancado\Model;

use DateInterval;

class BetterPlayMais
{
    private string $nome;
    private bool $assistido;
    private DateInterval $duracao;

    public function __construct($nome)
    {
        $this->nome = $nome;
        $this->assistido = false;
        $this->duracao = new DateInterval('PT0S');
    }


    public function assistir():void
    {
        $this->assistido = true;
    }

    public function minustosDeDuracao()
    {
        return $this->duracao->i;
    }

}