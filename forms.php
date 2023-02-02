<?php include('includes/header.php'); ?>


<main>

    <section class="container">


        <?php include('includes/leftpanel.php'); ?>

    
<aside class="head_content">
<article>

<h2>Del 4 - Formulär</h2>
    <label for="uppgift1">Del 1 - här skickas man data med GET</label>
    <aside class="uppgift" name="uppgift1">
    <?php


if (isset($_GET['fname'], $_GET['sname'])) {
    
    $namn = htmlspecialchars($_GET['fname']);
    $efternamn = htmlspecialchars($_GET['sname']);
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

    <label for="fName">Förnamn:</label>
    <input type="text" id="fornamn" name="fname">
</aside>
<aside class="fieldRow">
<label for="sName">Efternamn:</label>
    <input type="text" id="efternamn" name="sname">

</aside>
<aside class="submitRow">
<input type="submit" onclick="clearform()" value="Skriv ut">
</aside>
<?php

function clearform(){
    
    document.getElementById('fornamn').value == "";
    document.getElementById('efternamn').value == "";
    
    
}

?>

</form>
</aside>

<label for="uppgift1">Del 2 - här skickas man data med POST</label>
    <aside class="uppgift" name="uppgift1">
    <span>Beräkna arean på en yta genom att ange längd och bredd.</span>
    <form action="calculate.php" method="post">

<aside class="fieldRow">
    <label for="height" value="langd">Längd:</label>
        <input type="text" name="height">
    </label>
</aside>
<aside class="fieldRow">
    <label for="width" value="bredd">Bredd:</label>
    
        <input type="text" name="width">
    </label>
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