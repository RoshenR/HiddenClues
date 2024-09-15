<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="game_style.css">
    <script src="game_script.js"></script>
    <title>Hidden Clues</title>
</head>
<body>
    <header>
        <div class="game_name">
            <p id="first_name">Hidden Clues</p>
            <p id="last_name">Will you find it?</p>
        </div>
        <div id="logo">
            <img src="https://placehold.co/150x60" alt="logo">
        </div>
    </header>
    <main>
        <section>
            <div id="container-card">
                <div class="card">CARD1</div>
                <div class="card">CARD2</div>
                <div class="card">CARD3</div>
                <div class="card">CARD4</div>
                <div class="card">CARD5</div>
                <div class="card">CARD6</div>
                <div class="card">CARD7</div>
                <div class="card">CARD8</div>
                <div class="card">CARD9</div>
            </div>
        </section>
    </main>

    <div id="sidebar">
        <div id="player_name">Player Name</div>
        <div id="chatbox">
            <div id="chat_messages"></div>
            <div id="chat_input">
                <input type="text" id="chat_message_input" placeholder="Type a message...">
                <button onclick="sendMessage()">Send</button>
            </div>
        </div>
    </div>

    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
        <defs>
            <linearGradient id="bg">
                <stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
                <stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
                <stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
            </linearGradient>
            <path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
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
</body>
</html>
