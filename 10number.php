
<html>
<body>
<?php
$start = 1;
$end = 10;
$sum = 0;
echo "Sum of 10 numbers :"."</br>";
for ($i = $start; $i <= $end; $i++)
{
$sum += $i;
if($i != $end)
{
echo $i.'+';
}
else
{
echo $i;
}
}
echo ' = '.$sum;
return 0;
?>
</body>
</html>
