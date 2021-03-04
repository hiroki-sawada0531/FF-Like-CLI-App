<?php

class Brave extends Human
{
    public function doAttack($enemy)
    {
        if (rand(1,3) === 1) {
            echo "『" . $this->name . "』のスキルが発動した！\n";
            echo "『ぜんりょくぎり』！！\n";
            echo $enemy->name . "に" . $this->attackPoint * 1.5 . "のダメージ！\n";
            $enemy->tookDamage($this->attackPoint * 1.5);
        } else {
            parent::doAttack($enemy);
        }
        return true;
    }
}