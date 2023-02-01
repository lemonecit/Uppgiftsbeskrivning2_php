<?php include('includes/header.php'); ?>


<main>

    <section class="container">


        <?php include('includes/leftpanel.php'); ?>

    
<aside class="head_content">

<?php

for($i = 10; $i>=1 ; $i--) {

    echo $i . "</br>";


}
?>

<?php
$kurser = ["Webbutveckling I", "Introduktion till programmering i JavaScript", "Grafisk teknik för webb", "Webbanvändbarhet", "Databaser", "Webbutveckling II", "Webbdesign för CMS", "Webbutveckling III"];

for ($i=0 ; $i < count($kurser); $i++) {

    echo $kurser[$i] . "<br/>";

}

?>

<?php

$sortkurser = ["Webbutveckling I", "Introduktion till programmering i JavaScript", "Grafisk teknik för webb", "Webbanvändbarhet", "Databaser", "Webbutveckling II", "Webbdesign för CMS", "Webbutveckling III"];
sort($sortkurser);


for ($i=0 ; $i < count($sortkurser); $i++) {

    echo $sortkurser[$i] . "<br/>";

}



?>

</aside>

    </section>

</main>


<?php include('includes/footer.php'); ?>