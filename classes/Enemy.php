<?php
class Enemy
{
    const MAX_HITPOINT = 50;
    private $name;
    private $hitPoint = 50;
    private $attackPoint = 10;

public function doAttack($human)
{
    echo "『" . $this->name . "』の攻撃！\n";
    echo "【" . $human->name . "】に" . $this->attackPoint . "のダメージ！\n";
    $human->tookDamage($this->attackPoint);
}

public function tookDamage($damage)
{
    $this->hitPoint -=$damage;
    if ($this->hitPoint < 0) {
        $this->hitPoint = 0;
    }
}

}