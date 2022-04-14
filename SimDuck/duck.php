<?php
require_once 'flybehavior.php';
require_once 'quackbehavior.php';

abstract class Duck {
    protected $flyBehavior;
    protected $quackBehavior;
    protected $class;

    abstract public function display();

    public function performFly() {
        $this->flyBehavior->fly();
    }
    public function swim() {
        echo 'Все утки умеют плавать, даже деревянные<br>';
    }
    public function performQuack() {
        $this->quackBehavior->quack_1();
    }

    public function setFlyBehavior($newFlyBehavior) {
        $this->flyBehavior = $newFlyBehavior;
    }
}
?>