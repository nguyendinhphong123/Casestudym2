<?php
const KHONG = 'CONG_HAI_SO';
const MOT = 'TRU_HAI_SO';
const HAI = 'NHAN_HAI_SO';
const BA = 'CHIA_HAI_SO';
include ('TennisGame.php');

$tennisGame = new TennisGame();

$tennisGame->getScore('player1', 'player2', 1, 0);

echo $tennisGame;