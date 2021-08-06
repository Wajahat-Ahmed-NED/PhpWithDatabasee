<!DOCTYPE html>
<html>
<body>

<?php

$shop = ['cereal' => "5.00", 'coffee beans' => "2.50", 'bananas' => "3.50", 'onion' => "1.00",
'lettuce' => "2.40", 'tomato' => "1.00"];
$finalPrice = 0;


print_r($shop);

foreach($shop as $product => $amount)
{ echo "<br>" . $product . " costs $" . $amount;
$finalPrice += $amount;
}
echo "<br> The total price of your items is $" . $finalPrice; 

?>

</body>
</html>
