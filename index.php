<?php
require __DIR__.'/vendor/autoload.php'
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidden Clues</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section id="first_section">
<div class="game_name">

    <div>
        <p id="first_name">Hidden Clues</p>
        <p id="last_name">Will you find it?</p>
    </div>
</div>

<div id="play_game">
    <a href="game.php" class="play_btn"><span>PLAY NOW</span></a>
</div>

<div id="rules">
    <a href="#rules_section"><button class="rules_btn">
        <span>RULES</span>
    </button></a>

</div>


<footer>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
    <defs>
        <linearGradient id="bg">
            <stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
            <stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
            <stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
        </linearGradient>
        <path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
	s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
    </defs>
    <g>
        <use xlink:href='#wave' opacity=".3">
            <animateTransform
                attributeName="transform"
                attributeType="XML"
                type="translate"
                dur="10s"
                calcMode="spline"
                values="270 230; -334 180; 270 230"
                keyTimes="0; .5; 1"
                keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                repeatCount="indefinite" />
        </use>
        <use xlink:href='#wave' opacity=".6">
            <animateTransform
                attributeName="transform"
                attributeType="XML"
                type="translate"
                dur="8s"
                calcMode="spline"
                values="-270 230;243 220;-270 230"
                keyTimes="0; .6; 1"
                keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                repeatCount="indefinite" />
        </use>
        <use xlink:href='#wave' opacity=".9">
            <animateTransform
                attributeName="transform"
                attributeType="XML"
                type="translate"
                dur="6s"
                calcMode="spline"
                values="0 230;-140 200;0 230"
                keyTimes="0; .4; 1"
                keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                repeatCount="indefinite" />
        </use>
    </g>
</svg>
</footer>
</section>

<section id="rules_section">
    <div class="background_text">
        <p>HiddenClues is a game for 2 players (for now, in the futur we may evolve the game).</p> <br/>
        <p>There is a grid of 9 words. <br/> One player will be the SpyMaster, he will be the only one knowing the word.
            <br/>
        The other player is the Operative, he will have to find the word within the Clues that the SpyMaster will give him.
        <br>
        There will be 5 correct words, 4 bad words and 1 instant lose word</p>

        <a href="#first_section"><button class="section_btn">
                <span>BACK TO TOP</span>
            </button></a>
    </div>
</section>


</body>
<script src="script.js"></script>
</html>
