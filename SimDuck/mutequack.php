<?php
require_once 'quackbehavior.php';

class MuteQuack implements QuackBehavior {
    public function quack_1() {
        echo '...<br>';
    }
}
?>