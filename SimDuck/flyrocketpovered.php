<?php
require_once 'flybehavior.php';

class FlyRocketPovered implements FlyBehavior {
    public function fly() {
        echo 'Я лечу на реактивной тяге!<br>';
    }
}
?>