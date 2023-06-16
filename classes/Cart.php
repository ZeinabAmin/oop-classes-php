<?php

namespace Route\Classes;

require_once "classes/Session.php";

use Classes\Session;

class Cart
{
    private $items = [];
    public function add(string $productName, int $quantitiy, Session $obj)
    {
        $this->items[$productName] = $quantitiy; //key //value
        // $obj->set($productName, $quantitiy);
        $obj->set('putcart', $this->items);
    }
    public function read()
    {
        foreach ($this->items as $productName => $quantitiy) {
            echo "$productName:$quantitiy <br>";
        }
    }
    public function empty()
    {
        $this->items = [];
    }
    // public function putCart(Session $obj) //association //aggregation
    // {
    //     $obj->set($this->items[$productName], $quantitiy);
    // }
}
