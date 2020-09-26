<?php
require_once "./Hambargur.php";

$ham1 = new Hambarger("Basic","Sasuage",3.5,"white");
$ham2 = new Hambarger("basic","salad",'2.5','white');

$ham1->itemizeHamburger();
$ham1->addHamburgerAdd1("Tomatoo",0.26);
$ham1->addHamburgerAdd2("Lettuce",0.75);
$ham1->addHamburgerAdd3("Cheese",1.13);
$ham1->addHamburgerAdd4("Pepsi",0.15);
$ham1->addHamburgerAdd5("Beef tukra",0.55);
$ham1->itemizeHamburger();

?>