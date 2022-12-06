<?php

namespace dmitryeskin1\guess_number\Controller;

use function dmitryeskin1\guess_number\Model\setting;
use function dmitryeskin1\guess_number\View\MenuGame;
use function dmitryeskin1\guess_number\DB\openDatabase;

function startGame()
{
    setting();
    openDatabase();
    MenuGame();
}
