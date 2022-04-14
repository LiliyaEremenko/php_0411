<?php
require_once 'duck.php';
require_once 'flyrocketpovered.php';
require_once 'mutequack.php';

class ModelDuck extends Duck {
    public function __construct() {
        $this->flyBehavior = new FlyRocketPovered();
        $this->quackBehavior = new MuteQuack();
    }
    public function display() {
        echo 'Я модель утки.<br>';
    }
}
?>