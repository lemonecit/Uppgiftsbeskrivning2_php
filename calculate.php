<?php include('includes/header.php'); ?>



<main>

    <section class="container">


        <?php include('includes/leftpanel.php'); ?>
   
    
        <aside class="head_content">

        <article>

    <span>Beräkna area</span>
    <aside class="uppgift" id="uppgift1">

    <?php

    if (isset($_POST['height'], $_POST['width'])) {


        $a=$_POST['height'];
        $b=$_POST['width'];
        
        $warningMezz = "Ledsen, något av de fälten kan ju inte vara tomt, så vänligen fylla och försöka igen!";
        
        if($a == "" or $b == ""){
            echo "<aside class='fieldRow'>";
            echo "<span class='warning'>" . $warningMezz . "</span>";
            echo "</aside>";
          
          }
        
          else {
            $sum = ($a*$b);
            echo "<aside class='fieldRow'>";
            echo
            "Längden " . $a . " meter och bredden " . $b . " meter ger en area på " .  $sum . " kvaratmeter";
            echo "</aside>";
          }
        
        }
     
        
        
        
        ?>
        
        <a href="forms.php">Gå tillbaks till formulärsida</a>
        

          </aside>
     
        </article>
</aside>

</section>

</main>


<?php include('includes/footer.php'); ?>