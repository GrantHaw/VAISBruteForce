<?php
$SECRET = 'dragon';

$guess = isset($_GET['pw']) ? trim($_GET['pw']) : '';

if ($guess === $SECRET) {
  echo 'Password accepted!';
} else {
  echo 'Incorrect';
}
?>
