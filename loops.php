<?php include('includes/header.php'); ?>


<main>

    <section class="container">


        <?php include('includes/leftpanel.php'); ?>

    
<aside class="head_content">

<article>

<h2>Del 3 - Upprepningar</h2>
    <label for="uppgift1">Uppgift1</label>
    <aside class="uppgift" name="uppgift1">

<?php

for($i = 10; $i>=1 ; $i--) {

    echo $i . "</br>";


}
?>

    </aside>
    <label for="uppgift2">Uppgift2</label>
    <aside class="uppgift" name="uppgift2">
<?php
$kurser = ["Webbutveckling I", "Introduktion till programmering i JavaScript", "Grafisk teknik för webb", "Webbanvändbarhet", "Databaser", "Webbutveckling II", "Webbdesign för CMS", "Webbutveckling III"];

for ($i=0 ; $i < count($kurser); $i++) {

    echo $kurser[$i] . "<br/>";

}

?>

</aside>

<label for="uppgift3">Uppgift3</label>
    <aside class="uppgift" name="uppgift3">

<?php

$sortkurser = ["Webbutveckling I", "Introduktion till programmering i JavaScript", "Grafisk teknik för webb", "Webbanvändbarhet", "Databaser", "Webbutveckling II", "Webbdesign för CMS", "Webbutveckling III"];
sort($sortkurser);


for ($i=0 ; $i < count($sortkurser); $i++) {

    echo $sortkurser[$i] . "<br/>";

}



?>
</aside>
</article>
</aside>

    </section>

</main>


<?php include('includes/footer.php'); ?>