<?php include('includes/header.php'); ?>


<main>

    <section class="container">


        <?php include('includes/leftpanel.php'); ?>

    
<aside class="head_content">


    <article>
        <h1>Villkor</h1>
            <span>
                Uppgift1
            </span>
            <aside class="uppgift" id="cuppgift1">

                    <?php
                    $dateandtime = "Idag är det datum: " . date("Y m d") . " och klockan är: " . date("H:i");
                    echo $dateandtime;
                    ?>
        </aside>

            <span>
                Uppgift2
            </span>
        <aside class="uppgift" id="cuppgift2">

    <?php
        $checkDay = date("N");

        if ($checkDay == "0") {
            
            echo"Idag är det söndag";
        }

        else {
            
            echo"Tyvärr är det inte söndag idag";
            
        }
    ?>

    </aside>

    <span>
        Uppgift3
    </span>
    
        <aside class="uppgift" id="cuppgift3">
    <?php
    $t = date("H");



    if ($t >= 6 && $t <= 9) {
        
        echo "Nu är det morgon!";
        
    }

    elseif ($t > 9 && $t<= 12) {
        
        echo "Nu är det förmiddag";
        
    }

    elseif  ($t > 12 && $t<= 18)

    {
        
        echo"Nu är det eftermiddag";
        
    }

    elseif  ($t > 18 && $t >= 6)

    {
        
        echo"Nu är det kväll eller natt";
        
    }



    ?>

    </aside>

        <span>
            Uppgift4
        </span>

            <aside class="uppgift" id="cuppgift4">   

                <?php
                $displaySwedish = date("N");

                switch ($displaySwedish) {
                case 0:
                echo "Söndag";
                break;
                case 1:
                echo "Måndag";
                break;
                case 2:
                echo "tisdag";
                break;
                case 3:
                echo "onsdag";
                break;
                case 4:
                echo "torsdag";
                break;
                case 5:
                echo "Fredag";
                break;
                case 6:
                echo "Lördag";
                break;

                }

                ?>
            </aside>

    </article>
</aside>

</section>

</main>


<?php include('includes/footer.php'); ?>