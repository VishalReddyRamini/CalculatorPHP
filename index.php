<? php
require_once 'calculator.php';

$calc = new calculator();

$calc->add(10);
$calc->subtract(2);

echp $calc->getTotal();
?>