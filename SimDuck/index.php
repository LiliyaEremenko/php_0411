<?php
header('Content-type: text/html; charset=utf-8');
require_once 'mallardduck.php';
require_once 'redheadduck.php';
require_once 'rubberduck.php';
require_once 'decoyduck.php';
require_once 'modelduck.php';

$duck1 = new MallardDuck();
$duck1->display();
$duck1->performFly();
$duck1->swim();
$duck1->performQuack();

echo '<br>';

$duck2 = new RedheadDuck();
$duck2->display();
$duck2->performFly();
$duck2->swim();
$duck2->performQuack();

echo '<br>';

$duck3 = new RubberDuck();
$duck3->display();
$duck3->performFly();
$duck3->swim();
$duck3->performQuack();

echo '<br>';

$duck4 = new DecoyDuck();
$duck4->display();
$duck4->performFly();
$duck4->swim();
$duck4->performQuack();

echo '<br>';

$duck5 = new ModelDuck();
$duck5->display();
$duck5->performFly();
$duck5->setFlyBehavior(new FlyRocketPovered());
$duck5->performFly();
$duck5->swim();
$duck5->performQuack();
?>