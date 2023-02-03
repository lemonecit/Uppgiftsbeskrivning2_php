<?php include('includes/header.php'); ?>


<main>

    <section class="container">


        <?php include('includes/leftpanel.php'); ?>

    
<aside class="head_content">

<article>

<h2>Del 3 - Upprepningar</h2>
    <span>Uppgift1</span>
    <aside class="uppgift" id="uppgift1">

<?php

for($i = 10; $i>=1 ; $i--) {

    echo $i . "<br>";


}
?>

    </aside>
    <span>Uppgift2</span>
    <aside class="uppgift" id="uppgift2">
<?php
$kurser = ["Webbutveckling I", "Introduktion till programmering i JavaScript", "Grafisk teknik för webb", "Webbanvändbarhet", "Databaser", "Webbutveckling II", "Webbdesign för CMS", "Webbutveckling III"];

for ($i=0 ; $i < count($kurser); $i++) {

    echo $kurser[$i] . "<br>";

}

?>

</aside>

<span>Uppgift3</span>
    <aside class="uppgift" id="uppgift3">

<?php

$sortkurser = ["Webbutveckling I", "Introduktion till programmering i JavaScript", "Grafisk teknik för webb", "Webbanvändbarhet", "Databaser", "Webbutveckling II", "Webbdesign för CMS", "Webbutveckling III"];
sort($sortkurser);


for ($i=0 ; $i < count($sortkurser); $i++) {

    echo $sortkurser[$i] . "<br>";

}



?>
</aside>
</article>
</aside>

    </section>

</main>


<?php include('includes/footer.php'); ?>