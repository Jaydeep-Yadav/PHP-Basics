<?php
$title = 'Do-while';
include 'includes/header.php';

$x = 1;

echo '<h5>while for x=1 to x<5</h5>';

while($x <= 5) {
  echo '<h5 class="text-success">The number is:'.$x.'</h5>';
  $x++;
}

include 'includes/footer.php'
?>