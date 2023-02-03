<?php include('includes/header.php'); ?>


<main>

    <section class="container">


        <?php include('includes/leftpanel.php'); ?>

    
        <aside class="head_content">
            <article>

    <h2>
        Del 5
    </h2>
    
    <span>
        Inläsning av extern textfil
    </span>
            <aside class="uppgift" id="uppgift1">

                    <?php
                    $myfile = fopen("courses.txt", "r") or die("Unable to open file!");



                    $lines = file('courses.txt') or die("Unable to open file!");
                    $count = 0;
                    echo "<ul>";
                    foreach($lines as $line ) {

                    echo "<li class='row'>";
                    echo $line;
                    echo "</li>";

                    }

                    echo "</ul>";

                    ?>

                </aside>
            </article>
        </aside>
    </section>

</main>


<?php include('includes/footer.php'); ?>