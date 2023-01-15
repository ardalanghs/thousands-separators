<?php

$_defines['currency']   =   [
	'code'                 => 'T', // it can use after and before price
	'sign'                 => 'تومان', // it can use after and before price
	'position'             => 'after', // it declares the position of sign and code
	'separator'            => ',', // it declares the seperator sign
	'decimal_point'        => '.', // it declares the decimal_point sign
	'decimals'             => '0', // it declares the decimals
	'currency_rial_rate'   => 10 // it declares currency_rial_rate when we have 2 currency
];

function _price($price, $show_currency = true)
{
    global $_defines;
    if ($show_currency === true) {
        if ($_defines['currency']['position'] == 'after') {
            return number_format($price, $_defines['currency']['decimals'], $_defines['currency']['decimal_point'], $_defines['currency']['separator']) . ' <font class="my-currency before">' . $_defines['currency']['sign'] . '</font>';
        } else {
            return '<font class="my-currency after">' . $_defines['currency']['sign'] . '</font>' . number_format($price, $_defines['currency']['decimals'], $_defines['currency']['decimal_point'], $_defines['currency']['separator']);
        }
    } else {
        return number_format($price);
    }
}

?>
