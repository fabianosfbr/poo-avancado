<?php

use Fabianosfbr\PooAvancado\Model\BetterPlayMais;
use Fabianosfbr\PooAvancado\Model\Video;

require __DIR__ . '/vendor/autoload.php';

$video = new Video('Solid Principles');

$betterPlay = new BetterPlayMais('Poo Avancado', 'desenvolvimento');


dump($betterPlay);

