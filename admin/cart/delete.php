<?php

include_once($_SERVER['DOCUMENT_ROOT']."/crud/config.php");

use Bitm\Cart;

$_cart = new cart();

$_cart->delete();