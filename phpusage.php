<?php
    // display html using echo 
    $name = "Ma Ma";
    $age = 25;

    echo "<div><h2>My mama name is $name. Age is $age. <br></h2></div>"
?>

<!-- display php in html -->
<div>
    <p>My name is <?php echo $name ?>. My age is <?php echo $age ?> </p>

    <p>My name is <?= $name ?>. My age is <?= $age ?> </p> 
     <!-- only one variable  -->
</div>
