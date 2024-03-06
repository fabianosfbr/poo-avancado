<?php

namespace Fabianosfbr\PooAvancado\Service;


use Fabianofsbr\PooAvancado\Model\Curso;
use Fabianosfbr\PooAvancado\Model\BetterPlayMais;

class Assistidor
{


    public function assistirVideo(Curso $curso)
    {
        foreach ($curso->recuperarVideos() as $video) {
            $video->assistir();
        }
    }

    public function assistirBetterPlay(BetterPlayMais $betterPlayMais)
    {
        $betterPlayMais->assistir();
    }

}