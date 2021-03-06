<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    public $realPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart)
        {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
            $this->realPrice = $oldCart->realPrice;
        }
    }

    public function add($item, $id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->cost, 'item' => $item];
        if ($this->items)
        {
            if (array_key_exists($id, $this->items))
            {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->cost * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->cost;
        $this->realPrice += $item->cost;

        return $storedItem;
    }

    public function remove($item, $id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->cost, 'item' => $item];
        if ($this->items)
        {
            if (array_key_exists($id, $this->items))
            {
                $storedItem = $this->items[$id];
            }
        }
        if ($storedItem['qty'] == 1) {
            unset($this->items[$id]);
//            array_splice($this->items, $id, 1);
        } else {
            $storedItem['qty']--;
            $storedItem['price'] = $item->cost * $storedItem['qty'];
            $this->items[$id] = $storedItem;
        }
        $this->totalQty--;
        $this->totalPrice -= $item->cost;
        $this->realPrice -= $item->cost;
    }

    public function delete($item, $id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->cost, 'item' => $item];
        if ($this->items)
        {
            if (array_key_exists($id, $this->items))
            {
                $storedItem = $this->items[$id];
//                array_splice($this->items, $id, 1);
                unset($this->items[$id]);
            }
        }
        $this->totalPrice -= $storedItem['price'];
        $this->realPrice -= $storedItem['price'];
        $this->totalQty -= $storedItem['qty'];

    }
}