<?php

$num=$_POST['text1'];
$sum=0;
$temp=$num;
while($temp>0)
{
$rem=$temp%10;
$sum=$sum+$rem*$rem*$rem;
$temp=$temp/10;
}
if($num==$sum)
{
echo "this is Armstrong number";
}
else
{
echo "this is not an armstrong number";
}

?>