<!DOCTYPE html>
<head>
    <title>Calculating Meals Tip - Anita Jalili-Kalhori</title>
</head>
<body>

<?php

echo "Calculating Meals Tip<br><br><br>";


// variables
$cash_on_hand = 40; 
$meal = 32; 
$tip_percent = 17; 
$cost = 0;

echo "Cash on hand: $$cash_on_hand<br>";
echo "Meal cost: $$meal<br><br>";

// calculation 
$cost = $meal + ($meal * ($tip_percent / 100));

// display
while ($cost <= $cash_on_hand) {
    echo "I can afford a tip of $tip_percent%, for Total Cost: $" . number_format($cost, 2) . "<br>";

    // iteration
    $tip_percent++;

    // recalculation
    $cost = $meal + ($meal * ($tip_percent / 100));
}

echo "<br>End of calculation :)";

?>

</body>
</html>
