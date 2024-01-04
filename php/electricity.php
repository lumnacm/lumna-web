<html>
<body bgcolor=" #f79fb9 ">
<h1><center><u>ELECTRICITY BILL</center></u></h1>
<form>
<pre>
<form method="post" action="#">
 CONSUMER ID:<input type="number" name="id"><br>
 NAME       :<input type="text" name="name"><br>
UNITS CONSUMED:<input type="number" name="units"><br>
<input type="submit">
<input type="reset">
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$id=$_POST["id"];
$name=$_POST["name"];
$units=$_POST["units"];
echo"<h3> KSEB </h3>";
echo"consumer id:".$id."<br>";
echo"consumer name:".$name."<br>";
echo"consumer id:".$units."<br>";
if($units<100)
{
$amt=$units*3;
}
elseif($units>100 && $units<=200)
{
$amt=$units*4;
}
elseif($units>200 && $units<=300)
{
$amt=$units*5;
}
else
{
$amt=$units*5;
}
echo"<h4> Total :Rs.".($amt)."</h4><br>";
}
?>
</form>
</pre>
</body>
