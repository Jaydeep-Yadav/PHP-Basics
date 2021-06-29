<?php
$title = 'Switch';
include 'includes/header.php';

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo '<h5 class="text-primary">Your favorite color is red!</h5>';
    break;
  case "blue":
    echo '<h5 class="text-primary">Your favorite color is blue!</h5>';
    break;
  case "green":
    echo '<h5 class="text-primary">Your favorite color is green!</h5>';
    break;
  default:
    echo '<h5 class="text-primary">Your favorite color is neither red, blue, nor green!</h5>';
  }
include 'includes/footer.php'
?>
