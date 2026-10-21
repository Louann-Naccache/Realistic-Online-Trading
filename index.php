<!DOCTYPE html>
<html>
<head>
    <title>Vodo</title>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5272764740379432"
         crossorigin="anonymous"></script>
</head>
<body style="background-color: black; color: white;">
<div style="display: flex; flex-direction: column; align-items: flex-start;">


<!-- fixed______________________________________________ -->
<div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; background-color: blue; position: fixed; width: 100%; top: 0; left: 0;">

  <div style="background-color: blue; width: 25%; height: 50px; border-radius: 17%; display: flex; flex-direction: row; border: 5px solid black; margin-left: 10px;"><p>MONEY :  $</p><b><p id="money">1000</p></b></div>

  <h1>ModoVodo</h1>
  <form action="1.php" method="post">
    <input value="1000" name="money" hidden>
    <input value="0" name="bareels" hidden>
    <button type="submit" style="background-color: white; color: red; width: 100px; height: 50px; font-size: 20px; border-radius: 17%;">Play Online</button>
</form>
</div>
<!-- fixed______________________________________________ -->








<div id="tuto" style=" position: fixed; bottom: 0; margin-top: 20px; display: flex; flex-direction: column; align-items: center; justify-content: center; background-color: blue; border: 5px solid grey; border-radius: 17%; padding: 10px;">

<div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; width: 100%;">
  <h1>Tutorial - How to play</h1>
  <button style="border-radius: 17%; border: 5px solid grey; background-color: blue; width: 120px; height: 40px; color: white;" onclick="tuto()">Close</button>
</div>

<p style="display: flex; align-items: center; justify-content: center; width: 100%;">- Welcome in Modovodo trading simulator. Firstval you have to select a commodity on "Commodity - none", then click on the arrows whose means "next day".</p>
<p style="display: flex; align-items: center; justify-content: center; width: 100%;">- Secondly you can buy and sell the commodity you want, if your money is under 900, better buy gas at the lowest price you see it, otherwise buy petrol and select the graph of the commodity you have chosen.</p>
<p style="display: flex; align-items: center; justify-content: center; width: 100%;">- Thirdly wait that the price of your commodity goes higher then the price you bought, then sell. The real price that allows you to buy one ounce of gold and palladium appears under the buttons "buy/sell"</p>
<p style="display: flex; align-items: center; justify-content: center; width: 100%;">- Lastly, as your money is growing, make your warehouse bigger and select a higher number of bareels that you can store, if you buy gas the minimum number of bareels that your warehouse should have is 20. Trade ounces allows you to need less of storage for more benefits, but your money should be at least 2000 to buy one ounce of gold. Lastly once you rentered the game you can set the money you had ;) . Enjoy the game!</p>
</div>









<!-- GRAPH -->
<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%; margin-top: 20px;">



<!-- graph parameters -->
<div style="display: flex; flex-direction: row; align-items: center; justify-content: center;">


<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 20px;">
<select id="graphInput" style="height: 50px; width: 100%; background-color: black; color: white; margin: 20px;">
Commodity
  <option>Commodity - None</option>
  <option value="palladium">Palladium</option>
  <option value="petrol">Petrol</option>
  <option value="gold">Gold</option>
  <option value="gas">Gas</option>
</select>

<button id="graphSelecBtn" onclick="changeGraph()">Select the commodity</button>
</div>


<button style="margin-left: 50px;" id="nextDay" onclick="nextDay()"><img style="margin-top: 50px;" src="DAY.png" alt="NEXT DAY"></button>


<!-- end graph parameters -->
</div>













<div style="display: flex; flex-direction: row; align-items: flex-end; justify-content: space-between; margin-top: 100px;">

<div id="candle1ID" class="candle">100</div>

<div id="candle2ID" class="candle">20</div>

<div id="candle3ID" class="candle">30</div>

<div id="candle4ID" class="candle">10</div>

<div id="candle5ID" class="candle">20</div>

<div id="candle6ID" class="candle">30</div>

<div id="candle7ID" class="candle">40</div>

<div id="candle8ID" class="candle">30</div>

<div id="candle9ID"  class="candle">20</div>

<div id="candle10ID"  class="candle">10</div>

</div>







</div>





<!-- BUY AND SELL -->
<div style="display: flex; flex-direction: row; align-items: center; justify-content: space-around; margin-top: 35px; width: 100%; margin-bottom: 60px;">


  <!-- ITEM -->
<div style="display: flex; flex-direction: column; align-items: center; justify-content: space-around; background-color: blue; border: 5px solid grey; border-radius: 17%; padding: 10px;">

<img src="PETROL.png" alt="PETROL">

<div style="margin-top: 15px; display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
<button id="buyPetrolBtn" onclick="buyPetrol()" style="color: green; margin-right: 7px;">BUY</button>
<button id="sellPetrolBtn" onclick="sellPetrol()" style="color: red;">SELL</button>
</div>

  <p id="petrol">100</p>

</div>



<!-- ITEM -->
<div style="display: flex; flex-direction: column; align-items: center; justify-content: space-around; background-color: blue; border: 5px solid grey; border-radius: 17%; padding: 10px;">

<img src="GAS.png" alt="GAS">

<div style="margin-top: 15px; display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
  <button id="buyGasBtn" onclick="buyGas()" style="color: green; margin-right: 7px;">BUY</button>
  <button id="sellGasBtn" onclick="sellGas()" style="color: red;">SELL</button>
</div>

<p id="gas">20</p>

</div>





<!-- ITEM -->
<div style="display: flex; flex-direction: column; align-items: center; justify-content: space-around; background-color: blue; border: 5px solid grey; border-radius: 17%; padding: 10px;">

<img src="GOLD.png" alt="GOLD">

<div style="margin-top: 15px; display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
  <button id="buyGoldBtn" onclick="buyGold()" style="color: green; margin-right: 7px;">BUY</button>
  <button id="sellGoldBtn" onclick="sellGold()" style="color: red;">SELL</button>
</div>

<p id="gold">2000</p>

</div>




<!-- ITEM -->
<div style="display: flex; flex-direction: column; align-items: center; justify-content: space-around; background-color: blue; border: 5px solid grey; border-radius: 17%; padding: 10px;">

<img src="PALLADIUM.png" alt="PALLADIUM">

<div style="margin-top: 15px; display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
  <button id="buyPalladiumBtn" onclick="buyPalladium()" style="color: green; margin-right: 7px;">BUY</button>
  <button id="sellPalladiumBtn" onclick="sellPalladium()" style="color: red;">SELL</button>
</div>

<p id="palladium">1500</p>

</div>




</div>





<!-- settings -->
<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%;">



<!-- bareels ITEM -->
<div style="display: flex; flex-direction: column; align-items: center; justify-content: space-around; background-color: blue; border: 5px solid grey; border-radius: 17%; padding: 10px;">


<div style="display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
  <p>Petrol bareels: </p>
  <p id="numberOfPetrol">0</p>
</div>

<div style="display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
  <p>Gas bareels: </p>
  <p id="numberOfGas">0</p>
</div>

<div style="display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
  <p>Gold ounces</p>
  <p id="numberOfGold">0</p>
</div>

<div style="display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
  <p>Palladium ounces</p>
  <p id="numberOfPalladium">0</p>
</div>



<div style="border: 5px solid grey; border-radius: 17%;">

<div style="display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
  <p>Maxi bareels: </p>
  <p id="MaxBareelsStorage">10</p>
</div>


<div style="display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
  <input id="MaxBareelsInput" placeholder="1 bareels->pay 5€ per day">
  <button id="MaxBareelsBtn" onclick="MaxBareelsBtnSelected()">Select max bareels</button>
</div>

</div>

<!-- end bareels item -->
</div>






<div style="margin-top: 20px; display: flex; flex-direction: column; align-items: center; justify-content: space-around; background-color: blue; border: 5px solid grey; border-radius: 17%; padding: 10px;">


<input id="changeMoneyInput" placeholder="Enter the money you had previously">
<button id="changeMoneyBtn" onclick="setMoney()">SET MONEY</button>


</div>












<!-- end setting -->
</div>










<style>
.candle{
    background-color: red;
    height: 100px;
    width: 50px;
    margin-right: 10px;


}

</style>



<!-- ____________SCRIPT_______-->
<script>


function tuto() {
  document.getElementById("tuto").style = "display: none;"
}




    // Set up variables

    var petrolBareels = parseFloat(document.getElementById("numberOfPetrol").innerHTML);
    var gasBareels = parseFloat(document.getElementById("numberOfGas").innerHTML);
    var goldOunces = parseFloat(document.getElementById("numberOfGold").innerHTML);
    var palladiumOunces = parseFloat(document.getElementById("numberOfPalladium").innerHTML);

    var graphCommodityString = "" // Les string peuvent etre stockés de cette facon

    var moneyNumber = parseFloat(document.getElementById("money").innerHTML);

    var MaxBareelsValue = ""

    function MaxBareelsBtnSelected() {
        document.getElementById("MaxBareelsStorage").innerHTML = document.getElementById("MaxBareelsInput").value

    }


    // Function nextDay() that changes the broadcast (news) after 10 days
    function nextDay() {

        // Defines vars
        petrolPrice = parseFloat(document.getElementById("petrol").innerHTML);
        gasPrice = parseFloat(document.getElementById("gas").innerHTML);
        goldPrice = parseFloat(document.getElementById("gold").innerHTML);
        palladiumPrice = parseFloat(document.getElementById("palladium").innerHTML);

        BareelsStorage = document.getElementById("MaxBareelsStorage").innerHTML;

        // Fees
        //Defines Money Nb
        var moneyNumber = parseFloat(document.getElementById("money").innerHTML);
        //General Code
        document.getElementById("money").innerHTML = moneyNumber - (BareelsStorage * 5);


           // 2- Probabilities and price (mobile) declaration
        var petrolPrice = Math.floor(Math.random() * 200) + 60;
        console.log("petrolPrice " + petrolPrice);
        document.getElementById("petrol").innerHTML = petrolPrice;

        var gasPrice = Math.floor(Math.random() * 20) + 6;
        console.log("gasPrice " + gasPrice);
        document.getElementById("gas").innerHTML = gasPrice;

        var goldPrice = Math.floor(Math.random() * 5000) + 1000;
        console.log("goldPrice " + goldPrice);
        document.getElementById("gold").innerHTML = goldPrice;

        var palladiumPrice = Math.floor(Math.random() * 10000) + 1000;
        console.log("palladiumPrice " + palladiumPrice);
        document.getElementById("palladium").innerHTML = palladiumPrice;









        // Part 3 CANDLES
        if (graphCommodityString == "petrol") {
             // DATA = HEIGHT
              //DEFINES VAR ELEMENT
              element1 = document.getElementById("candle1ID");
           element2 = document.getElementById("candle2ID");
           element3 = document.getElementById("candle3ID");
           element4 = document.getElementById("candle4ID");
           element5 = document.getElementById("candle5ID");
           element6 = document.getElementById("candle6ID");
           element7 = document.getElementById("candle7ID");
           element8 = document.getElementById("candle8ID");
           element9 = document.getElementById("candle9ID");
           element10 = document.getElementById("candle10ID");

              //DEFINES VAR HEIGHT
           Aheight1 = document.getElementById("candle1ID").innerHTML;
           Aheight2 = document.getElementById("candle2ID").innerHTML;
           Aheight3 = document.getElementById("candle3ID").innerHTML;
           Aheight4 = document.getElementById("candle4ID").innerHTML;
           Aheight5 = document.getElementById("candle5ID").innerHTML;
           Aheight6 = document.getElementById("candle6ID").innerHTML;
           Aheight7 = document.getElementById("candle7ID").innerHTML;
           Aheight8 = document.getElementById("candle8ID").innerHTML;
           Aheight9 = document.getElementById("candle9ID").innerHTML;
           Aheight10 = document.getElementById("candle10ID").innerHTML;

             // Defines the decalage
           document.getElementById("candle1ID").innerHTML = Aheight2
           document.getElementById("candle2ID").innerHTML = Aheight3
           document.getElementById("candle3ID").innerHTML = Aheight4
           document.getElementById("candle4ID").innerHTML = Aheight5
           document.getElementById("candle5ID").innerHTML = Aheight6
           document.getElementById("candle6ID").innerHTML = Aheight7
           document.getElementById("candle7ID").innerHTML = Aheight8
           document.getElementById("candle8ID").innerHTML = Aheight9
           document.getElementById("candle9ID").innerHTML = Aheight10
           document.getElementById("candle10ID").innerHTML = petrolPrice;

           element1.style.height = `${Aheight2}px`;
           element2.style.height = `${Aheight3}px`;
           element3.style.height = `${Aheight4}px`;
           element4.style.height = `${Aheight5}px`;
           element5.style.height = `${Aheight6}px`;
           element6.style.height = `${Aheight7}px`;
           element7.style.height = `${Aheight8}px`;
           element8.style.height = `${Aheight9}px`;
           element9.style.height = `${Aheight10}px`;
           element10.style.height = `${petrolPrice}px`;

           }



           if (graphCommodityString == "gas") {
             // DATA = HEIGHT
              //DEFINES VAR ELEMENT
              element1 = document.getElementById("candle1ID");
           element2 = document.getElementById("candle2ID");
           element3 = document.getElementById("candle3ID");
           element4 = document.getElementById("candle4ID");
           element5 = document.getElementById("candle5ID");
           element6 = document.getElementById("candle6ID");
           element7 = document.getElementById("candle7ID");
           element8 = document.getElementById("candle8ID");
           element9 = document.getElementById("candle9ID");
           element10 = document.getElementById("candle10ID");

              //DEFINES VAR HEIGHT
           Aheight1 = document.getElementById("candle1ID").innerHTML;
           Aheight2 = document.getElementById("candle2ID").innerHTML;
           Aheight3 = document.getElementById("candle3ID").innerHTML;
           Aheight4 = document.getElementById("candle4ID").innerHTML;
           Aheight5 = document.getElementById("candle5ID").innerHTML;
           Aheight6 = document.getElementById("candle6ID").innerHTML;
           Aheight7 = document.getElementById("candle7ID").innerHTML;
           Aheight8 = document.getElementById("candle8ID").innerHTML;
           Aheight9 = document.getElementById("candle9ID").innerHTML;
           Aheight10 = document.getElementById("candle10ID").innerHTML;

             // Defines the decalage
           document.getElementById("candle1ID").innerHTML = Aheight2
           document.getElementById("candle2ID").innerHTML = Aheight3
           document.getElementById("candle3ID").innerHTML = Aheight4
           document.getElementById("candle4ID").innerHTML = Aheight5
           document.getElementById("candle5ID").innerHTML = Aheight6
           document.getElementById("candle6ID").innerHTML = Aheight7
           document.getElementById("candle7ID").innerHTML = Aheight8
           document.getElementById("candle8ID").innerHTML = Aheight9
           document.getElementById("candle9ID").innerHTML = Aheight10
           document.getElementById("candle10ID").innerHTML = gasPrice * 50;

           element1.style.height = `${Aheight2}px`;
           element2.style.height = `${Aheight3}px`;
           element3.style.height = `${Aheight4}px`;
           element4.style.height = `${Aheight5}px`;
           element5.style.height = `${Aheight6}px`;
           element6.style.height = `${Aheight7}px`;
           element7.style.height = `${Aheight8}px`;
           element8.style.height = `${Aheight9}px`;
           element9.style.height = `${Aheight10}px`;
           element10.style.height = `${gasPrice * 50}px`;

           }


           if (graphCommodityString == "gold") {
             // DATA = HEIGHT
              //DEFINES VAR ELEMENT
              element1 = document.getElementById("candle1ID");
           element2 = document.getElementById("candle2ID");
           element3 = document.getElementById("candle3ID");
           element4 = document.getElementById("candle4ID");
           element5 = document.getElementById("candle5ID");
           element6 = document.getElementById("candle6ID");
           element7 = document.getElementById("candle7ID");
           element8 = document.getElementById("candle8ID");
           element9 = document.getElementById("candle9ID");
           element10 = document.getElementById("candle10ID");

              //DEFINES VAR HEIGHT
           Aheight1 = document.getElementById("candle1ID").innerHTML;
           Aheight2 = document.getElementById("candle2ID").innerHTML;
           Aheight3 = document.getElementById("candle3ID").innerHTML;
           Aheight4 = document.getElementById("candle4ID").innerHTML;
           Aheight5 = document.getElementById("candle5ID").innerHTML;
           Aheight6 = document.getElementById("candle6ID").innerHTML;
           Aheight7 = document.getElementById("candle7ID").innerHTML;
           Aheight8 = document.getElementById("candle8ID").innerHTML;
           Aheight9 = document.getElementById("candle9ID").innerHTML;
           Aheight10 = document.getElementById("candle10ID").innerHTML;

             // Defines the decalage
           document.getElementById("candle1ID").innerHTML = Aheight2
           document.getElementById("candle2ID").innerHTML = Aheight3
           document.getElementById("candle3ID").innerHTML = Aheight4
           document.getElementById("candle4ID").innerHTML = Aheight5
           document.getElementById("candle5ID").innerHTML = Aheight6
           document.getElementById("candle6ID").innerHTML = Aheight7
           document.getElementById("candle7ID").innerHTML = Aheight8
           document.getElementById("candle8ID").innerHTML = Aheight9
           document.getElementById("candle9ID").innerHTML = Aheight10
           document.getElementById("candle10ID").innerHTML = goldPrice / 50;

           element1.style.height = `${Aheight2}px`;
           element2.style.height = `${Aheight3}px`;
           element3.style.height = `${Aheight4}px`;
           element4.style.height = `${Aheight5}px`;
           element5.style.height = `${Aheight6}px`;
           element6.style.height = `${Aheight7}px`;
           element7.style.height = `${Aheight8}px`;
           element8.style.height = `${Aheight9}px`;
           element9.style.height = `${Aheight10}px`;
           element10.style.height = `${goldPrice / 50}px`;

           }



           if (graphCommodityString == "palladium") {
             // DATA = HEIGHT
              //DEFINES VAR ELEMENT
              element1 = document.getElementById("candle1ID");
           element2 = document.getElementById("candle2ID");
           element3 = document.getElementById("candle3ID");
           element4 = document.getElementById("candle4ID");
           element5 = document.getElementById("candle5ID");
           element6 = document.getElementById("candle6ID");
           element7 = document.getElementById("candle7ID");
           element8 = document.getElementById("candle8ID");
           element9 = document.getElementById("candle9ID");
           element10 = document.getElementById("candle10ID");

              //DEFINES VAR HEIGHT
           Aheight1 = document.getElementById("candle1ID").innerHTML;
           Aheight2 = document.getElementById("candle2ID").innerHTML;
           Aheight3 = document.getElementById("candle3ID").innerHTML;
           Aheight4 = document.getElementById("candle4ID").innerHTML;
           Aheight5 = document.getElementById("candle5ID").innerHTML;
           Aheight6 = document.getElementById("candle6ID").innerHTML;
           Aheight7 = document.getElementById("candle7ID").innerHTML;
           Aheight8 = document.getElementById("candle8ID").innerHTML;
           Aheight9 = document.getElementById("candle9ID").innerHTML;
           Aheight10 = document.getElementById("candle10ID").innerHTML;

             // Defines the decalage
           document.getElementById("candle1ID").innerHTML = Aheight2
           document.getElementById("candle2ID").innerHTML = Aheight3
           document.getElementById("candle3ID").innerHTML = Aheight4
           document.getElementById("candle4ID").innerHTML = Aheight5
           document.getElementById("candle5ID").innerHTML = Aheight6
           document.getElementById("candle6ID").innerHTML = Aheight7
           document.getElementById("candle7ID").innerHTML = Aheight8
           document.getElementById("candle8ID").innerHTML = Aheight9
           document.getElementById("candle9ID").innerHTML = Aheight10
           document.getElementById("candle10ID").innerHTML = palladiumPrice / 100;

           element1.style.height = `${Aheight2}px`;
           element2.style.height = `${Aheight3}px`;
           element3.style.height = `${Aheight4}px`;
           element4.style.height = `${Aheight5}px`;
           element5.style.height = `${Aheight6}px`;
           element6.style.height = `${Aheight7}px`;
           element7.style.height = `${Aheight8}px`;
           element8.style.height = `${Aheight9}px`;
           element9.style.height = `${Aheight10}px`;
           element10.style.height = `${palladiumPrice / 100}px`;

           }



        }

    function changeGraph() {
        graphCommodityString = document.getElementById("graphInput").value;

    }
    function setMoney() {
        document.getElementById("money").innerHTML = document.getElementById("changeMoneyInput").value;
        document.getElementById("changeMoneyInput").value = ""
    }

    function buyPetrol() {
        var petrolBareels = parseFloat(document.getElementById("numberOfPetrol").innerHTML);
    var gasBareels = parseFloat(document.getElementById("numberOfGas").innerHTML);
    var goldOunces = parseFloat(document.getElementById("numberOfGold").innerHTML);
    var palladiumOunces = parseFloat(document.getElementById("numberOfPalladium").innerHTML);


    var moneyNumber = parseFloat(document.getElementById("money").innerHTML);

    // Actualisation et défines var Commodities Price Sign
    var petrolPriceSign = parseFloat(document.getElementById("petrol").innerHTML);

    //Actualisation et defines money
    var moneyNumber = parseFloat(document.getElementById("money").innerHTML);

    BareelsStorage = parseFloat(document.getElementById("MaxBareelsStorage").innerHTML);


    if (petrolBareels >= BareelsStorage) { //If > to 9 (10 is > to 9) then...
            return


        }
        else{
            if (moneyNumber > petrolPriceSign) {

               //J'actualise direcctement la valeur de <p id = "money"> en utilisant la var moneyNumber qui = au contenu de <p id="money"></p>
               document.getElementById("money").innerHTML = moneyNumber - petrolPriceSign

               petrolBareels += 1;
               document.getElementById("numberOfPetrol").innerHTML = petrolBareels;

            }

        }




    }


    function sellPetrol() {
        var petrolBareels = parseFloat(document.getElementById("numberOfPetrol").innerHTML);
    var gasBareels = parseFloat(document.getElementById("numberOfGas").innerHTML);
    var goldOunces = parseFloat(document.getElementById("numberOfGold").innerHTML);
    var palladiumOunces = parseFloat(document.getElementById("numberOfPalladium").innerHTML);

    // Actualisation et défines var Commodities Price Sign
    var petrolPriceSign = parseFloat(document.getElementById("petrol").innerHTML);

    //Actualisation et defines money
    var moneyNumber = parseFloat(document.getElementById("money").innerHTML);



    if (petrolBareels <= 0) { //If > to 9 (10 is > to 9) then...
            return


        }
        else{


            //J'actualise direcctement la valeur de <p id = "money"> en utilisant la var moneyNumber qui = au contenu de <p id="money"></p>
            document.getElementById("money").innerHTML = moneyNumber + petrolPriceSign

            petrolBareels -= 1;
            document.getElementById("numberOfPetrol").innerHTML = petrolBareels;



        }




    }









    function buyGas() {

    // Actualisation et défines var Commodities Price Sign
    var gasPriceSign = parseFloat(document.getElementById("gas").innerHTML);

    //Actualisation et defines money
    var moneyNumber = parseFloat(document.getElementById("money").innerHTML);

    BareelsStorage = parseFloat(document.getElementById("MaxBareelsStorage").innerHTML);


    if (gasBareels >= BareelsStorage) { //If > to 9 (10 is > to 9) then...
            return


        }
        else{
            if (moneyNumber > gasPriceSign) {

               //J'actualise direcctement la valeur de <p id = "money"> en utilisant la var moneyNumber qui = au contenu de <p id="money"></p>
               document.getElementById("money").innerHTML = moneyNumber - gasPriceSign

               gasBareels += 1;
               document.getElementById("numberOfGas").innerHTML = gasBareels;

            }

        }




    }


    function sellGas() {

    // Actualisation et défines var Commodities Price Sign
    var gasPriceSign = parseFloat(document.getElementById("gas").innerHTML);

    //Actualisation et defines money
    var moneyNumber = parseFloat(document.getElementById("money").innerHTML);

    var gasBareels = parseFloat(document.getElementById("numberOfGas").innerHTML);

    if (gasBareels <= 0) { //If > to 9 (10 is > to 9) then...
            return


        }
        else{


            //J'actualise direcctement la valeur de <p id = "money"> en utilisant la var moneyNumber qui = au contenu de <p id="money"></p>
            document.getElementById("money").innerHTML = moneyNumber + gasPriceSign

            gasBareels -= 1;
            document.getElementById("numberOfGas").innerHTML = gasBareels;



        }




    }





















    function buyGold() {

    // Actualisation et défines var Commodities Price Sign
    var goldPriceSign = parseFloat(document.getElementById("gold").innerHTML);

    //Actualisation et defines money
    var moneyNumber = parseFloat(document.getElementById("money").innerHTML);

    //Rapelle de
    var goldOunces = parseFloat(document.getElementById("numberOfGold").innerHTML);

    BareelsStorage = parseFloat(document.getElementById("MaxBareelsStorage").innerHTML);


    if (goldOunces >= BareelsStorage) { //If > to 9 (10 is > to 9) then...
            return


        }
        else{
            if (moneyNumber > goldPriceSign) {

               //J'actualise direcctement la valeur de <p id = "money"> en utilisant la var moneyNumber qui = au contenu de <p id="money"></p>
               document.getElementById("money").innerHTML = moneyNumber - goldPriceSign

               goldOunces += 1;
               document.getElementById("numberOfGold").innerHTML = goldOunces;

            }

        }




    }


    function sellGold() {

    // Actualisation et défines var Commodities Price Sign
    var goldPriceSign = parseFloat(document.getElementById("gold").innerHTML);

    //Actualisation et defines money
    var moneyNumber = parseFloat(document.getElementById("money").innerHTML);

    //Rapelle de
    var goldOunces = parseFloat(document.getElementById("numberOfGold").innerHTML);



    if (goldOunces <= 0) { //If > to 9 (10 is > to 9) then...
            return


        }
        else{


            //J'actualise direcctement la valeur de <p id = "money"> en utilisant la var moneyNumber qui = au contenu de <p id="money"></p>
            document.getElementById("money").innerHTML = moneyNumber + goldPriceSign;

            goldOunces -= 1;
            document.getElementById("numberOfGold").innerHTML = goldOunces;



        }




    }











    function buyPalladium() {

    // Actualisation et défines var Commodities Price Sign
    var palladiumPriceSign = parseFloat(document.getElementById("palladium").innerHTML);

    //Actualisation et defines money
    var moneyNumber = parseFloat(document.getElementById("money").innerHTML);

    //Rapelle de
    var palladiumOunces = parseFloat(document.getElementById("numberOfPalladium").innerHTML);

    BareelsStorage = parseFloat(document.getElementById("MaxBareelsStorage").innerHTML);

    if (palladiumOunces >= BareelsStorage) { //If > to 9 (10 is > to 9) then...
            return


        }
        else{
            if (moneyNumber > palladiumPriceSign) {

               //J'actualise direcctement la valeur de <p id = "money"> en utilisant la var moneyNumber qui = au contenu de <p id="money"></p>
               document.getElementById("money").innerHTML = moneyNumber - palladiumPriceSign

               palladiumOunces += 1;
               document.getElementById("numberOfPalladium").innerHTML = palladiumOunces;

            }

        }




}


    function sellPalladium() {

    // Actualisation et défines var Commodities Price Sign
    var palladiumPriceSign = parseFloat(document.getElementById("palladium").innerHTML);

    //Actualisation et defines money
    var moneyNumber = parseFloat(document.getElementById("money").innerHTML);

    //Rapelle de
    var palladiumOunces = parseFloat(document.getElementById("numberOfPalladium").innerHTML);



    if (palladiumOunces <= 0) { //If > to 9 (10 is > to 9) then...
            return


        }
        else{


            //J'actualise direcctement la valeur de <p id = "money"> en utilisant la var moneyNumber qui = au contenu de <p id="money"></p>
            document.getElementById("money").innerHTML = moneyNumber + palladiumPriceSign;

            palladiumOunces -= 1;
            document.getElementById("numberOfPalladium").innerHTML = palladiumOunces;



        }




    }








</script>

</body>
</html>
