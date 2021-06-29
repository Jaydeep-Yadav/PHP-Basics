<?php
$title = 'For loop';
include 'includes/header.php';

echo '<h5> for loop x=1 to x<=5</h5>';

for($i=1;$i<=5;$i++){
    echo '<h5 class="text-success">x : '.$i.'</h5>';
 
}

include 'includes/footer.php'
?>