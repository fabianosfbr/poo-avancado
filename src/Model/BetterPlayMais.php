<?php

namespace Fabianosfbr\PooAvancado\Model;

use DateInterval;

class BetterPlayMais extends Video
{

    private string $categoria;
    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }


    public function recuperarUrl(): string
    {
        return "https://www.youtube.com/watch?c={$this->categoria}&v={parent::nome}";
       
    }
}
