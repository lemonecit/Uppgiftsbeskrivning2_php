<?php include('includes/header.php'); ?>


<main>

    <section class="container">


        <?php include('includes/leftpanel.php'); ?>

    
<aside class="head_content">


<article>
    <h2>Villkor</h2>
    <label for="uppgift1">Uppgift1</label>
    <aside class="uppgift" name="uppgift1">


        
        <?php

$dateandtime = "Idag är det datum: " . date("Y m d") . " och klockan är: " . date("H:i");
echo $dateandtime;?>


</aside>

<label for="uppgift2">Uppgift2</label>
    <aside class="uppgift" name="uppgift2">

<?php


$checkDay = date("N");

if ($checkDay == "0") {
    
    echo"Idag ar det sondag";
    
}

else {
    
    echo"Tyvarr ar det inte sondag idag";
    
}



?>
</aside>

<label for="uppgift3">Uppgift3</label>
    <aside class="uppgift" name="uppgift3">
<?php
$t = date("H");



if ($t >= 6 && $t <= 9) {
    
    echo "Nu är det morgon!";
    
}

elseif ($t > 9 && $t<= 12) {
    
    echo "Nu är det förmiddag";
    
}

elseif  ($t > 12 && $t<= 18)

{
    
    echo"Nu är det eftermiddag";
    
}

elseif  ($t > 18 && $t >= 6)

{
    
    echo"Nu är det kväll eller natt";
    
}



?>

</aside>

<label for="uppgift4">Uppgift4</label>
    <aside class="uppgift" name="uppgift4">

<?php
$displaySwedish = date("N");

switch ($displaySwedish) {
    case 0:
        echo "Sondag";
        break;
        case 1:
            echo "Mandag";
            break;
            case 2:
                echo "tisdag";
                break;
                case 3:
                    echo "onsdag";
                    break;
                    case 4:
                        echo "torsdag";
                        break;
                        
                    }
                    
                    ?>
</aside>
</article>
</aside>

</section>

</main>


<?php include('includes/footer.php'); ?>