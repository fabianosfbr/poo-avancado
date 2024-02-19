<?php

namespace Fabianosfbr\PooAvancado\Service;

use Fabianosfbr\PooAvancado\Model\Video;
use Fabianosfbr\PooAvancado\Model\BetterPlayMais;

class Assistidor
{

    public function assistir(Video $video): void
    {
        $video->assistir();
    }

    public function assistirBetterPlay(BetterPlayMais $video): void
    {
        $video->assistir();
    }
}
