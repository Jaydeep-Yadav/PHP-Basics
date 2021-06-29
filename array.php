<?php 
    $title = 'Array';
    include 'includes/header.php';
?>
    <h2 class="text-primary">Arrays using foreach loop</h2>
    <h5>arr = [1,2,34,5,65,67,87];</h5>

<?php

    $arr = [1,2,34,5,65,67,87];
    foreach($arr as $i){
        echo "<h6>$i</h6>";
    }



include 'includes/footer.php'
?>