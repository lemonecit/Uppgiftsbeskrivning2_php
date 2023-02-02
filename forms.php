<?php include('includes/header.php'); ?>


<main>

    <section class="container">


        <?php include('includes/leftpanel.php'); ?>

    
<aside class="head_content">


  <?php


    if (isset($_GET['fname'], $_GET['sname'])) {

                $namn = htmlspecialchars($_GET['fname']);
                $efternamn = htmlspecialchars($_GET['sname']);
                $warningMezz = "Ledsen, något av de fälten kan ju inte vara tomt, så vänligen fylla och försöka igen!";

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
<label for="fName">
    <input type="text" id="fornamn" name="fname">
</label>
<label for="sName">
    <input type="text" id="efternamn" name="sname">
</label>

<input type="submit" onclick="clearform()" value="Skriv ut">

<?php

function clearform(){

    document.getElementById('fornamn').value == "";
    document.getElementById('efternamn').value == "";


}

?>

</form>

<form action="calculate.php" method="post">

<label for="height" value="langd">
    <input type="text" name="height">
</label>

<label for="width" value="bredd">
    <input type="text" name="width">
</label>

<input type="submit" value="Beräkna">

</form>



</aside>

    </section>

</main>


<?php include('includes/footer.php'); ?>