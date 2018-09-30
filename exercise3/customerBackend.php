<style><?php include './style.css'; ?></style>
<?php
/*
customerBackend.php
Author: Clare Meyer
Lab: 04; Exercise: 03
processes the purchase and prints reciept
 */

 /*getting all the info the user inputted from customerFrontend.html*/
 $user = $_POST["username"];
 $pass = $_POST["password"];

 $shipping = $_POST["shipping"];
 $quantMost = $_POST["most"];
 $quantMiddle = $_POST["middle"];
 $quantLeast = $_POST["least"];

 /*calculations for reciept*/
 $payMost = $quantMost * 1000000.00;
 $payMiddle = $quantMiddle * 46320.05;
 $payLeast = $quantLeast * 0.05;

 $totalQuant = $quantMost + $quantMiddle + $quantLeast;
 $total = $shipping + $payMost + $payMiddle + $payLeast;

 /*prints welcome, username and password*/
 echo "Welcome" . "</br>";
 echo "Username: " . $user . "</br>";
 echo "Password: " . $pass . "</br>";
 echo "</br>";
 echo "Reciept for payment: " . "</br>";
 echo "</br>";

 /*formats populates and prints table with reciept information*/
 echo "<table border='1' class=php>
  <tr>
    <th class=php></td>
    <th class=php>Quantity</td>
    <th class=php>Cost Per Item</td>
    <th class=php>Sub Total</td>
  </tr>
  <tr>
    <td class=php>Item One</td>
    <td class=php>$quantMost</td>
    <td class=php>$1,000,000.00</td>
    <td class=php>$ $payMost.00 </td>
  </tr>
  <tr>
    <td class=php>Item Two</td>
    <td class=php>$quantMiddle</td>
    <td class=php>$46,320.05</td>
    <td class=php>$ $payMiddle</td>
  </tr>
  <tr>
    <td class=php>Item Three</td>
    <td class=php>$quantLeast</td>
    <td class=php>$0.05</td>
    <td class=php>$ $payLeast</td>
  </tr>
  <tr>
    <td class=php>Shipping</td>
    <td class=php> </td>
    <td class=php>$$shipping</td>
    <td class=php>$ $shipping.00</td>
 </tr>
 <tr>
  <td class=php>Total</td>
  <td class=php>$totalQuant</td>
  <td class=php> </td>
  <td class=php>$ $total</td>
 </table>";

 ?>
