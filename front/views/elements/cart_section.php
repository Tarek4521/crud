<?php

include_once($_SERVER['DOCUMENT_ROOT']."/crud/config.php");

use Bitm\Cart;

$_cart = new cart();

$_cart->mycart();
?>

<section>

<h1 class="text-center">Carts</h1>
<table class="cart_table">
    <thead>
    <tr>
        <th scope="col">Sl</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Image</th>
        <th scope="col">Unit Price</th>
        <th scope="col">SI</th>
        <th scope="col">Status</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
        <?php 
        foreach($carts as $cart):
        ?>
        <tr>
            <td>

            </td>
        </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>

</section>