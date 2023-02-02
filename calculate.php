

<?php

if (isset($_POST['height'], $_POST['width'])) {


$a=$_POST['height'];
$b=$_POST['width'];

$warningMezz = "Ledsen, något av de fälten kan ju inte vara tomt, så vänligen fylla och försöka igen!";

if($a == "" or $b == ""){
 
    echo "<span class='warning'>" . $warningMezz . "</span>";

  
  }

  else {
    $sum = ($a*$b);

    echo
    "Längden " . $a . " meter och bredden" . $b . " meter ger en area på " .  $sum . " kvaratmeter";

  }

}


// echo 'längden ' . $a .' meter och bredden ' . $b . ' meter ger en area pa ' .  ($a*$b) . ' kvadratmeter.';


?>

<a href="forms.php">Ga tillbaks till formularsida</a>