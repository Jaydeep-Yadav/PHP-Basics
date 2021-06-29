<?php
$title = 'If else';
include 'includes/header.php';

$t = date("H");

echo '<h5>If Time < 8 PM : greet Good Day <br/> else Good Night</h5>';

if ($t < "20") {
    echo '<h4 class="text-primary">Have a good day!</h4>';
} else {
    echo '<h4 class="text-primary">"Have a good night!</h4>';
}


include 'includes/footer.php';
?>