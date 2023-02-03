<?php include('includes/header.php'); ?>


<main>

    <section class="container">


        <?php include('includes/leftpanel.php'); ?>

    
<aside class="head_content">
<article>

<h2>Del 4 - Formulär</h2>
    <span>Del 1 - här skickas man data med GET</span>
    <aside class="uppgift" id="uppgift1">
    <?php


if (isset($_GET['fornamn'], $_GET['efternamn'])) {
    
    $namn = htmlspecialchars($_GET['fornamn']);
    $efternamn = htmlspecialchars($_GET['efternamn']);
    $warningMezz = "Ledsen, något av de fälten kan ju inte vara tomt, så vänligen fylla i och försöka igen!";
    
    if($namn == "" or $efternamn == ""){
        
        echo "<span class='warning'>" . $warningMezz . "</span>";
        
        
    }
    
    
    else {
        
        
        $samman = $namn . " " . $efternamn;
        echo "Hejsan, kul att se dig," . $samman;
        
        
    }
}
?> 

<form action="forms.php" method="get">

        <aside class="fieldRow">

                <label for="fName">
                Förnamn:
                </label>
                <input type="text" id="fName" name="fornamn">
        </aside>
<aside class="fieldRow">
<label for="sName">Efternamn:</label>
    <input type="text" id="sName" name="efternamn">

</aside>
<aside class="submitRow">
<input type="submit" onclick="clearform()" value="Skriv ut">
</aside>
  

</form>
</aside>

    
    <span>
        Del 2 - här skickas man data med POST
    </span>
   
    <aside class="uppgift" id="uppgift2">

    <span>
        Beräkna arean på en yta genom att ange längd och bredd.
    </span>
    
    <form action="calculate.php" method="post">

    <aside class="fieldRow">
        <label for="height">
            Längd:
        </label>
             <input type="text" id="height" name="height">
    
    </aside>


    <aside class="fieldRow">
        <label for="width">
            Bredd:
        </label>
             <input type="text" id="width" name="width">
        
    </aside>

    <aside class="submitRow">
          <input type="submit" value="Beräkna">
    </aside>
</form>

</aside>


</article>

</aside>

</section>

</main>


<?php include('includes/footer.php'); ?>