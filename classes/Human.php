<?php

class Human
{
    const MAX_HITPOINT = 100;
    private $name;
    private $hitPoint = 100;
    private $attackPoint = 20;

    public function doAttack($enemy)
    {
        echo "『" .$this->name . "』の攻撃！\n";
        echo "【" . $enemy->name . "】に " . $this->attackPoint . " のダメージ！\n";
        $enemy->tookDamage($this->attackPoint);
    }

    public function tookDamage($damage)
    {
        $this->hitPoint -= $damage;
        if($this->hitPoint < 0) {
            $this->hitPoint = 0;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->nmae = $name;
    }

    public function getHitPoint()
    {
        return $this->hitPoint;
    }

    public function getAttackPoint()
    {
        return $this->attackPoint;
    }

}