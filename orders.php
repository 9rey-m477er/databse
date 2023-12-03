<!DOCTYPE html>
<html>
<body>

<?php
$txt = "PHP";

echo "<h1> I love $txt!</h1>";
echo "here is the dollar sign - $";
echo "\n\n";

for ($i = 0; $i < 10; $i++)
{
	if($i % 2)
	echo "$i </br>";
    else
    	echo "<b>$i</b><br>";
}
for ($i = 0; $i < 6; $i++)
{
	echo "<h$i> This is heading $i</h$i>";
}

$colors = array("Black","White", "Green", "Blue");
foreach($colors as $n){
echo "Is $n your favorite color? <br>";
}
function show($name, $color){
	echo "The name $name reminds me of $color <br>";
	}
show("Stephen", "Green");

function add(int $x, int $y){
$z = $x + $y;
return $z;
}
echo "5+7=";
echo add(5,7);
?>

</body>
</html>