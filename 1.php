<!-- fixed______________________________________________ -->
<div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; background-color: white; position: fixed; width: 100%; top: 0; left: 0;">

<div style="display: flex; flex-direction: row; align-items: center; justify-content: space-around; background-color: white; width: 50%;">

  <div style="background-color: white; width: 25%; height: 50px; border-radius: 17%; display: flex; flex-direction: row; border: 5px solid black; margin-left: 10px;"><p>MONEY : <?php echo $_POST['money']; ?></p></div>
  <div style="background-color: white; width: 25%; height: 50px; border-radius: 17%; display: flex; flex-direction: row; border: 5px solid black; margin-left: 10px;"><p>SHARES OWN : <?php echo $_POST['bareels']; ?></p></div>

</div>

  <h1>ModoVodo</h1>
  
</div>
<!-- fixed______________________________________________ -->








<div id="tuto" style=" position: fixed; bottom: 0; margin-top: 20px; display: flex; flex-direction: column; align-items: center; justify-content: center; background-color: white; border: 5px solid black; border-radius: 17%; padding: 10px;">

<div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; width: 100%;">
  <h1>Tutorial - How to play - Please read attentivly</h1>
  <button style="border-radius: 17%; border: 5px solid black; background-color: white; width: 120px; height: 40px; color: black;" onclick="tuto()">Close</button>
</div>

<p style="display: flex; align-items: center; justify-content: center; width: 100%;"><b>- Welcome in Modovodo real trading simulator or hedgefund simlator (a company that can influence the market by buying and selling a share). In this simulator you can experiment your trading strategies. In this simulator when you buy one share, you are rising the price of 20/ comparing to its original price. And when you are selling the opposite operation happens. But remember if you win money, someone or some people will have lost money, and oppositly, so be patient and reactive. To not loose your progression, do not close this tab, and do not worry there are no cookies, no tracking as you see it. To see the price movement, refresh the page, and click on resend the formular otherwise your progression will be lost.</b></p>
<p style="display: flex; align-items: center; justify-content: center; width: 100%;">- Firstval to buy and sell the share ensure that your money is lower the price that's appear. If your money is inferior to the price written, close this tab and open this site web. Then select the number of shares you want, but again check that / price multiply the shares wanted / fits your money. Then select your action 'buy' or 'sell' then click send to the market.</p>
<p style="display: flex; align-items: center; justify-content: center; width: 100%;">- To send a news to the other traders, select the sentence wanted, then click 'send to the world wide web'.</p>
<p style="display: flex; align-items: center; justify-content: center; width: 100%;">- Lastly, Analyze the price, then when it goes down, buy, if goes up, sell. If somebody tells you to sell, buy as you can :) trust me really</p>
</div>






<div style="background-color: blue; height: 300px; width: 100%; color: white; display: flex; flex-direction: row; align-items: center; justify-content: center;">

<h1 style="height: fit-content; width: fit-content; font-size: 100px;">
<p style="font-size: 10px;">The price is </p>
<?php 
$price = file_get_contents('./price.txt', true);
//sinon
$price = file_get_contents('./price.txt', FILE_USE_INCLUDE_PATH);

echo $price;

?>

</h1>

</div>

<div style="display: flex; flex-direction: column; align-items: center; justify-content: space-around; width: 100%;">


</div>

<form action="2.php" method="post" style="display: flex; flex-direction: row; align-items: center; justify-content: space-around; width: 100%; ">

<div style="display: flex; flex-direction: column; width: 50%; height: fit-content;">
<h1>
"
<?php 

$random = rand(1, 6);

if ($random == 1) {
  echo "Be greedy when others are fearful, and fearful when others are greedy - Warren Buffett";
}

if ($random == 2) {
    echo "If you handle the power that others have on you, and the power that you have on others, you will find the key of trading - Louann Naccache";
}

if ($random == 3) {
  echo "Buy when the share price is decreasing, and sell when the share price is rising  - Warren Buffett";
}

if ($random == 4) {
  echo "When a share price don't move, make it moves yourself (by buying and selling) - Louann Naccache";
}

if ($random == 5) {
  echo "Faillures are the way to progress - Ray Dalio";
}

if ($random == 6) {
  echo "The market is never wrong, but people opinions frequently do - Jesse Livermore";
}

?>
"

</h1>
</div>



<div style="border: 5px solid black; margin-top: 10px; height: 100px; padding: 20px; border-radius: 17%; background-color: blue; display: flex; flex-direction: column; align-items: center; justify-content: space-around; width: 40%;">

    <input type="number" name="bareelsWanted" placeholder="Bareels In Action">

    <select name="action">
        <option value="buy">Buy</option>
        <option value="sell">Sell</option>
    </select>

        <input value="<?php echo $_POST['money']; ?>" name="money" hidden>
        <input value="<?php echo $_POST['bareels']; ?>" name="bareels" hidden>

    <button type="submit">Send to market</button>

</div>

</form>



<!-- COMMENTS -->
<div style="display: flex; flex-direction: column; align-items: center; justify-content: flex-start; width: 100%; margin-top: 30px;">


<div style="display: flex; flex-direction: row; align-items: center; width: 100%;">
<h1> Comments </h1>

</div>






<!-- COMMENT -->
<div style="display: flex; align-items: center; justify-content: flex-start; margin-top: 30px; flex-direction: column; width: 100%;">




<!-- TOP -->
<div style="display: flex; justify-content: flex-start; flex-direction: row; align-items: center; width: 100%;">
<img src="WALL-6.png" alt="Cercle mathematiques" style="height: 25px; width: 25px; border-radius: 50%;">
<h2 style="margin-left: 10px;">Louann Futur - Fan user</h2>
</div>


<!-- TEXT -->
<div style="display: flex; justify-content: flex-start; flex-direction: column; align-items: center; width: 100%;">
<p style="display: flex; justify-content: flex-start; flex-direction: column; width: 100%;">When your decisions (buy or sell) make move the price, like in this hedgefund simulator, and you don't know what to do, <b>just buy!</b> </p>
</div>




</div>







<!-- COMMENT -->
<div style="display: flex; align-items: center; justify-content: flex-start; margin-top: 30px; flex-direction: column; width: 100%;">




<!-- TOP -->
<div style="display: flex; justify-content: flex-start; flex-direction: row; align-items: center; width: 100%;">
<img src="WALL-4.png" alt="Globe" style="height: 25px; width: 25px; border-radius: 50%;">
<h2 style="margin-left: 10px;">User of the world</h2>
</div>


<!-- TEXT -->
<div style="display: flex; justify-content: flex-start; flex-direction: column; align-items: center; width: 100%;">
<p style="display: flex; justify-content: flex-start; flex-direction: column; width: 100%;"> 

<?php 
$com = file_get_contents('./com.txt', true);
//sinon
$com = file_get_contents('./com.txt', FILE_USE_INCLUDE_PATH);

echo $com;

?> </p>
</div>




</div>














<!-- COMMENT -->
<div style="display: flex; align-items: center; justify-content: flex-start; margin-top: 30px; flex-direction: column; width: 100%;">



<!-- TOP -->
<div style="display: flex; justify-content: flex-start; flex-direction: row; align-items: center; width: 100%;">
<img src="WALL-2.png" alt="Balle de basket" style="height: 25px; width: 25px; border-radius: 50%;">
<h2 style="margin-left: 10px;">John - Fan user</h2>
</div>


<!-- TEXT -->
<div style="display: flex; justify-content: flex-start; flex-direction: column; align-items: center; width: 100%;">
<p style="display: flex; justify-content: flex-start; flex-direction: column; width: 100%;">A famous quote of Warren Buffett is "Be greedy when others are fearful, and fearful when others are greedy", and that's exactly what this game teachs.</p>
</div>




</div>















<!-- COMMENT -->
<div style="display: flex; align-items: center; justify-content: flex-start; margin-top: 30px; flex-direction: column; width: 100%;">




<!-- TOP -->
<div style="display: flex; justify-content: flex-start; flex-direction: row; align-items: center; width: 100%;">
<img src="WALL-3.png" alt="Texte bird" style="height: 25px; width: 25px; border-radius: 50%;">
<h2 style="margin-left: 10px;">The Birdy Fly - Blogger</h2>
</div>


<!-- TEXT -->
<div style="display: flex; justify-content: flex-start; flex-direction: column; align-items: center; width: 100%;">
<p style="display: flex; justify-content: flex-start; flex-direction: column; width: 100%;">My strategy is actually to play in rush hours (6p.m.), and not close the tab, go to work and so on, then I check the price and rebuy or resell as it moves.</p>
</div>




</div>






<!-- COMMENT -->
<div style="display: flex; align-items: center; justify-content: flex-start; margin-top: 30px; flex-direction: column; width: 100%;">




<!-- TOP -->
<div style="display: flex; justify-content: flex-start; flex-direction: row; align-items: center; width: 100%;">
<img src="WALL.png" alt="Micro" style="height: 25px; width: 25px; border-radius: 50%;">
<h2 style="margin-left: 10px;">Wall Street</h2>
</div>


<!-- TEXT -->
<div style="display: flex; justify-content: flex-start; flex-direction: column; align-items: center; width: 100%;">
<p style="display: flex; justify-content: flex-start; flex-direction: column; width: 100%;">This real trading simulator is very useful for day traders. Many traders of the world test their strategies in this virtual market. The strategy that is the best among the variety of strategy possible, will be the one that is the most profitable, and loosing less.</p>
</div>




</div>










<!-- COMMENT -->
<div style="display: flex; align-items: center; justify-content: flex-start; margin-top: 30px; flex-direction: column; width: 100%;">




<!-- TOP -->
<div style="display: flex; justify-content: flex-start; flex-direction: row; align-items: center; width: 100%;">
<img src="WALL-4.png" alt="Globe" style="height: 25px; width: 25px; border-radius: 50%;">
<h2 style="margin-left: 10px;">New comment (this will appear as a comment of 'User of the world')</h2>
</div>


<!-- TEXT -->
<div style="display: flex; justify-content: flex-start; flex-direction: row; align-items: center; width: 100%;">
<form action="2com.php" method="post">
  

    <select name="action">
        <option value="The market is in recession, don't buy and sell as you can. The market will krash!">The market is in recession, don't buy and sell as you can. The market will krash!</option>
        <option value="Time to buy! The market price is very good these times, probably tomorrow things will change! Who knows!">Time to buy! The market price is very good these times, probably tomorrow things will change! Who knows!</option>
        <option value="Hello, I'm having troubles to sell my shares, can someone rise the price for me?">Hello, I'm having troubles to sell my shares, can someone rise the price for me?</option>
     
        <option value="Hello I'm Elon M., I think that in fact the market price can't be under this price. You know what this means (big profit)!">Hello I'm Elon, I think that in fact the market price can't be under this price. You know what this means (big profit)!</option>
        <option value="Hello I'm Elon M., always when I make announcements the price rise (because people buy), so this is an announcement, let's make the price rise!">Hello I'm Elon M., always when I make announcements the price rise (because people buy), so this is an announcement, let's make the price rise!</option>
     
        <option value="X stock to the moon!">X stock to the moon!</option>
        <option value="Warning, X company have a lots of debt!">Warning, X company have a lots of debt!</option>
        <option value="Black Roc hedgefund is interested by the X company, and prepare 200M investment">Black Roc hedgefund is interested by the X company, and prepare 200M investment</option>
    
        <option value="If you're in doubt in trading, or always loose, just check out the tutorial section 'TRADING'">If you're in doubt in trading, or always loose, just check out the tutorial section 'TRADING'</option>
        <option value="Let's invest together X stock at 6pm New York time zone">Let's invest together X stock at 6pm New York time zone</option>
    
    
    </select>

        <input value="<?php echo $_POST['money']; ?>" name="money" hidden>
        <input value="<?php echo $_POST['bareels']; ?>" name="bareels" hidden>

    <button type="submit">Send this news to the wolrd wide web</button>
</form>
</div>




</div>










</div>





<script>


function tuto() {
  document.getElementById("tuto").style = "display: none;";
}


</script>