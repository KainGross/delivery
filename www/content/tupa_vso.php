<?php
$bd = mysqli_connect("127.0.0.1", "delivery", "123321", "delivery");
function getCart($user, $ip) {
    global $bd;
    $items = mysqli_query($bd, "SELECT products.name,products.price,cart.amount FROM cart,products WHERE (cart.user like '$user' or (cart.ip like '$ip' AND cart.user = '')) AND products.id = cart.item_id ;");
    
}