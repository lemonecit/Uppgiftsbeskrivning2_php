<?php include('includes/header.php'); ?>


<main>

    <section class="container">


        <?php include('includes/leftpanel.php'); ?>

    
<aside class="head_content">
<?php

$dateandtime = "Idag är det datum: " . date("Y m d") . " och klockan är: " . date("H:i");
echo $dateandtime;?>

<br>


<?php

$checkDay = date("N");

if ($checkDay == "0") {

    echo"Idag ar det sondag";

}

else {

echo"Tyvarr ar det inte sondag idag";

}



?>

<br>

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

<br>

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

    </section>

</main>


<?php include('includes/footer.php'); ?>