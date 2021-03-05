<?php

// echo "処理のはじまりはじまり〜！\n\n";

require_once('./classes/Human.php');
require_once('./classes/Enemy.php');
require_once('./classes/Brave.php');
require_once('./classes/BlackMage.php');
require_once('./classes/WhiteMage.php');

$members = array();
$members[] = new Brave('ティーダ');
$members[] = new WhiteMage('ユウナ');
$members[] = new BlackMage('ルールー');

$enemies = array();
$enemies[] = new Enemy('ゴブリン');
$enemies[] = new Enemy('ボム');
$enemies[] = new Enemy('モルボル');

$turn = 1;

while ($tiida->getHitPoint() > 0 && $goblin->getHitPoint() > 0) {

echo "*** $turn ターン目 ***\n\n";

echo $tiida->getName() . " : " . $tiida->getHitPoint() . "/" . $tiida::MAX_HITPOINT . "\n";
echo $goblin->getName() . " : " . $goblin->getHitPoint() . "/" . $goblin::MAX_HITPOINT . "\n";
echo "\n";

$tiida->doAttack($goblin);
echo "\n";
$goblin->doAttack($tiida);
echo "\n";

$turn++;

}

echo "★★★ 戦闘終了 ★★★\n\n";
echo $tiida->getName() . " : " . $tiida->getHitPoint() . "/" . $tiida::MAX_HITPOINT . "\n";
echo $goblin->getName() . " : " . $goblin->getHitPoint() . "/" . $goblin::MAX_HITPOINT . "\n\n";