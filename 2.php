



<?php // PART 1 
$price = file_get_contents('./price.txt', true);
//sinon
$price = file_get_contents('./price.txt', FILE_USE_INCLUDE_PATH);

//setting vars
global $check;


if ($_POST['action'] == "buy") {
    if (($_POST['bareelsWanted'] * $price) < $_POST['money']) {
        echo "Check one for buying ";
        $check = 1;
    }
    else{ 
        echo "Bareels wanted can be bought, money is missing.";
        $check = 0;
    }
}


if ($_POST['action'] == "sell") {
    if (($_POST['bareels'] > 0) && ($_POST['bareelsWanted'] <= $_POST['bareels'])) {
        echo "Check one for selling ";
        $check = 2;
    }
    else{ 
        echo "Bareels wanted can be bought, money is missing.";
        $check = 0;
    }
}
?>






<h1>

<?php // PART2 changing price
if ($check == 1){
    $price = file_get_contents('./price.txt', true);
    //sinon
    $price = file_get_contents('./price.txt', FILE_USE_INCLUDE_PATH);
    
    echo(" This buying action will make the price rise from ");
    echo $price;
    echo(" to ");
    
    $myfile = fopen("price.txt", "w") or die("Unable to open file!");
    $txt = $price + ($_POST['bareelsWanted'] * 20);
    fwrite($myfile, $txt);
    fclose($myfile);
    echo $txt;
    $price = $txt;
} ?>

<?php if ($check == 2){
    $price = file_get_contents('./price.txt', true);
    //sinon
    $price = file_get_contents('./price.txt', FILE_USE_INCLUDE_PATH);
    
    echo(" This buying action will make the price rise from ");
    echo $price;
    echo(" to ");
    
    $myfile = fopen("price.txt", "w") or die("Unable to open file!");
    $txt = $price - ($_POST['bareelsWanted'] * 20);
    fwrite($myfile, $txt);
    fclose($myfile);
    echo $txt;
    $price = $txt;
} ?>


</h1>










<?php // PART 3 REDIRECTION VERS HOME 
if ($check == 1): ?>
  <form action="1.php" method="post">


    <input value="<?php echo($_POST['money'] - ($price * $_POST['bareelsWanted'])); ?>" name="money" hidden>
    
    <input value="<?php echo($_POST['bareels'] + $_POST['bareelsWanted']); ?>" name="bareels" hidden>

    <button type="submit" style="width: 80%; height: 400px; border: 5px solid black; background-color: white;"><h1>Return on home page</h1></button>


  </form>
 
<?php endif; ?>


<?php if ($check == 2): ?>
  <form action="1.php" method="post">


    <input value="<?php echo($_POST['money'] + ($price * $_POST['bareelsWanted'])); ?>" name="money" hidden>
    
    <input value="<?php echo($_POST['bareels'] - $_POST['bareelsWanted']); ?>" name="bareels" hidden>

    <button type="submit" style="width: 80%; height: 400px; border: 5px solid black; background-color: white;">Return on home page</button>


  </form>
 
<?php endif; ?>

































<?php if ($check == 0): // Not enough money ?>

<form action="1.php" method="post">

    <input value="<?php echo $_POST['money']; ?>" name="money" hidden>
        <input value="<?php echo $_POST['bareels']; ?>" name="bareels" hidden>

    <button type="submit" style="width: 80%; height: 400px; border: 5px solid black; background-color: white;">Return home menu</button>

</form>

<?php endif; ?>

