<?php
require_once 'quackbehavior.php';

class Quack implements QuackBehavior {
    public function quack_1() {
        echo 'Кря-кря-кря!<br>';
    }
}
?>