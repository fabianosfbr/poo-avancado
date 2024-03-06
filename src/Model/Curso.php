<?php

namespace Fabianofsbr\PooAvancado\Model;

use DateInterval;
use DomainException;
use Fabianosfbr\PooAvancado\Model\Video;

class Curso
{
    private string $nome;

    private $videos;

    private $feedbacks;

    private DateInterval $duracao;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function receberFeedback(int $nota, ?string $depoimento): void
    {
        if ($nota < 9 && empty($depoimento)) {
            throw new DomainException('Depoimento obrigatório');
        }

        $this->feedbacks[] = [$nota, $depoimento];
    }

    public function adicionarVideo(Video $video):void
    {
        if ($video->minutosDeDuracao() < 3) {
            throw new DomainException('Video muito curto');
        }

        $this->videos[] = $video;
    }

    public function recuperarVideos(): array
    {
        return $this->videos;
    }
}
