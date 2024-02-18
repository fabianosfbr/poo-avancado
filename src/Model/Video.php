<?php

namespace Fabianosfbr\PooAvancado\Model;

use DateInterval;

class Video
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

    public function getNome():string
    {
        return $this->nome;
    }

    public function assistir():void
    {
        $this->assistido = true;
    }

    public function minutosDeDuracao():int
    {
        return $this->duracao->i;
    }

    public function recuperarUrl():string
    {
        return "https://www.youtube.com/watch?v={$this->nome}";
    }


}