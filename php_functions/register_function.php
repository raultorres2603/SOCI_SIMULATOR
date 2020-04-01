<?php
include ("../ext/conn.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$position = $_POST["position"];
$input1 = $_POST["input1"];
$input2 = $_POST["input2"];

if ($position == "first") {
  $sql = "SELECT iduser FROM user WHERE name_user = '".$input1."' AND surname_user = '".$input2."'";
  $res = mysqli_query($conn,$sql);
  $ext = mysqli_fetch_assoc($res);
  $response = $ext["iduser"];

  if (is_numeric($response)) {
    echo(0);
  } else {
    echo(1);
  }
}

 ?>
