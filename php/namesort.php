<html>
<body bgcolor="cf9ff7">
<h1><center><u>Name of students</center></u></h1>
<?php
$name=["lumna","diya","hadiya","baanu","nushri"];
$t=$name;
echo "Display using print_r<br>";
print_r($name);
echo "<br><br>";
echo "Sorting using arsort()<br>";
arsort($t);
print_r($t);
echo "<br><br>";
echo "Sorting using asort()<br>";
asort($name);
print_r($name);
?>
</body>
</html>
