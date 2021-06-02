<?php

$email = $_POST['email'];


if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
  // echo("Email válido!");
} else {
  echo("Email inválido!");
}
?> 