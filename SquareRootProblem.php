<?php
/**
 * Created by PhpStorm.
 * User: d1Av0
 * Date: 06-Feb-17
 * Time: 9:59 AM
 * Square and Sum of 2 Numbers
 */

$number1 = 11.2;
$number2 = 23.3;


?>
<style>
table,tr,td{
    border: 2px solid;
}

</style>
<h3>Square Root Problem</h3>
<h5> Square and Sum of 2 Numbers</h5>

<table style="border: 3px solid">
  <tr>
    <th>Number =<?php echo $number1; ?></th>
      <th>Number = <?php echo $number2; ?></th>


  </tr>
  <tr>
      <td>Square <?php echo pow($number1,2); ?></td>
      <td>SquareNum2 <?php echo pow($number2,2); ?></td>

      <td>Sum (Num 1 + Num 2) <?php echo $number1+$number2?></td>
   </tr>
