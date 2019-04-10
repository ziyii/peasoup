
function newBlackjack() {
    document.getElementById("label").innerHTML = "Welcome to Blackjack!";
    document.getElementById("dealer").innerHTML = "<img class='card' src='images/blackjack_back.png'>";
    document.getElementById("player").innerHTML = "<img class='card' src='images/blackjack_back.png'>";
    document.getElementById("new_game").disabled = false;
    document.getElementById("hit").disabled = true;
    document.getElementById("stand").disabled = true;
    document.getElementById("playerValue").innerHTML = 0;
    document.getElementById("dealerValue").innerHTML = 0;
    document.getElementById("cardDrawD").innerHTML = "0";
    document.getElementById("cardDrawP").innerHTML = "0";
    document.getElementById("aceCountD").innerHTML = "0";
    document.getElementById("aceCountP").innerHTML = "0";
        
}


function newDeck() {
    newBlackjack();
    var xmlhttp = new XMLHttpRequest();
    var url = "https://deckofcardsapi.com/api/deck/new/shuffle/?deck_count=1";
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            
            var responseArr = JSON.parse(xmlhttp.responseText);
            var deckID = responseArr.deck_id;
            document.getElementById("label").innerHTML = "Hit or stand?";
            document.getElementById("deckID").innerHTML = deckID;
            document.getElementById("cardDrawD").innerHTML = "0";
            document.getElementById("cardDrawP").innerHTML = "0";
            document.getElementById("aceCountD").innerHTML = "0";
            document.getElementById("aceCountP").innerHTML = "0";
            
            drawCardDealer(deckID);
            drawCardPlayer(deckID);
            drawCardPlayer(deckID);
            updateToken(-50);
            
            document.getElementById("new_game").disabled = true;
            document.getElementById("hit").disabled =false;
            document.getElementById("stand").disabled = false;
        }
    };
    
    xmlhttp.open("GET", url, true);
    xmlhttp.send(null);
}

function hit() {
    document.getElementById("cardDrawP").innerHTML = "1";
    deckID = document.getElementById("deckID").innerHTML;
    drawCardPlayer(deckID);
}

function stand() {
    document.getElementById("cardDrawD").innerHTML = "1";
    deckID = document.getElementById("deckID").innerHTML;
    
    drawCardDealer(deckID);
    
    document.getElementById("label").innerHTML = "Dealer's turn...";
    
    document.getElementById("hit").disabled = true;
    document.getElementById("stand").disabled = true;
}

function drawCardPlayer(deckID) {
    var xmlhttp = new XMLHttpRequest();
    var url = "https://deckofcardsapi.com/api/deck/" + deckID + "/draw/?count=1";
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            
            var responseArr = JSON.parse(xmlhttp.responseText);
            var value = parseInt(document.getElementById("playerValue").innerHTML);
            
            //image
            if (document.getElementById("cardDrawP").innerHTML == "0") { //replace hand
                document.getElementById("player").innerHTML = "<img class='card' src='" + responseArr.cards[0].image + "'>";
                
                if (isNaN(responseArr.cards[0].value)) {    //face card or ace
                    if (responseArr.cards[0].value == "ACE") { //ace
                        value = 11;
                        document.getElementById("aceCountP").innerHTML = "1";
                    } else {
                        value = 10;
                    }
                } else {    //number card
                    value = parseInt(responseArr.cards[0].value);
                }
                document.getElementById("playerValue").innerHTML = value;
                document.getElementById("cardDrawP").innerHTML = "1";
            } else { //append image into hand and calculate valye
                document.getElementById("player").innerHTML += "<img class='card' src='" + responseArr.cards[0].image + "'>";
                
                if (isNaN(responseArr.cards[0].value)) {    //face card or ace
                    if (responseArr.cards[0].value == "ACE") { //ace
                        value += 11;
                        var aces = parseInt(document.getElementById("aceCountP").innerHTML);
                        aces += 1;
                        document.getElementById("aceCountP").innerHTML = aces;
                    } else {
                        value += 10;
                    }
                } else {    //number card
                    value += parseInt(responseArr.cards[0].value);
                }
                document.getElementById("playerValue").innerHTML = value;
            }
            
            
            var value = parseInt(document.getElementById("playerValue").innerHTML);
            if (value == 21) {
                document.getElementById("label").innerHTML = "You hit 21! You win! ";
                document.getElementById("who_won").innerHTML = 50;
                updateToken(100);
                document.getElementById("new_game").disabled = false;
                document.getElementById("hit").disabled = true;
                document.getElementById("stand").disabled = true;
            } else if (value > 21) {
                if (parseInt(document.getElementById("aceCountP").innerHTML) > 0) {
                    value -= 10;
                    document.getElementById("playerValue").innerHTML = value;
                    aces = parseInt(document.getElementById("aceCountP").innerHTML);
                    aces -= 1;
                    document.getElementById("aceCountP").innerHTML = aces;
                } else {
                    document.getElementById("label").innerHTML = "Bust. You are over 21, you lose...";
                    document.getElementById("who_won").innerHTML = -50;
                    updateToken(0);
                    document.getElementById("new_game").disabled = false;
                    document.getElementById("hit").disabled = true;
                    document.getElementById("stand").disabled = true;
                }
            }
        }
    };
    
    xmlhttp.open("GET", url, true);
    xmlhttp.send(null);
}

function drawCardDealer(deckID) {
    var xmlhttp = new XMLHttpRequest();
    var url = "https://deckofcardsapi.com/api/deck/" + deckID + "/draw/?count=1";
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            
            var responseArr = JSON.parse(xmlhttp.responseText);
            var value = parseInt(document.getElementById("dealerValue").innerHTML);
            
            //image
            if (document.getElementById("cardDrawD").innerHTML == "0") { //replace hand
                document.getElementById("dealer").innerHTML = "<img class='card' src='" + responseArr.cards[0].image + "'>";
                
                if (isNaN(responseArr.cards[0].value)) {    //face card or ace
                    if (responseArr.cards[0].value == "ACE") { //ace
                        value = 11;
                        document.getElementById("aceCountD").innerHTML = 1;
                    } else {
                        value = 10;
                    }
                } else {    //number card
                    value = parseInt(responseArr.cards[0].value);
                }
                document.getElementById("dealerValue").innerHTML = value;
            } else { //append image into hand and calculate valye
                document.getElementById("dealer").innerHTML += "<img class='card' src='" + responseArr.cards[0].image + "'>";
                
                if (isNaN(responseArr.cards[0].value)) {    //face card or ace
                    if (responseArr.cards[0].value == "ACE") { //ace
                        value += 11;
                        var aces = parseInt(document.getElementById("aceCountD").innerHTML);
                        aces += 1;
                        document.getElementById("aceCountD").innerHTML = aces;
                    } else {
                        value += 10;
                    }
                } else {    //number card
                    value += parseInt(responseArr.cards[0].value);
                }
                document.getElementById("dealerValue").innerHTML = value;
                var dealerValue = parseInt(document.getElementById("dealerValue").innerHTML);
                var playerValue = parseInt(document.getElementById("playerValue").innerHTML);
                if (dealerValue > 21){
                    if (parseInt(document.getElementById("aceCountD").innerHTML) > 0){
                        value -=10;
                        document.getElementById("dealerValue").innerHTML = value;
                        var aces = parseInt(document.getElementById("aceCountD").innerHTML);
                        aces -= 1;
                        document.getElementById("aceCountD").innerHTML = aces;
                        drawCardDealer(deckID);
                    } else {
                        document.getElementById("label").innerHTML = "Dealer bust! You win!";
                        document.getElementById("who_won").innerHTML = 50;
                        updateToken(100);
                        document.getElementById("new_game").disabled = false;
                    }
                } else if (dealerValue <= 16){
                    drawCardDealer(deckID);
                } else if (dealerValue > 16){
                    if (dealerValue > playerValue){
                        document.getElementById("label").innerHTML = "Sorry you lose...";
                        document.getElementById("who_won").innerHTML = -50;
                        updateToken(0);
                    } else if (dealerValue < playerValue){
                        document.getElementById("label").innerHTML = "Congratulations! You win!";
                        document.getElementById("who_won").innerHTML = 50;
                        updateToken(100);
                    } else {
                        document.getElementById("label").innerHTML = "It's a tie!";
                        document.getElementById("who_won").innerHTML = 0; 
                        updateToken(50);
                    }
                    document.getElementById("new_game").disabled = false;
                }
            }
                    
        }
    };
    
    xmlhttp.open("GET", url, true);
    xmlhttp.send(null);
}

function updateToken(amount) {
    document.getElementById("tokenCount").innerHTML = amount;
    var token_value = document.getElementById("token_live").innerHTML;
    
    if (token_value != ' '){    
        if (token_value < 0) {
            document.getElementById("token_live").innerHTML = 1000;
        } else {
            document.getElementById("token_live").innerHTML = parseInt(token_value) + amount;   
        }
    }
    
    
//    $.ajax({
//        url:"token-management.php", //the page containing php script
//        type: "post", //request type,
//        dataType: 'json',
//        data: {update: 'success', tokenUpdate: '50'},
//        success: function(result){
//            
//            console.log(result.abc);
//            alert(result.abc);
//            document.getElementById("tokenCount").innerHTML = result.abc;
//       }
//     });
//    alert(amount);
}