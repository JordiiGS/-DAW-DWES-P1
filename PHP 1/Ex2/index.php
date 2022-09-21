<?php
 $shopping_cart = 30;
    $tipo = array('cables','perifèricos');
    $tipo[0]="cables";
 $shipping_price = 0;
if($shopping_cart<20) {
    if ($tipo[1] == "cables") {
        echo " No se puede envíar los cables";
    } else {
        echo " Gastos de envío perifèricos 4.99€";
        $shipping_price;
    }

}elseif($shopping_cart>=20&&$shopping_cart<=50){
    echo "El gasto total es de 20 i 50€ , los gastos de envio son 4.99€";

}
