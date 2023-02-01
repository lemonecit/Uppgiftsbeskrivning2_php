<?php include('includes/header.php'); ?>


<main>

    <section class="container">


        <?php include('includes/leftpanel.php'); ?>

    
<aside class="head_content">




    <span>Hejsan
<?php echo $_GET["fname"]; ?> <?php echo $_GET["sname"]; ?> 
</span>




<form action="forms.php" method="get">
<label for="fName">
    <input type="text" name="fname">
</label>
<label for="sName">
    <input type="text" name="sname">
</label>

<input type="submit" value="Skriv ut ditt förnamn och efternamn!">

</form>

<form action="calculate.php" method="post">

<label for="height" value="langd">
    <input type="text" name="height">
</label>

<label for="width" value="bredd">
    <input type="text" name="width">
</label>

<input type="submit" value="Skriv ut ditt förnamn och efternamn!">

</form>



</aside>

    </section>

</main>


<?php include('includes/footer.php'); ?>