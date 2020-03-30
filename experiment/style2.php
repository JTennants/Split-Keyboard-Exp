<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no"/>
    <meta name ="mobile-web-app-capable" content="yes"/>

    <title>Keyboard 2: Electric Boogaloo</title>

    <style>




        @media screen and (orientation: portrait) {
            .txtE{
                color: red;
            }
            div.keyb{
                position:fixed;
                width: 100%;
                bottom: 10vh;
                text-align: center;
                z-index: 2;
            }

            .row button{
                width: 50px;
            }
            button{
                height: 5vw;
                font-size: 3vw;
            }
            .backsp{
                padding-left: 70px;
                padding-right: 70px;
            }
        }

        @media screen and (orientation: landscape) {
            .txtE{
                color: green;
            }
            div.keyb{
                position:fixed;
                width: 100%;
                bottom: 5vh;
                text-align: center;
            }


            .row button{
                height: 35px;
                width: 10%;
                padding: 8px 5px 15px 12px;
            }

            .backsp{
                padding-left: 10px;
                padding-right: 20px;
            }

        }

        .txtE{
            height: 55vh;
            font-size: 20px;
            width: 100%;
            border: 1px solid black;
        }



        .left, .right{
            width: 35%;
        }
        .left button, .right button{
            border-radius: 35%;
        }
        .left{
            float: left;
            text-align: left;
        }
        .right{
            float: right;
            text-align: right;
            padding-right: 20px;
        }

        button.space{
            width: 55%;
        }



        button{
            background-color: white;
            text-align: center;

        }

        button:active{
            background-color: grey;
        }

        .keyb button{
        }

    </style>

</head>


<body>


<div id = "bod">

    <div class="txtE">
        <p id="totype"> Spice of Life </p>
        <p id="inp">Start typing for stuff to appear....</p>
    </div>



    <button id="done" onClick="finishedTyping()">Done!</button>
    <div class="keyb" id="keyboard">




        <div class = "row">
            <div class = "left">
                <button id="q" ontouchstart="typeLetter(this.id)" style="background-color: red">q</button>
                <button id="w" ontouchstart="typeLetter(this.id)"style="background-color: red">w</button>
                <button id="e" ontouchstart="typeLetter(this.id)"style="background-color: greenyellow">e</button>
                <button id="r" ontouchstart="typeLetter(this.id)"style="background-color: greenyellow">r</button>
                <button id="tl" ontouchstart="typeLetter(this.id)"style="background-color: cornflowerblue">t</button>
            </div>
            <div class = "right">
                <button id="tr" ontouchstart="typeLetter(this.id)"style="background-color: cornflowerblue">t</button>
                <button id="y" ontouchstart="typeLetter(this.id)"style="background-color: cornflowerblue">y</button>
                <button id="u" ontouchstart="typeLetter(this.id)"style="background-color: greenyellow">u</button>
                <button id="i" ontouchstart="typeLetter(this.id)"style="background-color: greenyellow">i</button>
                <button id="o" ontouchstart="typeLetter(this.id)"style="background-color: red">o</button>
                <button id="p" ontouchstart="typeLetter(this.id)"style="background-color: red">p</button>
            </div>
        </div>

        <div class = "row">
            <div class = "left">
                <button id="a" ontouchstart="typeLetter(this.id)" style="background-color: red">a</button>
                <button id="s" ontouchstart="typeLetter(this.id)"style="background-color: red">s</button>
                <button id="d" ontouchstart="typeLetter(this.id)"style="background-color: greenyellow">d</button>
                <button id="f" ontouchstart="typeLetter(this.id)"style="background-color: greenyellow">f</button>
                <button id="gl" ontouchstart="typeLetter(this.id)"style="background-color: cornflowerblue">g</button>
            </div>
            <div class = "right">
                <button id="gr" ontouchstart="typeLetter(this.id)"style="background-color: cornflowerblue">g</button>
                <button id="h" ontouchstart="typeLetter(this.id)"style="background-color: greenyellow">h</button>
                <button id="j" ontouchstart="typeLetter(this.id)"style="background-color: greenyellow">j</button>
                <button id="k" ontouchstart="typeLetter(this.id)"style="background-color: red">k</button>
                <button id="l" ontouchstart="typeLetter(this.id)"style="background-color: red">l</button>
            </div>
        </div>

        <div class = "row">
            <div class = "left">
                <button id="shift" ontouchstart="setFlag(!shiftFlag)">&#8657;</button>
                <button id="z" ontouchstart="typeLetter(this.id)"style="background-color: red">z</button>
                <button id="x" ontouchstart="typeLetter(this.id)"style="background-color: red">x</button>
                <button id="c" ontouchstart="typeLetter(this.id)"style="background-color: greenyellow">c</button>
                <button id="vl" ontouchstart="typeLetter(this.id)"style="background-color: greenyellow">v</button>
            </div>
            <div class = "right">
                <button id="vr" ontouchstart="typeLetter(this.id)"style="background-color: greenyellow">v</button>
                <button id="b" ontouchstart="typeLetter(this.id)"style="background-color: greenyellow">b</button>
                <button id="n" ontouchstart="typeLetter(this.id)"style="background-color: red">n</button>
                <button id="m" ontouchstart="typeLetter(this.id)"style="background-color: red">m</button>
                <button id="BACKSPACE" class="backsp" onClick="backspace()">&#8678;</button>
            </div>
        </div>


        <div class = "row">
            <div class = "left">
                <button id="&#44;"  onClick="typeLetter(this.id)">&#44;</button>
                <button id="&#32;" class="space" onClick="wordC();typeLetter(this.id);"></button>
            </div>
            <div class = "right">
                <button id="&#32;" class="space" onClick="wordC();typeLetter(this.id);"></button>
                <button id="&#46;" onClick="typeLetter(this.id)">&#46;</button>
            </div>
        </div>



    </div>




</div>

<script>

    var shiftFlag = false;
    var bspaceCounter = 0;
    var correctionCounter = 0;

    function setFlag(flag){
        shiftFlag = flag;
        if(shiftFlag == true){
            document.getElementById("shift").style.backgroundColor = "yellow";
        }
        else{
            document.getElementById("shift").style.backgroundColor = "white";
        }
    }

    function typeLetter(letter_id){
        var letter;

        if (letter_id === "tl"||letter_id === "tr"){
            letter = "t";
        }
        else if(letter_id === "gl"||letter_id === "gr"){
            letter = "g";
        }
        else if(letter_id === "vl"||letter_id === "vr"){
            letter = "v";
        }
        else{
            letter = letter_id;
        }

        if(shiftFlag == true){
            letter = letter.toUpperCase();
        }



        if(document.getElementById("inp").innerHTML == "Start typing for stuff to appear...."){

            document.getElementById("inp").innerHTML = letter;
            setFlag(false);
        }

        else{
            document.getElementById("inp").innerHTML = document.getElementById("inp").innerHTML + letter;
            setFlag(false);
        }

    }

    var changeCounter = 0;
    var phraseID = 8;
    function finishedTyping(){

        if (changeCounter == 0){
            document.getElementById("totype").innerHTML = phrases[9];
            changeCounter++;
            phraseID = 9;
            saveErrors();
        }
        else if (changeCounter == 1){
            document.getElementById("totype").innerHTML = phrases[10];
            changeCounter++;
            phraseID = 10;
            saveErrors();
        }
        else if (changeCounter == 2){
            document.getElementById("totype").innerHTML = phrases[11];
            changeCounter++;
            phraseID = 11;
            saveErrors();
            document.getElementById("done").innerHTML = "Next>>"
            document.getElementById("totype").innerHTML = "......Take a quick break if you want to now......."
        }
        else if (changeCounter == 3){
            window.location.href = "style3.php";
        }

        ///save errors and clear

        clearAll();
    }

    function clearAll(){
        document.getElementById("inp").innerHTML = "";
        bspaceCounter = 0;
        correctionCounter = 0;
    }

    function saveErrors(){
        //save errors that have been logged
        //save backspaces that have been logged
        var style = 02;
        var str = "bsp="+bspaceCounter+"&corc="+correctionCounter+"&phraseID="+phraseID+"&styleID="+style;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        };
        xhttp.open("GET", "handleCorrections.php?"+str, true);
        xhttp.send();
    }



    function backspace(){
        var lngth =  document.getElementById("inp").innerHTML.length -1;

        document.getElementById("inp").innerHTML = document.getElementById("inp").innerHTML.slice(0,lngth);
        bspaceCounter++;
        console.log(bspaceCounter);
    }

    function loadPhrases(){
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                getAndPass2(this.responseText);
                console.log("LOADED PHRASESET");
            }
        };
        xhttp.open("GET", "phrases.txt", true);
        xhttp.send();
    }

    function wordC(){
        var lastW = getWords();
        replaceWord(compare(lastW));

    }

    function getWords(){
        var words = document.getElementById("inp").innerHTML;
        var word = words.split(" ");
        return word[word.length - 1];
    }


    var allthewords = [];
    function loadDoc() {
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                getAndPass(this.responseText);
                console.log("LOADED DICTIONARY DATA");
            }
        };
        xhttp.open("GET", "dictionary.txt", true);
        xhttp.send();
    }

    function getAndPass(text) {
        allthewords = text.split(/[\s,\n]+/);
        console.log("data parsed");
    }

    var phrases = [];
    function getAndPass2(text) {
        phrases = text.split("*");
        phrases.shift();
        document.getElementById("totype").innerHTML = phrases[8];
    }




    function compare(text) {
        var lowestDifference = text.length;
        var closestMatch = null;
        for (var i = 0; i < allthewords.length; i++) {
            var entry = allthewords[i].toLowerCase();
            if (text == entry) {
                //word is correct

                lowestDifference = 0;
                return entry;
            }
            else if (text.length === entry.length) {
                var diff = findDifferences(text, entry);
                if (diff < lowestDifference) {
                    lowestDifference = diff;
                    closestMatch = entry;

                }
            }
        }

        if (closestMatch !== text){
            correctionCounter++;
            console.log(correctionCounter);
        }
        return closestMatch;
    }

    function findDifferences(text, entry) {
        var count = 0;
        for (var i = 0; i < text.length; i++) {
            if (text.charAt(i) !== entry.charAt(i)) {
                count++;
            }
        }
        return count;
    }

    function replaceWord(replacement){
        var words = document.getElementById("inp").innerHTML;
        var word = words.split(" ");
        word[word.length - 1] = replacement;
        document.getElementById("inp").innerHTML = word.join(" ");
    }


    function startTracking(){
        var keyb = document.getElementById("keyboard");
        keyb.addEventListener("touchstart", ontouchstart);
        keyb.addEventListener("touchend", ontouchend);
        keyb.addEventListener("touchcancel", ontouchend);
        console.log("loadeds");
    }


    function ontouchstart(event){
        x = event.touches[0].clientX;
        y = event.touches[0].clientY;


        if (changeCounter == 0){
            phraseID = 9;
        }
        else if (changeCounter == 1){
            phraseID = 10;
        }
        else if (changeCounter == 2){
            phraseID = 11;
        }


        var style = 02;
        var str = "x="+x+"&y="+y+"&phraseID="+phraseID+"&styleID="+style;

        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        };
        xhttp.open("GET", "handleTouches.php?"+str, true);
        xhttp.send();


    };

    function ontouchend(event){

        console.log("touch end");


    };


    function init(){
        loadPhrases();
        loadDoc();
        startTracking();
    }


    window.addEventListener("load", init);

</script>



</body>
</html>