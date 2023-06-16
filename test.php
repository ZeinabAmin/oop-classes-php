<?php
require_once "classes/Cart.php";
require_once "classes/Session.php";
require_once "classes/Database2.php";

use Route\Classes\Cart;
use Route\Classes\Mysql;
use Classes\Session;

$cart = new Cart;
$session3 = new Session();
// $cart->add('nesto', 7,$session3);
// $cart->add('romy', 5,$session3);
$cart->read();
// $cart->empty();
// $cart->read();


$cart->add('juice', 7, $session3);
echo "<br>";
echo "<br>";
echo "<br>";
print_r($session3->getAll());
echo "<br>";
echo "<br>";
echo "<br>";
$myaql = new Mysql("localhost", "root", "", "dbtest");
$users = $myaql->select("SELECT * FROM `users`");
print_r($users);
