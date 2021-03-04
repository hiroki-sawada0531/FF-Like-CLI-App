<?php

// echo "処理のはじまりはじまり〜！\n\n";

require_once('./classes/Human.php');
require_once('./classes/Enemy.php');

$tiida = new Human();
$goblin = new Enemy();

$tiida->name = "ティーダ";
$goblin->name = "ゴブリン";

echo $tiida->name . "\n";
echo $goblin->name . "\n";