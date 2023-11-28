<?php
    $price = 0;
   
    // An if the statement with no other class 
    if($price<=0){
        $message= 'Price must be greater than zero';
    }
    echo "<div><h3>Meassage: $message</h3></div>";
?>


<?php
    $first_name = "Thiha";
    // An if statement with an else clause 
    if(empty($first_name)){
        $message= 'You must enter your first name';
    }else{
        $message= 'Hello ' .$first_name. '!';
    }
    echo "<div><h3> $message</h3></div>";
?>

<?php
    $investment = 10000;
    // An if statement with a compound condition expression 
    if(empty($investment)||!is_numeric($investment)||$investment <= 0){
        $message = 'Investment must be a valid number greater than zero.';
    }
    // echo "<div><h3> $message </h3></div>";
?>

<?php
    $investment = 10000;
    // If statement with else if and else clauses 
    if(empty ($investment)){
        $message = 'Investment is a requirement field. ';
    }else if(!is_numeric($investment)){
        $message = 'Investment must be a valid number.';
    }else if($investment <= 0){
        $message = 'Investment must be greater than zero.';
    }else{
        $message = 'Investment is valid!';
    }
    echo "<div><h3> $message </h3></div>";

?>

<!-- A nested if statement  -->
<?php
    $month = 36;

    if(empty($month)||!is_numeric($month)||$month<=0){
        $message='Please enter a number of months greater than zero.';
    }else{
        $year=$month/12;
        if($year>1){
            $message= 'A long-term investment.';
        }else{$message= 'A short-term investment.';}
    }
    echo "<div><h3> $message </h3></div>";
?>