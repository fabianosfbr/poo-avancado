<?php

namespace Fabianofsbr\PooAvancado\Model;

use DateInterval;

class Curso
{
    private string $nome;

    private bool $assistido = false;

    private DateInterval $duracao;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->assistido = false;
        $this->duracao = DateInterval::createFromDateString('0');
    }

    public function assistir(): void
    {
        $this->assistido = true;
    }

    public function minutosDeDuracao(): int
    {
        return $this->duracao->i;
    }

    public function recupearUrl(): string
    {
        return 'http://localhost/curso/' . $this->nome;
    }
}
