<?php include('includes/header.php'); ?>


<main>

<section class="container">

<?php include('includes/leftpanel.php'); ?>

    
<aside class="head_content">
<article>

<h2>Del 1 - variabler</h2>
<label for="uppgift1">Utskrift:</label>
    <aside class="uppgift" name="uppgift1">

    <?php
$name = "Pierre LEMON";
$mailadress = "pile2100@student.miun.se";
$age = 33;

echo "Hej! Mitt namn är $name" . " och är $age år gammalt. " .
" och kan nås på följande e-post:" . "<a href='mailto:$mailadress'> " . "Skicka mail" . "</a>";


?>
</span>

</aside>

    </section>

</main>


<?php include('includes/footer.php'); ?>