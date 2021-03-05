<?php

class WhiteMage extends Human
{
    const MAX_HITPOINT = 80;
    private $hitPoint = 80;
    private $attackPoint = 10;
    private $intelligence = 30;

    public function __construct($name)
    {
        parent::__construct($name, $this->hitPoint, $this->attackPoint);
    }

    public function doAttackWhiteMage($enemy, $human)
    {
        if (rand(1,2) === 1) {
            echo "『" .$this->getName() . "』のスキルが発動した！\n";
            echo "『ケアル』！！\n";
            echo $human->getName()."のHPを".$this->intelligence * 1.5."回復！\n";
            $human->recoveryDamage($this->intelligence * 1.5, $human);
        } else {
            parent::doAttack($enemy);
        }
        return true;
    }
}