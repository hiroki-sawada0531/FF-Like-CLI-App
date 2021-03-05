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
$enemies[] = new Enemy('ゴブリン', 20);
$enemies[] = new Enemy('ボム', 25);
$enemies[] = new Enemy('モルボル', 30);

$turn = 1;

while ($tiida->getHitPoint() > 0 && $goblin->getHitPoint() > 0) {

echo "*** $turn ターン目 ***\n\n";

echo $tiida->getName() . " : " . $tiida->getHitPoint() . "/" . $tiida::MAX_HITPOINT . "\n";
echo $goblin->getName() . " : " . $goblin->getHitPoint() . "/" . $goblin::MAX_HITPOINT . "\n";
echo "\n";

foreach ($members as $member) {
    $enemyIndex = rand(0,count($enemies) -1);
    $enemy = $enemies[$enemyIndex];
    if (get_class($member) == "WhiteMage") {
        $member->doAttackWhiteMage($enemy,$member);
    } else {
        $member->doAttack($enemy);
    }
    echo "\n";
}
echo "\n";

$goblin->doAttack($tiida);
echo "\n";

$turn++;

}

echo "★★★ 戦闘終了 ★★★\n\n";
echo $tiida->getName() . " : " . $tiida->getHitPoint() . "/" . $tiida::MAX_HITPOINT . "\n";
echo $goblin->getName() . " : " . $goblin->getHitPoint() . "/" . $goblin::MAX_HITPOINT . "\n\n";