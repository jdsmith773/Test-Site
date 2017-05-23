<?php
$conn = mysqli_connect("localhost", "root", "", "just_janay");

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
